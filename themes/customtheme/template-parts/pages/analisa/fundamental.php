<?php
  $analyze_banner = get_dynamic_image_url('/wp-content/uploads/2024/08/172400800-scaled.jpg');
  // do_shortcode('[posts-by-category posts_per_page="-1" categories="analisa-fundamental,analisa-teknikal,post-news" current_category="post-news"]')
?>

<div id="analyze-page">
  <div class="analyze-page-hero" style="background-image: url('<?php echo $analyze_banner; ?>')">
    <h1 class="content-title">Analisa pada VIFX</h1>
    <p class="content-subtitle">Portal seputar analisa teknikal dari analis VIFX yang membantumu menemukan peluang saat trading.</p>
  </div>
  <div class="container analyze-page">
     <div class="post-section">
      <div class="tabs--container">
        <button class="active" data-category="analisa-fundamental">Fundamental</button>
        <button data-category="analisa-teknikal">Teknikal</button>
        <!-- <button data-category="post-news">News / Post</button> -->
      </div>
      <div>
        
        <?php echo do_shortcode('[posts-by-category posts_per_page="-1" categories="analisa-fundamental,analisa-teknikal,post-news" current_category="analisa-fundamental"]') ?>
        <?php echo do_shortcode('[posts-by-category posts_per_page="-1" categories="analisa-fundamental,analisa-teknikal,post-news" current_category="analisa-teknikal"]') ?>

        <!-- <div class="card-category-container analisa-fundamental"> -->
          <!-- <div class="analyze-card">
            <div class="img-section">
              <img src="https://vifx.co.id/wp-content/uploads/XAUUSD.webp" alt="graph">
            </div>
  
            <div class="content-section">
              <h1 class="title">Daily Market Suggestion</h1>
  
              <h2 class="title mt-xs">XAUUSD - 27 Juni 2024</h2>
  
              <span></span>
  
              <span class="content">
                Victory International Futures Daily Market Suggestion – 27 Juni 2024 XAUUSD OHLC
              </span>
  
              <span class="date">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                27/06/2024
              </span>
            </div>
          </div> -->
        <!-- </div> -->

        <!-- <div class="card-category-container analisa-teknikal" style="display: none;"> -->
          <!-- <div class="analyze-card">
            <div class="img-section">
              <img src="https://vifx.co.id/wp-content/uploads/XAUUSD.webp" alt="graph">
            </div>
  
            <div class="content-section">
              <h1 class="title">Daily Market Suggestion</h1>
  
              <h2 class="title mt-xs">XAUUSD - 27 Juni 2024</h2>
  
              <span class="content">
                Victory International Futures Daily Market Suggestion – 27 Juni 2024 XAUUSD OHLC
              </span>
  
              <span class="date">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                27/06/2024
              </span>
            </div>
          </div> -->
        <!-- </div> -->

        <!-- <div class="card-category-container post-news" style="display: none;"> -->
          <!-- <div class="news-card-analyze">
            <div class="image-card">
              <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-980x653.jpg" alt="news 1">
            </div>

            <div class="content-card">
              <h1 class="title">News 1</h1>
              <p style="font-size:0.8em; color: rgba(0, 0, 0, 0.6); margin-top: 0.5rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fringilla arcu vel lacus molestie pretium. Nunc ligula ante, maximus non venenatis ut, pharetra nec purus. Quisque maximus eu dui non tempus. Nullam semper augue dolor. Nullam a libero vitae lorem elementum egestas.</p>
            </div>
          </div> -->
        <!-- </div> -->
      </div>
     </div>

     <div class="post-list-section">
      <h1>Last Post</h1>

      <ul class="last-post--container">
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
          </svg>

          <p class="title">USDJPY Turun Setelah Sentuh Level Tertinggi 38 Tahun</p>
          <span>27/06/2024</span>
        </li>

        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
          </svg>

          <p class="title">Harga Emas Sideways karena Pelaku Pasar Tunggu Data PCE AS di Hari Jumat</p>
          <span>27/06/2024</span>
        </li>

        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
          </svg>

          <p class="title">Harga Minyak WTI Melemah karena Kenaikan Mengejutkan Stok Minyak Mentah AS</p>
          <span>27/06/2024</span>
        </li>

        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
          </svg>

          <p class="title">Daily Market Suggestion XAUUSD – 27 Juni 2024</p>
          <span>27/06/2024</span>
        </li>
      </ul>
     </div>
  </div>
</div>