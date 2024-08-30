<?php

function theme_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function add_custom_scripts() {
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true);

    $src_white_logo = get_dynamic_image_url('/wp-content/uploads/2024/04/logo-invert.png');
    $src_black_logo = get_dynamic_image_url('/wp-content/uploads/2024/07/logo-black.png');

    $current_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');


    // Pass data to JavaScript
    wp_localize_script('custom-js', 'pageData', array(
    'isSingle' => is_single() ? true : false,
    'currentPath' => '/' . $current_path . '/',
    'pagesWithWhiteBackground' => array('/faq/', '/panduan-trading/'),
    'srcWhiteLogo' => $src_white_logo,
    'srcBlackLogo' => $src_black_logo
));
}
add_action('wp_enqueue_scripts', 'add_custom_scripts');


function vifx_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'vifx_theme_setup');

function get_dynamic_image_url($image_path) {
    $env = wp_get_environment_type() ?? 'production'; // 'local', 'development', 'staging', 'production'
    $base_url = ($env === 'local') ? 'http://localhost/vifx' : 'http://wpdev.vifx.co.id';
    return $base_url . $image_path;
}

/** new code for new theme base (below) */

// function your_theme_setup() {
//     // Tambahkan dukungan untuk title tag
//     add_theme_support( 'title-tag' );

//     // Tambahkan dukungan untuk gambar unggulan
//     add_theme_support( 'post-thumbnails' );

//     // Registrasi menu navigasi
//     register_nav_menus( array(
//         'primary' => __( 'Primary Menu', 'your-theme' ),
//     ) );
// }
// add_action( 'after_setup_theme', 'your_theme_setup' );

// function your_theme_scripts() {
//     // Enqueue style utama
//     wp_enqueue_style( 'your-theme-style', get_stylesheet_uri() );

//     // Enqueue script utama
//     wp_enqueue_script( 'your-theme-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
// }
// add_action( 'wp_enqueue_scripts', 'your_theme_scripts' );

function display_recent_posts_shortcode($atts) {
    // Parameter default
    $atts = shortcode_atts(array(
        'posts' => 5,         // Jumlah posting yang ditampilkan
        'category' => '',     // Nama kategori, bisa kosong untuk menampilkan semua kategori
    ), $atts, 'recent-posts');

    $current_category = strtolower($atts['category']);
    $category_no_desc = 'Analisa Teknikal';

    // Query untuk mengambil posting terbaru berdasarkan kategori (jika disediakan)
    $query_args = array(
        'posts_per_page' => intval($atts['posts']),
        'post_status'    => 'publish',
    );

    if (!empty($atts['category'])) {
        // $query_args['category_name'] = sanitize_text_field($atts['category']);
        $query_args['category_name'] = sanitize_text_field($current_category);
    }

    $query = new WP_Query($query_args);

    // Mulai output buffer
    ob_start();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            $image = get_field('image', get_the_ID());

            // Ambil konten post default (classic editor)
            $post_content = get_the_content();

            // Tentukan deskripsi yang ditampilkan
            $description = !empty($post_content) ? $post_content : '';

            $post_url = get_permalink();
            $post_date = get_the_date();
            $post_time = get_the_time('U'); // Ambil timestamp post
            $current_time = current_time('timestamp'); // Ambil timestamp saat ini

            $is_desc_show = ($current_category === strtolower($category_no_desc));

            if ($post_time >= strtotime('-1 week', $current_time)) {
                $display_date = human_time_diff($post_time, $current_time) . ' ago';
            } else {
                $display_date = date_i18n(get_option('date_format'), $post_time);
            }

            ?>
            <div class="news-card-homepage">
                <div class="image-card">
                    <?php if ($image) : ?>
                        <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>">
                    <?php elseif (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); // Menampilkan featured image jika tidak ada gambar ACF ?>
                    <?php else : ?>
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-980x653.jpg" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </div>

                <div class="content-card">
                    <h1 class="title text-2-line">
                        <a class="perma-link" href="<?php echo esc_url($post_url); ?>"><?php the_title(); ?></a>
                    </h1>

                    <?php if ($description && !$is_desc_show) : ?>
                        <div class="desc text-2-line""><?php echo wp_kses_post($description); ?></div>
                    <?php endif; ?>

                    <p class="post-date"><?php echo esc_html($display_date); ?></p>
                </div>
            </div>
            <?php
        }
    } else {
        echo '<span>No posts available.</span>';
    }

    // Reset post data
    wp_reset_postdata();

    // Mengembalikan output
    return ob_get_clean();
}
add_shortcode('recent-posts', 'display_recent_posts_shortcode');

function display_posts_by_category_with_custom_html($atts) {
    $atts = shortcode_atts(array(
        'posts_per_page' => 10, // Jumlah posting per halaman
        'categories' => '',  // Daftar kategori dipisahkan dengan koma
        'current_category' => '',
    ), $atts, 'posts-by-category');
    
    $current_category = isset($_GET['cat']) ? sanitize_text_field($_GET['cat']) : $atts['current_category'];
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // Ubah kategori menjadi array
    $categories = !empty($atts['categories']) ? explode(',', $atts['categories']) : array(
        'analisa-fundamental',
        'analisa-teknikal',
        'post-news',
    );

    ob_start();

    foreach ($categories as $category) {
        $category = trim($category); // Hapus spasi ekstra

        if (strtolower($category) === strtolower($current_category)) {
            $query_args = array(
                'category_name'  => $category,
                'posts_per_page' => intval($atts['posts_per_page']),
                'paged'          => $paged,
                'post_status'    => 'publish',
            );
    
            $query = new WP_Query($query_args);
    
            if ($query->have_posts()) {
    
                echo '<div class="analyze-card--container card-category-container ' . esc_attr($category) . '">';
    
                while ($query->have_posts()) {
                    $query->the_post();
    
                    // Ambil URL permalink dan post date
                    $post_url = get_permalink();
                    $post_date = get_the_date('d/m/Y');
                    $title = get_the_title();
    
                    // Ambil field ACF
                    $post_content = get_the_content();
                    $description = !empty($post_content) ? $post_content : '';
    
                    // Ambil featured image atau image ACF
                    $acf_image = get_field('image', get_the_ID());
                    $image_url = !empty($acf_image) 
                                    ? $acf_image
                                    : (has_post_thumbnail() 
                                        ? get_the_post_thumbnail_url() 
                                        : 'https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-980x653.jpg');
    
                    if (strtolower($category) === 'analisa-fundamental' || strtolower($category) === 'analisa-teknikal') {
                        // HTML untuk analisa fundamental dan teknikal
                        ?>
                        <div class="analyze-card">
                            <div class="img-section">
                                <img src="<?php echo esc_url($image_url); ?>" alt="graph">
                            </div>
    
                            <div class="content-section">
                                <h1 class="title text-center text-3-line"><a class="perma-link" href="<?php echo esc_url($post_url); ?>"><?php echo esc_html($title); ?></a></h1>
                                <span class="content text-3-line">
                                    <?php echo wp_kses_post($description); ?>
                                </span>
                                <span class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <?php echo esc_html($post_date); ?>
                                </span>
                            </div>
                        </div>
                        <?php
                    } elseif (strtolower($category) === 'post-news') {
                        // HTML untuk post / news
                        ?>
                        <div class="news-card-analyze">
                            <div class="image-card">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                            </div>
    
                            <div class="content-card">
                                <h1 class="title text-center text-2-line"><a class="perma-link" href="<?php echo esc_url($post_url); ?>"><?php echo esc_html($title); ?></a></h1>
                                <p class="sub-title text-3-line">
                                    <?php echo wp_kses_post(wp_trim_words($description, 40)); ?>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                }
    
                echo '</div>';
    
                // Tambahkan pagination jika kategori aktif
                $pagination = paginate_links(array(
                    'total' => $query->max_num_pages,
                    'current' => $paged,
                    'format' => '?paged=%#%&cat=' . urlencode($category),
                    'show_all' => false,
                    'prev_next' => true,
                    'prev_text' => __('« Previous'),
                    'next_text' => __('Next »'),
                ));
    
                if ($pagination) {
                    // echo '<div class="pagination">' . $pagination . '</div>';
                }
    
                wp_reset_postdata();
            }
        }
    }

    return ob_get_clean();
}
add_shortcode('posts-by-category', 'display_posts_by_category_with_custom_html');

function render_custom_posts($atts) {
    // Mendefinisikan nilai default untuk parameter shortcode
    $atts = shortcode_atts(
        array(
            'post_type' => 'testimony',  // Default post type
            'posts_per_page' => -1,         // Menampilkan semua post
            'display_fields' => '',         // Fields ACF yang ingin ditampilkan, dipisahkan dengan koma
            'type_education' => '', 
        ),
        $atts,
        'display_custom_posts'
    );

    // Query untuk mengambil post berdasarkan post_type
    $args = array(
        'post_type' => $atts['post_type'],
        'posts_per_page' => $atts['posts_per_page'],
    );

    if ($atts['post_type'] === 'education' && !empty($atts['type_education']) ) {
        $args = array(
            'post_type' => $atts['post_type'],
            'posts_per_page' => $atts['posts_per_page'],
            'meta_query' => array(
                array(
                    'key'     => 'type',
                    'value'   => $atts['type_education'],
                    'compare' => '='
                )
            ),
            'meta_key' => 'order',
            'orderby' => 'meta_value',
            'order' => 'ASC',
        );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $output = ''; // Tidak ada div parent di sini

        while ($query->have_posts()) {
            $query->the_post();

            // Mengambil field ACF yang ingin ditampilkan
            $fields = [];
            if (!empty($atts['display_fields'])) {
                $field_names = explode(',', $atts['display_fields']);
                foreach ($field_names as $field) {
                    $field_value = get_field(trim($field));
                    if ($field_value) {
                        $fields[trim($field)] = $field_value;
                    }
                }
            }

            $post_content = get_the_content();
            $description = !empty($post_content) ? $post_content : '';

            $image = get_field('testimony_writer_photo', get_the_ID());

            $url = get_permalink();

            $url_photo = !empty($image) 
                            ? $image
                            : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8oghbsuzggpkknQSSU-Ch_xep_9v3m6EeBQ&s';

            // Render HTML berdasarkan post type
            if ($atts['post_type'] === 'testimony') {
                // Template untuk post type 'testimonies'
                $testimony_with_quotes = preg_replace('/<p>(.*?)<\/p>/', '<p>“$1”</p>', wp_kses_post($fields['testimony'] ?? ''));

                $output .= '<div class="testimony-card">';
                $output .= '<span class="testi-paragraph"><i>' . $testimony_with_quotes . '</i></span>';
                $output .= '<div class="testi-profile">';
                    $output .= '<div class="photo-profile">';
                        $output .= '<img src="'. $url_photo . '" alt="'. esc_html($fields['testimony_writer'] ?? '') .'photos"/>';
                    $output .= '</div>';
                    $output .= '<div class="info-profile">';
                        $output .= '<h3>' . esc_html($fields['testimony_writer'] ?? get_the_title()) . '</h3>';
                        $output .= '<span>' . esc_html($fields['testimony_location'] ?? '') . '</span>';
                    $output .= '</div>';
                $output .= '</div>';
                // $output .= '<span class="quote"><i>' . wp_kses_post($fields['testimony'] ?? '') . '</i></span>';
                $output .= '</div>';
            } elseif ($atts['post_type'] === 'product') {
                $output .= '<div class="product-item">';
                $output .= '<span>&nbsp;</span>';
                $output .= '<div>';
                $output .= '<h1 class="title text-light-blue">' . get_the_title() . '</h1>';
                $output .= '<p class="subtitle text-center">' . $fields['short_description'] ?? '' . '</p>';
                $output .= '</div>';
                $output .= '<button><a href="'. esc_url($url) .'">Lihat Selengkapnya </a></button>';
                $output .= '</div>';
            } elseif ($atts['post_type'] === 'education') {
                $output .= '<div class="accordion--container">';
                    $output .= '<div class="accordion-parent">';
                        $output .= '<div class="accordion-item--container">';
                        
                        if (strtolower($atts['type_education']) === 'faq') {
                            $output .= '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">';
                            $output .= '<path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />';
                            $output .= '</svg>';
                        }
            
                        $output .= '<span>' . get_the_title() . '</span>';
                        $output .= '</div>';
                    
                        $output .= '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">';
                        $output .= '<path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />';
                        $output .= '</svg>';

                    $output .= '</div>';

                    $output .= '<div class="accordion-content">';
                        $output .= '<p>' . wp_kses_post($description) . '</p>';
                    $output .= '</div>';
                $output .= '</div>';
            } elseif ($atts['post_type'] === 'head_branch') {
                $output .= '<div class="branch-card">';
                    $output .= '<h2 class="title">'. get_the_title() .'</h2>';
                    $output .= '<span class="years">Est: '. esc_html($fields['established_year'] ?? '') .'</span>';
                    
                    $output .= '<div class="branch-head-foto">';
                        $output .= '<img src="'. esc_html($fields['photo_head_branch'] ?? 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8oghbsuzggpkknQSSU-Ch_xep_9v3m6EeBQ&s') . '" alt="'. esc_html(get_the_title() ?? '') .' photos"/>';
                    $output .= '</div>';

                    $output .= '<button class="open-branch-modal-branch popmake-173" '
                                . 'data-title="' . esc_attr(get_the_title() ?? '') . '" '
                                . 'data-description="' . esc_attr(get_the_content() ?? '') . '" '
                                . 'data-image="' . esc_url($fields['photo_head_branch'] ?? 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8oghbsuzggpkknQSSU-Ch_xep_9v3m6EeBQ&s') . '" '
                                . 'data-est-year="' . esc_attr($fields['established_year'] ?? '') . '">'
                                . 'Info</button>';

                $output .= '</div>';
            }
        }

        // Reset post data
        wp_reset_postdata();
    } else {
        $output = '<p>No posts found.</p>';
    }

    return $output;
}
add_shortcode('display_custom_posts', 'render_custom_posts');

function display_branch_data_shortcode($atts) {
    // Parsing atribut shortcode
    $atts = shortcode_atts(
        array(
            'post_type' => 'branch', // Default post type
            'posts_per_page' => -1, // Mengambil semua posts
        ),
        $atts
    );

    // Query untuk mengambil posts dengan post type 'branch'
    $query = new WP_Query(array(
        'post_type' => $atts['post_type'],
        'posts_per_page' => $atts['posts_per_page'],
    ));

    $output = '';

    if ($query->have_posts()) {
        // $output .= '<div class="branch-list">';

        while ($query->have_posts()) {
            $query->the_post();

            $branch = [
                'id' => get_field('branch_id'),
                'name' => get_field('branch_name'),
                'address' => get_field('branch_address'),
                'position' => get_field('position'), // Group field 'position'
                'branch-list' => get_field('branch_list'), // Repeater field 'branch-list'
                'is-default' => get_field('is_default'),
                'map-url' => get_field('map_url')
            ];

            $branches[] = $branch;
        }

        // $output .= '</div>';
        wp_reset_postdata(); // Mengembalikan query global ke kondisi awal
        $url_by_env = get_dynamic_image_url('/wp-content/uploads/2024/07/indo-blue.png');
        $pin_icon = get_dynamic_image_url('/wp-content/uploads/2024/07/pin-inactive.png');

        // Layout HTML dengan loop data yang didapat
        $output .= '<div class="our-location--container">
        <div class="map">
            <img src="'.$url_by_env.'" alt="our-location" />';
      
            foreach ($branches as $branch) {
                $output .= '<button
                class="pin"
                data-branch="' . esc_attr($branch['id']) . '"
                data-map-url="' . esc_url($branch['map-url']) . '"';

                // Pengecekan untuk posisi
                $styles = ['background-image: url(' . $pin_icon . ')'];
                if (isset($branch['position']['left']) && $branch['position']['left'] > -1) {
                    $styles[] = 'left: ' . esc_attr($branch['position']['left']);
                }
                if (isset($branch['position']['bottom']) && $branch['position']['bottom'] > -1) {
                    $styles[] = 'bottom: ' . esc_attr($branch['position']['bottom']);
                }
                if (isset($branch['position']['top']) && $branch['position']['top'] > -1) {
                    $styles[] = 'top: ' . esc_attr($branch['position']['top']);
                }
                if (isset($branch['position']['right']) && $branch['position']['right'] > -1) {
                    $styles[] = 'right: ' . esc_attr($branch['position']['right']);
                }

                // Menambahkan style jika ada
                if (!empty($styles)) {
                    $output .= ' style="' . implode('; ', $styles) . ';"';
                }

                $output .= '></button>';
            }
    
            $output .= '</div>
            </div>
        
            <div class="maps--container">
                <div class="mapouter">
                    <div class="gmap_canvas">
                    <iframe
                        id="branch-map"
                        src="' . esc_url($branches[0]['map-url']) . '"
                        width="600"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
        
                <div class="branch-list--container">
                    <h1>Branch List</h1>
            
                    <div class="branch-content--container" id="branch-content-container">';
    
                foreach ($branches as $branch) {
                    $is_default = filter_var($branch['is-default'], FILTER_VALIDATE_BOOLEAN);

                    $output .= '<div class="branch-content--list" id="branch-' . esc_attr($branch['id']) . '-list" style="display: ' . ($is_default ? 'grid' : 'none') . ';">';

                    $branch_list_table = $branch['branch-list']; // Ambil data dari tabel ACF
                    
                    // if (!empty($branch['branch-list'])) {
                    //     foreach ($branch['branch-list'] as $subBranch) {
                    //         $output .= '<div class="branch-content">
                    //         <span class="branch-name">' . esc_html($subBranch['name']) . '</span>
                    //         <span class="branch-address">' . esc_html($subBranch['address']) . '</span>
                    //         </div>';
                    //     }
                    // }

                    if (!empty($branch_list_table['body'])) {
                        foreach ($branch_list_table['body'] as $row) {
                            $output .= '<div class="branch-content">';
                            $output .= '<span class="branch-name">' . esc_html($row[0]['c']) . '</span>'; // Nama Cabang (kolom pertama)
                            $output .= '<span class="branch-address">' . esc_html($row[1]['c']) . '</span>'; // Alamat Cabang (kolom kedua)
                            $output .= '</div>';
                        }
                    }
        
                    $output .= '</div>';
                }
        
                    $output .= '</div>
            </div>
            </div>';
    } else {
        $output .= '<p>No branches found.</p>';
    }

    return $output;
}

// Mendaftarkan shortcode
add_shortcode('display_branches', 'display_branch_data_shortcode');
?>