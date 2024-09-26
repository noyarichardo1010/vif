<?php
  $accounts = [
    [
      'id' => 1,
      'logo' => 'https://i0.wp.com/vectorez.biz.id/wp-content/uploads/2023/10/Logo-Bank-Central-Asia-BCA.png?resize=2657%2C834&ssl=1',
      'name' => 'Bank Central Asia',
      'description' => 'Cabang: Veteran, Surabaya',
      'account_numbers' => [
        [
          'id' => 1,
          'currency' => 'idr',
          'number' => '0101.61.6699'
        ],
        [
          'id' => 2,
          'currency' => 'usd',
          'number' => '0101.61.2588'
        ]
      ]
    ],
    [
      'id' => 2,
      'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/CIMB_Niaga_logo.svg/1200px-CIMB_Niaga_logo.svg.png',
      'name' => 'Bank CIMB Niaga',
      'description' => 'Cabang: Sudirman, Surabaya',
      'account_numbers' => [
        [
          'id' => 1,
          'currency' => 'idr',
          'number' => '0101.61.6699'
        ]
      ]
    ],
    [
      'id' => 3,
      'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Bank_Mandiri_logo_2016.svg/2560px-Bank_Mandiri_logo_2016.svg.png',
      'name' => 'Bank Mandiri',
      'description' => 'Cabang: Basuki Rahmat, Surabaya',
      'account_numbers' => [
        [
          'id' => 1,
          'currency' => 'idr',
          'number' => '142.00.0178787.7'
        ]
      ]
    ],
    [
      'id' => 4,
      'logo' => 'https://1.bp.blogspot.com/-QyZzjGcf8Yo/TcJNc4MVUeI/AAAAAAAADjI/3nqoarlG9wU/s1600/Bank_Sinarmas.png',
      'name' => 'Bank Sinar Mas',
      'description' => 'Cabang: Diponegoro, Surabaya',
      'account_numbers' => [
        [
          'id' => 1,
          'currency' => 'idr',
          'number' => '004.756.9079'
        ]
      ]
    ]
  ];
  // $about_us_banner = get_dynamic_image_url('/wp-content/uploads/2024/08/WIJE9737ed-scaled.jpg');
  $about_us_banner = get_dynamic_image_url('/wp-content/uploads/2024/09/WIJE9261ed-scaled.jpg');

  $vision_icon_1 = get_dynamic_image_url('/wp-content/uploads/2024/08/vision-1.png');
  $vision_icon_2 = get_dynamic_image_url('/wp-content/uploads/2024/08/mission.png');
  $vision_icon_3 = get_dynamic_image_url('/wp-content/uploads/2024/08/commit.png');

  $legality_img_1 = get_dynamic_image_url('/wp-content/uploads/2024/05/kementrian-perdagangan.png');
  $legality_img_2 = get_dynamic_image_url('/wp-content/uploads/2024/05/ICDX.png');
  $legality_img_3 = get_dynamic_image_url('/wp-content/uploads/2024/05/ICH.png');
?>

<div id='about-us'>
  <div class='about-us-hero' style="background-image: url('<?php echo $about_us_banner; ?>')">
    <!-- <h1 class='content-title text-white mt-3'>Tentang Kami</h1>
    <p class='content-subtitle text-white text-center'>VIFX memiliki berbagai fitur dan layanan unggul untuk Anda. <br> Kami berkomitmen memberikan pengalaman perdagangan yang luar biasa dengan mengutamakan keamanan serta kenyamanan nasabah. Inilah yang membuat kami berbeda.</p> -->
  </div>

  <section class='bg-blue'>
      <div style="padding: 2.5rem 0;">
        <h1 class='content-title text-center'>Tentang Kami</h1>
        <div style="display: flex; justify-content: center; width: 100%;">
          <p class='content-subtitle text-center'>VIFX memiliki berbagai fitur dan layanan unggul untuk Anda. Kami berkomitmen memberikan pengalaman perdagangan <br> yang luar biasa dengan mengutamakan keamanan serta kenyamanan nasabah. Inilah yang membuat kami berbeda.</p>
        </div>
      </div>
  </section>

  <div class="management">
    <h1 class='content-title text-center mb-2 mt -xl'>Management</h1>
    <?php echo do_shortcode('[metaslider id="450"]') ?>
  </div>

  <div class='container about-us--container mt -xl'>  
    <div class='vision-mission--container'>
      <h3 class='content-title center'>Keunggulan Kami</h3>

      <div class='vision-mission-card--container'>
        <div class='about-us-card horizontal p-md gap-md'>
          <span>&nbsp;</span>
          <div>
            <div class="vision-card-icon">
              <img src="<?php echo $vision_icon_1; ?>" alt="vision icon" />
              <h4 class='about-us-card--title mb-1'>VISI</h4>
            </div>
            <p class="vision-card--paragraph">Menjadi broker trading terpercaya dengan memberikan layanan terbaik yang diperlukan untuk membantu Anda mencapai tujuan saat trading.</p>
          </div>
        </div>

        <div class='about-us-card horizontal p-md gap-md'>
          <span>&nbsp;</span>
          <div>
            <div class="vision-card-icon">
              <img src="<?php echo $vision_icon_2; ?>" alt="mission icon" />
              <h4 class='about-us-card--title mb-1'>MISI</h4>
            </div>
            <p class="vision-card--paragraph">Berkomitmen menyediakan lingkungan trading aman dan nyaman yang memungkinkan trader dari setiap kalangan mencapai potensi tradingnya secara maksimal.</p>
          </div>
        </div>

        <div class='about-us-card horizontal p-md gap-md'>
          <span>&nbsp;</span>
          <div>
            <div class="vision-card-icon">
              <img src="<?php echo $vision_icon_3; ?>" alt="commitment icon" />
              <h4 class='about-us-card--title mb-1'>KOMITMEN</h4>
            </div>
            <p class="vision-card--paragraph">Berpegang teguh pada prinsip transparansi dalam segala aspek. Memastikan semua transaksi perdagangan tanpa konflik kepentingan dan penuh kejujuran.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="branch--container">
      <h1 class="text-center">Kepala Cabang VIFX</h1>

      <div class="branch-card--container scroll-custom">
        <?php echo do_shortcode('[display_custom_posts post_type="head_branch" display_fields="established_year, photo_head_branch"]'); ?>
      </div>
    </div>

    <div class='trusted-account--container mt -sm'>
      <h3 class='content-title center'>Keamanan Rekening Terpisah</h3>

      <div class='trusted-account-card--container'>
        <!-- <div class='about-us-card vertical p-xl item-center gap-sm'>
          <div class='about-us-card-img--container'>
            <img src="https://i0.wp.com/vectorez.biz.id/wp-content/uploads/2023/10/Logo-Bank-Central-Asia-BCA.png?resize=2657%2C834&ssl=1" alt="bank account 1">
          </div>
          <h4 class='about-us-card--title center'>BANK CENTRAL ASIA</h4>
          <span class='text-center'>Cabang: Veteran, Surabaya</span>
          <span>Nomor Rekening:</span>
          <span>IDR: 0101.61.6699 <br> USD: 0101.61.2588</span>
        </div>

        <div class='about-us-card vertical p-xl item-center gap-sm'>
          <div class='about-us-card-img--container'>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/CIMB_Niaga_logo.svg/1200px-CIMB_Niaga_logo.svg.png" alt="bank account 2">
          </div>
          <h4 class='about-us-card--title center'>BANK CIMB NIAGA</h4>
          <span class='text-center'>Cabang: Sudirman, Surabaya</span>
          <span>Nomor Rekening:</span>
          <span>800.03.7765.800</span>
        </div>

        <div class='about-us-card vertical p-xl item-center gap-sm'>
          <div class='about-us-card-img--container'>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Bank_Mandiri_logo_2016.svg/2560px-Bank_Mandiri_logo_2016.svg.png" alt="bank account 3">
          </div>
          <h4 class='about-us-card--title center'>BANK MANDIRI</h4>
          <span class='text-center'>Cabang: Basuki Rahmat, Surabaya</span>
          <span>Nomor Rekening:</span>
          <span>142.00.0178787.7</span>
        </div>

        <div class='about-us-card vertical p-xl item-center gap-sm'>
          <div class='about-us-card-img--container'>
            <img src="https://1.bp.blogspot.com/-QyZzjGcf8Yo/TcJNc4MVUeI/AAAAAAAADjI/3nqoarlG9wU/s1600/Bank_Sinarmas.png" alt="bank account 4">
          </div>
          <h4 class='about-us-card--title center'>BANK SINAR MAS</h4>
          <span class='text-center'>Cabang: Diponegoro, Surabaya</span>
          <span>Nomor Rekening:</span>
          <span>004.756.9079</span>
        </div> -->

        <?php foreach ($accounts as $acc): ?>
          <button
            type="button"
            class="open-account-modal-branch popmake-188"
            data-name="<?php echo htmlspecialchars($acc['name'], ENT_QUOTES, 'UTF-8'); ?>"
            data-description="<?php echo htmlspecialchars($acc['description'], ENT_QUOTES, 'UTF-8'); ?>"
            data-account-number-list="<?php echo htmlspecialchars(json_encode($acc['account_numbers']), ENT_QUOTES, 'UTF-8'); ?>"
          >
            <img src="<?php echo htmlspecialchars($acc['logo'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($acc['name'] . ' logos', ENT_QUOTES, 'UTF-8'); ?>">

            <span>Detail</span>
          </button>
        <?php endforeach ?>
      </div>
    </div>

    <div class='our-legality--container mt -xl'>
      <h3 class='content-title center'>Legalitas Kami</h3>

      <div class='our-legality-content--container'>
        <div class='about-us-card vertical p-xl gap-md'>
          <div class='about-us-card-img--container large'>
            <img src="<?php echo $legality_img_1; ?>"
            alt="legality img 1">
          </div>
          <div class='about-us-card-text--container'>
            <h4 class='about-us-card--title'>BAPPEBTI 2008</h4>
            <p class='about-us-card--subtitle'>Teregulasi BAPPEBTI sejak tahun 2008 lisensi No 18/BAPPEBTI/PN/42008</p>
          </div>
        </div>

        <div class='about-us-card vertical p-xl gap-md'>
          <div class='about-us-card-img--container large'>
            <img src="<?php echo $legality_img_2; ?>"
            alt="legality img 2">
          </div>
          <div class='about-us-card-text--container'>
            <h4 class='about-us-card--title'>ICDX 2010</h4>
            <span class='about-us-card--subtitle'>Anggota resmi ICDX sejak tahun 2010 lisensi No 041/SPKB/ICDX/DIR/IX/2010</span>
          </div>
        </div>

        <div class='about-us-card vertical p-xl gap-md'>
          <div class='about-us-card-img--container large'>
            <img src="<?php echo $legality_img_3; ?>"
            alt="legality img 3">
          </div>
          <div class='about-us-card-text--container'>
            <h4 class='about-us-card--title'>ICH 2012</h4>
            <span class='about-us-card--subtitle'>Anggota resmi ICH sejak tahun 2012 lisensi No 044/SPKK/ISI-VIF/VI/2012</span>
          </div>
        </div>
      </div>
    </div>

    <div class='our-network--container'></div>

    <div class='our-timeline--container'></div>

    <div class='about-us-market--container'>
      <h1 class="title-content text-center text-light-blue mb-1">Update Market Terkini di Handphone Anda</h1>
      <p class="subtitle-content text-center">Dapatkan update signal trading, moment market dan berita ekonomi penting setiap hari ke email Anda. Gratis!</p>

      <a href="https://cabinet.vifx.co.id/cabinet/login" target="_blank" rel="noopener noreferrer"><button>Subscribe</button></a>
    </div>
  </div>
</div>