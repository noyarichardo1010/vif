<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container product-detail">
          <div class="header-section">
            <?php the_title( '<h1 class="page-title">Trading ', ' Aman dan Teregulasi</h1>' ); ?>

            <?php
              $acf_desc = get_field('description');

              $description = !empty($acf_desc) ? $acf_desc : ''
            ?>
            <p class="page-description"><?php echo esc_html($description) ?></p>
          </div>

          <div class="content-section">
            <?php the_title( '<h1 class="page-subtitle">Keuntungan Trading ', ' di VIFX</h1>' ); ?>
            <?php
              $data_pb_1 = get_field('product_benefit_1');
              $data_pb_desc_1 = get_field('product_benefit_1_description');

              $data_pb_2 = get_field('product_benefit_2');
              $data_pb_desc_2 = get_field('product_benefit_2_description');

              $data_pb_3 = get_field('product_benefit_3');
              $data_pb_desc_3 = get_field('product_benefit_3_description');

              $product_benefit1 = !empty($data_pb_1) ? $data_pb_1 : '';
              $product_benefit_description_1 = !empty($data_pb_desc_1) ? $data_pb_desc_1 : '';

              $product_benefit2 =  !empty($data_pb_2) ? $data_pb_2 : '';
              $product_benefit_description_2 = !empty($data_pb_desc_2) ? $data_pb_desc_2 : '';

              $product_benefit3 = !empty($data_pb_3) ? $data_pb_3 : '';
              $product_benefit_description_3 = !empty($data_pb_desc_3) ? $data_pb_desc_3 : '';
            ?>
            <div class="content-points--container">
              <div class="point-item">
                <span>&nbsp;</span>
                <div>
                  <h1 class="title text-center text-light-blue"><?php echo esc_html($product_benefit1) ?></h1>
                  <p class="subtitle text-center"><?php echo esc_html($product_benefit_description_1) ?></p>
                </div>
              </div>

              <div class="point-item">
                <span>&nbsp;</span>
                <div>
                  <h1 class="title text-center text-light-blue"><?php echo esc_html($product_benefit2) ?></h1>
                  <p class="subtitle text-center"><?php echo esc_html($product_benefit_description_2) ?></p>
                </div>
              </div>

              <div class="point-item">
                <span>&nbsp;</span>
                <div>
                  <h1 class="title text-center text-light-blue"><?php echo esc_html($product_benefit3) ?></h1>
                  <p class="subtitle text-center"><?php echo esc_html($product_benefit_description_3) ?></p>
                </div>
              </div>

            </div>

            <div class="product-table-section">
              <?php the_title( '<h1 class="page-subtitle text-center">Spesifikasi Trading ', ' di VIFX</h1>' ); ?>

              <div class="product-spec-table--container">
                  <?php
                      $table = get_field( 'product_spesification' );

                      $table_type = get_field( 'product_spesification_type' );

                      $isSpan = false; // ubah ke true jika sudah memiliki fitur colspan / rowspan

                      if (!empty($table_type)) echo '<h3>'.$table_type.'</h3>';

                      if ( ! empty ( $table ) ) {
                      
                          echo '<table class="product-spec-table text-center" border="0">';
                      
                              if ( ! empty( $table['caption'] ) ) {
                      
                                  echo '<caption>' . $table['caption'] . '</caption>';
                              }
                      
                              echo '<tbody>';
                      
                                  foreach ( $table['body'] as $tr ) {
                      
                                      echo '<tr>';

                                      $colIndex = 0; // Penanda indeks kolom saat ini

                                        while ($colIndex < count($tr)) {
                                            $td = $tr[$colIndex];
                                            $cellContent = $td['c'];
                                            $colspanCount = substr_count($cellContent, '|') + 1; // Menentukan jumlah colspan
                                
                                            // Jika terdapat karakter '|', gunakan atribut colspan dan lewati kolom berikutnya
                                            if (!$isSpan && $colspanCount > 1) {
                                                $cleanedContent = str_replace('|', '', $cellContent);
                                                echo '<td colspan="' . $colspanCount . '">' . $cleanedContent . '</td>';
                                                $colIndex += $colspanCount; // Lompat ke kolom berikutnya setelah colspan
                                            } else {
                                                echo '<td>' . $cellContent . '</td>';
                                                $colIndex++; // Lanjut ke kolom berikutnya
                                            }
                                        }
                                          // foreach ( $tr as $td ) {
                                            
                                          //     $cellContent = $td['c'];

                                          //     $colspanCount = substr_count($cellContent, '|');

                                          //     if (!$isSpan && $colspanCount > 1) {
                                          //         // Hapus karakter '|' dari konten sel
                                          //         $cleanedContent = str_replace('|', '', $cellContent);
                                          //         echo '<td colspan="' . $colspanCount . '">' . $cleanedContent . '</td>';
                                          //     } else {
                                          //         echo '<td>' . $cellContent . '</td>';
                                          //     }
                      
                                          //     // echo '<td>';
                                          //     //     echo $td['c'];
                                          //     // echo '</td>';
                                          // }
                      
                                      echo '</tr>';
                                  }
                      
                              echo '</tbody>';
                      
                          echo '</table>';
                      }
                  ?>
              </div>

              <div class="product-spec-table--container">
                  <?php
                      $table = get_field( 'product_spesification_2' );
                      $table_type = get_field( 'product_spesification_type_2' );

                      $isSpan = false; // ubah ke true jika sudah memiliki fitur colspan / rowspan

                      if (!empty($table_type)) echo '<h3>'.$table_type.'</h3>';

                      if ( ! empty ( $table ) ) {
                      
                          echo '<table class="product-spec-table text-center" border="0">';
                      
                              if ( ! empty( $table['caption'] ) ) {
                      
                                  echo '<caption>' . $table['caption'] . '</caption>';
                              }
                      
                              echo '<tbody>';
                      
                                  foreach ( $table['body'] as $tr ) {
                      
                                      echo '<tr>';

                                      $colIndex = 0; // Penanda indeks kolom saat ini

                                        while ($colIndex < count($tr)) {
                                            $td = $tr[$colIndex];
                                            $cellContent = $td['c'];
                                            $colspanCount = substr_count($cellContent, '|') + 1; // Menentukan jumlah colspan
                                
                                            // Jika terdapat karakter '|', gunakan atribut colspan dan lewati kolom berikutnya
                                            if (!$isSpan && $colspanCount > 1) {
                                                $cleanedContent = str_replace('|', '', $cellContent);
                                                echo '<td colspan="' . $colspanCount . '">' . $cleanedContent . '</td>';
                                                $colIndex += $colspanCount; // Lompat ke kolom berikutnya setelah colspan
                                            } else {
                                                echo '<td>' . $cellContent . '</td>';
                                                $colIndex++; // Lanjut ke kolom berikutnya
                                            }
                                        }
                                          // foreach ( $tr as $td ) {
                                            
                                          //     $cellContent = $td['c'];

                                          //     $colspanCount = substr_count($cellContent, '|');

                                          //     if (!$isSpan && $colspanCount > 1) {
                                          //         // Hapus karakter '|' dari konten sel
                                          //         $cleanedContent = str_replace('|', '', $cellContent);
                                          //         echo '<td colspan="' . $colspanCount . '">' . $cleanedContent . '</td>';
                                          //     } else {
                                          //         echo '<td>' . $cellContent . '</td>';
                                          //     }
                      
                                          //     // echo '<td>';
                                          //     //     echo $td['c'];
                                          //     // echo '</td>';
                                          // }
                      
                                      echo '</tr>';
                                  }
                      
                              echo '</tbody>';
                      
                          echo '</table>';
                      }
                  ?>
              </div>
            </div>
          </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <div style="padding: 10rem 0 5rem; display: flex; justify-content: center; font-size: 2em; color: #333;">
        <p><?php esc_html_e( 'Sorry, no products matched your criteria.' ); ?></p>
    </div>
<?php endif; ?>