<footer id='footer'>
  <div class='container footer--container'>
    <div class='footer-content--container half px-large'>
      <img src='http://localhost/vifx/wp-content/uploads/2024/04/logo-invert.png' width='120' height='27' alt='company icon footer'/>
      <p class='footer-paragraph'>
        Pakuwon Center
        Superblock Tunjungan City
        Office Building Lt. 15 Unit 5-7
        Jl. Embong Malang No. 1, 3, 5
        Surabaya 60261
      </p>

      <div class="footer-account--section">
        <span class="footer-account--item">
          <!-- <img src="http://localhost/vifx/wp-content/uploads/2024/07/bca-white.png" alt="bca" /> -->
          <img src="http://wpdev.vifx.co.id/wp-content/uploads/2024/07/bca-white.png" alt="bca" />
        </span>

        <span class="footer-account--item">
          <!-- <img src="http://localhost/vifx/wp-content/uploads/2024/07/cimb-white.png" alt="cimb" /> -->
          <img src="http://wpdev.vifx.co.id/wp-content/uploads/2024/07/cimb-white.png" alt="cimb" />
        </span>

        <span class="footer-account--item">
          <!-- <img src="http://localhost/vifx/wp-content/uploads/2024/07/mandiri-white.png" alt="mandiri" /> -->
          <img src="http://wpdev.vifx.co.id/wp-content/uploads/2024/07/mandiri-white.png" alt="mandiri" />
        </span>

        <span class="footer-account--item">
          <!-- <img src="http://localhost/vifx/wp-content/uploads/2024/07/sinarmas-white.png" alt="sinarmas" /> -->
          <img src="http://wpdev.vifx.co.id/wp-content/uploads/2024/07/sinarmas-white.png" alt="sinarmas" />
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
      <p>Peringatan Resiko : Forex dan CFD memiliki tingkat risiko dan peluang yang tinggi terhadap modal Anda. Hanya trading dengan uang yang Anda siap untuk kehilangannya. Produk ini mungkin tidak cocok untuk semua investor, untuk itu jika hendak berdagang dalam perdagangan berjangka, pahami kegiatan dan risikonya.</p>
    </div>
  </div>
</footer>