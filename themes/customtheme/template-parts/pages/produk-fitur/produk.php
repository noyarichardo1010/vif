<?php
  $product_banner = get_dynamic_image_url('/wp-content/uploads/2024/08/Untitled-12-01-scaled.jpg');

?>

<div id="product">
  <div class="product-banner" style="background-image: url('<?php echo $product_banner; ?>')">
    <div class="product-content--container">
      <h1 class="product-title">Produk - Produk</h1>
      <p class="product-paragraph">Dibawah ini adalah jenis jenis produk VIFX</p>
    </div>
  </div>

  <div class="container product-page">

    <div class="product-list-example2--container">
      <div class="product-list-slider--container scroll-custom">
        <?php echo do_shortcode('[display_custom_posts post_type="product" display_fields="short_description"]'); ?>
        <!-- <div class="product-item">
          <span>&nbsp;</span>
          <div>
            <h1 class="title text-light-blue">Forex</h1>
            <p class="subtitle text-center">Beragam pilihan jenis mata uang dengan fleksibilitas waktu dan potensi profit yang besar</p>
          </div>
  
          <button>Lihat Selengkapnya</button>
        </div>
  
        <div class="product-item">
          <span>&nbsp;</span>
          <div>
            <h1 class="title text-light-blue">Emas</h1>
            <p class="subtitle text-center">Kemudahan bertransaksi jual beli emas online yang legal dan keamanan terjamin</p>
          </div>
  
          <button>Lihat Selengkapnya</button>
        </div>
  
        <div class="product-item">
          <span>&nbsp;</span>
          <div>
            <h1 class="title text-light-blue">Silver</h1>
            <p class="subtitle text-center">Instrumen yang menawarkan peluang pertumbuhan dengan volatilitas yang tinggi</p>
          </div>
  
          <button>Lihat Selengkapnya</button>
        </div>
  
        <div class="product-item">
          <span>&nbsp;</span>
          <div>
            <h1 class="title text-light-blue">Oil</h1>
            <p class="subtitle text-center">Instrumen yang memberikan peluang keuntungan dari fluktuasi harga komoditas global</p>
          </div>
  
          <button>Lihat Selengkapnya</button>
        </div>
  
        <div class="product-item">
          <span>&nbsp;</span>
          <div>
            <h1 class="title text-light-blue">Index US</h1>
            <p class="subtitle text-center">Untuk Anda yang ingin trading di saham gabungan paling aktif di dunia</p>
          </div>
  
          <button>Lihat Selengkapnya</button>
        </div> -->
      </div>
    </div>

    <div class="account-type--container">
      <h1 class="title text-light-blue">TIPE AKUN</h1>
      <p class="subtitle">Pilih tipe akun yang sesuai dengan perencanaan bisnis Anda:</p>

      <div class="product-account-type--container">
        <div class="product-account-type-item">
          <h1 class="title text-light-blue text-center">Akun Reguler</h1>

          <div class="account-benefits--container">
            <span class="account-benefits">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
              </svg>
              <p>Spread 3</p>
            </span>

            <span class="account-benefits">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
              </svg>
              <p>Leverage 1:100</p>
            </span>

            <span class="account-benefits">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
              </svg>
              <p>Minimum Pembukaan Rekening $10,000</p>
            </span>

            <span class="account-benefits">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
              </svg>
              <p>Minimum 1 Lot</p>
            </span>

            <span class="account-benefits">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
              </svg>
              <p>Maximum 20 Lot/Klik</p>
            </span>

            <span class="account-benefits">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
              </svg>
              <p>Komisi 25$/Lot/Sisi</p>
            </span>
          </div>

          <a href="https://cabinet.vifx.co.id/cabinet/login">
            <button type="button">Buka Akun</button>
          </a>
        </div>

        <div class="product-account-type-item">
          <h1 class="title text-light-blue text-center">Akun Mini</h1>

          <div class="account-benefits--container">
            <span class="account-benefits">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
              </svg>
              <p>Spread 3</p>
            </span>

            <span class="account-benefits">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
              </svg>
              <p>Leverage 1:100</p>
            </span>

            <span class="account-benefits">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
              </svg>
              <p>Minimum Pembukaan Rekening $10,000</p>
            </span>

            <span class="account-benefits">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
              </svg>
              <p>Minimum 0.1 Lot</p>
            </span>

            <span class="account-benefits">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
              </svg>
              <p>Maximum 20 Lot/Klik</p>
            </span>

            <span class="account-benefits">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
              </svg>
              <p>Komisi 2.5$/0.1 Lot/Sisi</p>
            </span>
          </div>

          <a href="https://cabinet.vifx.co.id/cabinet/login">
            <button type="button">Buka Akun</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>