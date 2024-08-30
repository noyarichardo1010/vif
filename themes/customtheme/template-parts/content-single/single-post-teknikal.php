<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="technical-analyze">
            <div class="header-section">
                <h1 class="title-company text-center">Victory International Futures</h1>
                <?php the_title( '<h1 class="title-post text-center">', '</h1>' ); ?>

                <div class="header-content">
                    <div class="banner-section">
                        <?php the_content() ?>

                        <div class="banner">
                            <?php
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
                    </div>
                    <div class="table-section">
                        <h3>OHLC - DAILY</h3>
                        <div>
                            <?php
                                $table = get_field( 'ohcd-daily' );

                                if ( ! empty ( $table ) ) {
                                
                                    echo '<table class="table-technical h-lg text-center" border="0">';
                                
                                        if ( ! empty( $table['caption'] ) ) {
                                
                                            echo '<caption>' . $table['caption'] . '</caption>';
                                        }
                                
                                        if ( ! empty( $table['header'] ) ) {
                                
                                            echo '<thead>';
                                
                                                echo '<tr>';
                                
                                                    foreach ( $table['header'] as $th ) {
                                
                                                        echo '<th>';
                                                            echo $th['c'];
                                                        echo '</th>';
                                                    }
                                
                                                echo '</tr>';
                                
                                            echo '</thead>';
                                        }
                                
                                        echo '<tbody>';
                                
                                            foreach ( $table['body'] as $tr ) {
                                
                                                echo '<tr>';
                                
                                                    foreach ( $tr as $td ) {
                                
                                                        echo '<td>';
                                                            echo $td['c'];
                                                        echo '</td>';
                                                    }
                                
                                                echo '</tr>';
                                            }
                                
                                        echo '</tbody>';
                                
                                    echo '</table>';
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="content-table">
                    <div class="table1">
                        <?php
                            $table = get_field( 'economic-calendar' );

                            if ( ! empty ( $table ) ) {
                            
                                echo '<table class="table-technical h-md text-center text-xs" border="0">';
                            
                                    if ( ! empty( $table['caption'] ) ) {
                            
                                        echo '<caption>' . $table['caption'] . '</caption>';
                                    }
                            
                                    if ( ! empty( $table['header'] ) ) {
                            
                                        echo '<thead>';
                            
                                            echo '<tr>';
                            
                                                foreach ( $table['header'] as $th ) {
                            
                                                    echo '<th>';
                                                        echo $th['c'];
                                                    echo '</th>';
                                                }
                            
                                            echo '</tr>';
                            
                                        echo '</thead>';
                                    }
                            
                                    echo '<tbody>';
                            
                                        foreach ( $table['body'] as $tr ) {
                            
                                            echo '<tr>';
                            
                                                foreach ( $tr as $td ) {
                            
                                                    echo '<td>';
                                                        echo $td['c'];
                                                    echo '</td>';
                                                }
                            
                                            echo '</tr>';
                                        }
                            
                                    echo '</tbody>';
                            
                                echo '</table>';
                            }
                        ?>
                    </div>
                    <div class="table2">
                        <?php
                            $table = get_field( 'trading-suggest' );

                            if ( ! empty ( $table ) ) {
                            
                                echo '<table class="table-technical h-sm text-center text-xs" border="0">';
                            
                                    if ( ! empty( $table['caption'] ) ) {
                            
                                        echo '<caption>' . $table['caption'] . '</caption>';
                                    }
                            
                                    if ( ! empty( $table['header'] ) ) {
                            
                                        echo '<thead>';
                            
                                            echo '<tr>';
                            
                                                foreach ( $table['header'] as $th ) {
                            
                                                    echo '<th>';
                                                        echo $th['c'];
                                                    echo '</th>';
                                                }
                            
                                            echo '</tr>';
                            
                                        echo '</thead>';
                                    }
                            
                                    echo '<tbody>';
                            
                                        foreach ( $table['body'] as $tr ) {
                            
                                            echo '<tr>';
                            
                                                foreach ( $tr as $td ) {
                            
                                                    echo '<td>';
                                                        echo $td['c'];
                                                    echo '</td>';
                                                }
                            
                                            echo '</tr>';
                                        }
                            
                                    echo '</tbody>';
                            
                                echo '</table>';
                            }
                        ?>
                    </div>
                </div>
                

                <div class="content-table">
                    <div class="table1">
                        <?php
                            $table = get_field( 'support-resistence' );

                            if ( ! empty ( $table ) ) {
                            
                                echo '<table class="table-technical h-md text-center text-xs side-header" border="0">';
                            
                                    if ( ! empty( $table['caption'] ) ) {
                            
                                        echo '<caption>' . $table['caption'] . '</caption>';
                                    }

                                    echo '<tbody>';

                                        $highlightNextRows = 0;
                                        $isSpan = false;
                                        foreach ( $table['body'] as $tr ) {
                            
                                            echo '<tr>';
                            
                                                foreach ( $tr as $index => $td ) {
                            
                                                    // echo '<td>';
                                                    //     echo $td['c'];
                                                    // echo '</td>';

                                                    if ($index === 0) {
                                                        // If the content is "RESISTANCE" or "SUPPORT", set the highlighting flag
                                                        if (!$isSpan && ($td['c'] === 'RESISTANCE' || $td['c'] === 'SUPPORT')) {
                                                            $highlightNextRows = 3; // Highlight this row and the next two
                                                        }
                                        
                                                        // Check if we need to apply highlighting
                                                        if ($highlightNextRows > 0) {
                                                            echo '<td style="background-color: #D48625;">' . $td['c'] . '</td>';
                                                        } else {
                                                            echo '<td>' . $td['c'] . '</td>';
                                                        }
                                                    } else {
                                                        echo '<td>' . $td['c'] . '</td>';
                                                    }
                                                }

                                            if ($highlightNextRows > 0) {
                                                $highlightNextRows--;
                                            }
                            
                                            echo '</tr>';
                                        }
                            
                                    echo '</tbody>';
                            
                                echo '</table>';
                            }
                        ?>
                    </div>
                    <div class="table2">
                        <?php
                            $table = get_field( 'market-review' );

                            if ( ! empty ( $table ) ) {
                            
                                echo '<table class="table-technical h-md text-center review" border="0">';
                            
                                    if ( ! empty( $table['caption'] ) ) {
                            
                                        echo '<caption>' . $table['caption'] . '</caption>';
                                    }
                            
                                    if ( ! empty( $table['header'] ) ) {
                            
                                        echo '<thead>';
                            
                                            echo '<tr>';
                            
                                                foreach ( $table['header'] as $th ) {
                            
                                                    echo '<th>';
                                                        echo $th['c'];
                                                    echo '</th>';
                                                }
                            
                                            echo '</tr>';
                            
                                        echo '</thead>';
                                    }
                            
                                    echo '<tbody>';
                            
                                        foreach ( $table['body'] as $tr ) {
                            
                                            echo '<tr>';
                            
                                                foreach ( $tr as $td ) {
                            
                                                    echo '<td>';
                                                        echo $td['c'];
                                                    echo '</td>';
                                                }
                            
                                            echo '</tr>';
                                        }
                            
                                    echo '</tbody>';
                            
                                echo '</table>';
                            }
                        ?>
                    </div>
                </div>

                <div>
                    <?php 
                        $disclaimer = get_field('disclaimer');

                        if (!empty($disclaimer)) {
                            echo '<p class="disclaimer"><span>Disclaimer</span> : '. esc_attr($disclaimer) .'</p>';
                        } else {
                            echo '';
                        }
                    ?>
                </div>
            </div>

            <div></div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <div style="padding: 10rem 0 5rem; display: flex; justify-content: center; font-size: 2em; color: #333;">
        <p><?php esc_html_e( 'Sorry, no products matched your criteria.' ); ?></p>
    </div>
<?php endif; ?>