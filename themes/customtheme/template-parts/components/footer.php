<?php
  $footer_icon_1 = get_dynamic_image_url('/wp-content/uploads/2024/04/logo-invert.png');

  $footer_bank_icon_1 = get_dynamic_image_url('/wp-content/uploads/2024/07/bca-white.png');
  $footer_bank_icon_2 = get_dynamic_image_url('/wp-content/uploads/2024/07/cimb-white.png');
  $footer_bank_icon_3 = get_dynamic_image_url('/wp-content/uploads/2024/07/mandiri-white.png');
  $footer_bank_icon_4 = get_dynamic_image_url('/wp-content/uploads/2024/07/sinarmas-white.png');
?>
<footer id='footer'>
  <div class='container footer--container'>
    <div class='footer-content--container half px-large'>
      <img src='<?php echo $footer_icon_1; ?>' width='120' height='27' alt='company icon footer'/>
      <p class='footer-paragraph'>
        Pakuwon Center
        Superblock Tunjungan City
        Office Building Lt. 15 Unit 5-7
        Jl. Embong Malang No. 1, 3, 5
        Surabaya 60261
      </p>

      <div class="footer-account--section">
        <span class="footer-account--item">
          <img src="<?php echo $footer_bank_icon_1; ?>" alt="bca" />
        </span>

        <span class="footer-account--item">
          <img src="<?php echo $footer_bank_icon_2; ?>" alt="cimb" />
        </span>

        <span class="footer-account--item">
          <img src="<?php echo $footer_bank_icon_3; ?>" alt="mandiri" />
        </span>

        <span class="footer-account--item">
          <img src="<?php echo $footer_bank_icon_4; ?>" alt="sinarmas" />
        </span>
      </div>
    </div>

    <div class='footer-menus--container half'>
      <div class='footer-content--container flex-1'>
        <h1 class='footer-pages--title'>VIFX</h1>
        <?php
        wp_nav_menu( array(
            'menu' => 'Footer-Pages',
            'menu_class' => 'footer-nav',
        ) );
        ?>
      </div>
  
      <div class='footer-content--container flex-1'>
        <h1 class='footer-pages--title'>Documents</h1>
        <?php
        wp_nav_menu( array(
            'menu' => 'Documents',
            'theme_location' => 'secondary-menu',
            'menu_class' => 'footer-nav',
        ) );
        ?>
      </div>

      <div class='footer-content--container flex-1'>
        <h1 class='footer-pages--title'>Contacts</h1>
        <p class='footer-paragraph'>
          0800 - 156 - 5758 </br>
          +62 31 9924 8699 </br>
          info@vifx.c
        </p>
      </div>
    </div>
  </div>

  <div class="container second-footer--container">
    <div class="copyright-section">
      <span>©2024</span>
      <span class="blank-space">&nbsp; &nbsp; &nbsp; &nbsp;</span>
      <span>All rights reserved</span>
    </div>

    <div class="footer-paragraph--container">
      <p><span class="point">Lisensi</span> : PT Victory International Futures teregulasi dan terdaftar secara resmi di BAPPEBTI dengan No.18/BAPPEBTI/PN/4/2008; anggota resmi ICDX dengan No.041/SPKB/ICDX/Dir/IX/2010; anggota resmi ICH dengan No.044/SPKK/ISI-VIF/VI/2012.</p>
    </div>
    <div class="footer-paragraph--container">
      <p><span class="point">Peringatan Resiko</span> : Forex dan CFD memiliki tingkat risiko dan peluang yang tinggi terhadap modal Anda. Hanya trading dengan uang yang Anda siap untuk kehilangannya. Produk ini mungkin tidak cocok untuk semua investor, untuk itu jika hendak berdagang dalam perdagangan berjangka, pahami kegiatan dan risikonya.</p>
    </div>
    <div class="footer-paragraph--container">
      <p><span class="point">Yurisdiksi</span> : PT. Victory International Futures tidak menawarkan layanan kepada penduduk yurisdiksi tertentu seperti Amerika Serikat, Iran, Korea Utara, dan Kanada. Dan tidak dimaksudkan untuk didistribusikan kepada siapa pun di negara mana pun di mana distribusi atau penggunaan tersebut akan melanggar hukum atau peraturan setempat.</p>
    </div>
  </div>
</footer>