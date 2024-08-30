<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article
            id="post-<?php the_ID(); ?>"
            <?php post_class(); ?>
        >
            <header class="entry-header">
                <div class="entry-categories">
                    <?php
                    // Mengambil kategori post dan menampilkannya
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        $category_list = '';
                        foreach ( $categories as $category ) {
                            $category_list .= '<span>'.esc_html( $category->name ).'</span>';
                        }
                        // Menghapus trailing comma dan spasi
                        $category_list = rtrim( $category_list, ', ' );
                        echo $category_list;
                    }
                    ?>
                </div>

                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                
                <p class="entry-author">By: <span class="author"><?php the_author(); ?></span> </p>

                <div class="entry-date">
                    <?php
                    // Mengambil waktu dalam format GMT
                    $gmt_time = get_post_time( 'U', true );

                    // Mengonversi timestamp ke format tanggal yang diinginkan
                    // Anda bisa menyesuaikan format sesuai kebutuhan
                    $formatted_date = date_i18n( 'F j, Y g:i A', $gmt_time );

                    // Mengambil offset timezone
                    $timezone_offset = get_option( 'gmt_offset' );
                    $timezone_label = $timezone_offset >= 0 ? 'GMT+' . abs( $timezone_offset ) : 'GMT' . $timezone_offset;

                    // Menampilkan tanggal dengan offset timezone
                    ?>
                    <p>Published on: <?php echo esc_html( $formatted_date . ' ' . $timezone_label ); ?></p>
                </div>
            </header>

            <div class="entry-image">
                <?php
                // Mengecek apakah custom field 'image' ada
                $acf_image = get_field('image');

                if ( $acf_image ) {
                    // Mengambil URL gambar dari custom field dan menampilkan dengan alt diisi oleh title post
                    echo '<img src="' . esc_url( $acf_image ) . '" alt="' . esc_attr( get_the_title() ) . '">';
                } elseif ( has_post_thumbnail() ) {
                    // Jika tidak ada, tampilkan featured image
                    the_post_thumbnail('full');
                }
                ?>
            </div>

            <div class="entry-content">
                <?php
                    the_content();
                ?>
            </div>

            <div class="entry-tags entry-categories">
                <?php
                $tags = get_the_tags();
                if ( $tags ) {
                    $tag_list = '';
                    foreach ( $tags as $tag ) {
                        $tag_list .= '<span>'. esc_html( $tag->name ). '</span>';
                    }
                    $tag_list = rtrim( $tag_list, ', ' );
                    echo '<p>Tags: ' . $tag_list . '</p>';
                }
                ?>
            </div>

            <footer class="entry-footer"></footer>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <div style="padding: 10rem 0 5rem; display: flex; justify-content: center; font-size: 2em; color: #333;">
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    </div>
<?php endif; ?>

