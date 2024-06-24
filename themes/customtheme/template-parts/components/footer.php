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
          <img src="https://i0.wp.com/vectorez.biz.id/wp-content/uploads/2023/10/Logo-Bank-Central-Asia-BCA.png?resize=2657%2C834&ssl=1" alt="bca">
        </span>

        <span class="footer-account--item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/CIMB_Niaga_logo.svg/1200px-CIMB_Niaga_logo.svg.png" alt="cimb">
        </span>

        <span class="footer-account--item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Bank_Mandiri_logo_2016.svg/2560px-Bank_Mandiri_logo_2016.svg.png" alt="mandiri">
        </span>

        <span class="footer-account--item">
          <img src="https://1.bp.blogspot.com/-QyZzjGcf8Yo/TcJNc4MVUeI/AAAAAAAADjI/3nqoarlG9wU/s1600/Bank_Sinarmas.png" alt="sinarmas">
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