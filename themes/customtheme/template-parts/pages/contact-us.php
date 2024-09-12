<?php
  $icon_tel = get_dynamic_image_url('/wp-content/uploads/2024/09/telephone.png');
  $icon_fax = get_dynamic_image_url('/wp-content/uploads/2024/09/fax.png');
  $icon_wa = get_dynamic_image_url('/wp-content/uploads/2024/09/whatsapp.png');
  $icon_email = get_dynamic_image_url('/wp-content/uploads/2024/09/email.png');
?>

<div id="contact-us">
  <div class='contact-hero'>
    <h1 class='content-title text-white text-center'>VIF Siap Menjawab Kebutuhan Anda Saat Trading</h1>
    <p class='content-subtitle text-white text-center'>Kami siap menjawab pertanyaan Anda seputar akun, trading, atau masalah teknis 24/7.<br>Anda bisa menghubungi kami melalui pesan, telepon, atau email.</p>
  </div>

  <div class="container contact--container">
    <hr class="hero-divider" />

    <div class="location-text--container">
      <h1 class="content-title">Our Location</h1>
    </div>

    <?php
      $branches = [
          [
              'id' => 'branch-1',
              'name' => 'Cabang Surabaya',
              'address' => 'Jl. Surabaya No.1, Surabaya',
              'position' => ['left' => '36%', 'bottom' => '18%'],
              'branch-list' => [
                  ['name' => 'Surabaya 1', 'address' => 'address surabaya 1'],
                  ['name' => 'Surabaya 2', 'address' => 'address surabaya 2'],
                  ['name' => 'Surabaya 3', 'address' => 'address surabaya 3'],
              ],
              'is-default' => true,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7915.631358095131!2d112.739277!3d-7.261807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xace7af44578083fd%3A0x5858b65f0384c505!2sVictory%20International%20Futures%20Pusat!5e0!3m2!1sid!2sus!4v1721741322396!5m2!1sid!2sus'
          ],
          [
              'id' => 'branch-2',
              'name' => 'Cabang Yogyakarta',
              'address' => 'Jl. Yogyakarta No.2, Yogyakarta',
              'position' => ['left' => '32%', 'bottom' => '15%'],
              'branch-list' => [
                  ['name' => 'Yogyakarta 1', 'address' => 'address yogyakarta 1'],
                  ['name' => 'Yogyakarta 2', 'address' => 'address yogyakarta 2'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7906.567778036752!2d110.399188!3d-7.7596870000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5970af037df1%3A0x5d7d63b049370723!2sVictory%20International%20Futures%20Yogyakarta!5e0!3m2!1sid!2sid!4v1723111438462!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-3',
              'name' => 'Cabang Jakarta',
              'address' => 'Jl. Jakarta No.3, Jakarta',
              'position' => ['left' => '24.5%', 'bottom' => '24%'],
              'branch-list' => [
                  ['name' => 'Jakarta 1', 'address' => 'address jakarta 1'],
                  ['name' => 'Jakarta 2', 'address' => 'address jakarta 2'],
                  ['name' => 'Jakarta 3', 'address' => 'address jakarta 3'],
                  ['name' => 'Jakarta 4', 'address' => 'address jakarta 4'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.306803108056!2d106.792466!3d-6.177131000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f772bfc3ce09%3A0xa5f48f14212affed!2sPT.%20Victory%20International%20Futures!5e0!3m2!1sid!2sid!4v1723111789186!5m2!1sid!2sid'

          ],
          [
              'id' => 'branch-4',
              'name' => 'Cabang Bandung',
              'address' => 'Jl. Bandung No.4, Bandung',
              'position' => ['left' => '26%', 'bottom' => '20%'],
              'branch-list' => [
                  ['name' => 'Bandung 1', 'address' => 'address bandung 1'],
                  ['name' => 'Bandung 2', 'address' => 'address bandung 2'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.640014436764!2d107.601395!3d-6.912113!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e704f60c3935%3A0x7c6671ce08357b42!2sPT.%20VICTORY%20INTERNATIONAL%20FUTURES!5e0!3m2!1sid!2sid!4v1723111104284!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-5',
              'name' => 'Cabang Jember',
              'address' => 'Jl. Jember No.5, Jember',
              'position' => ['left' => '38.5%', 'bottom' => '14%'],
              'branch-list' => [
                  ['name' => 'Jember 1', 'address' => 'address jember 1'],
                  ['name' => 'Jember 2', 'address' => 'address jember 2'],
                  ['name' => 'Jember 3', 'address' => 'address jember 3'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7898.533297675174!2d113.685099!3d-8.17587!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6955e684b83af%3A0x44096f0338e2296b!2sPT%20Victory%20International%20Cabang%20Jember!5e0!3m2!1sid!2sid!4v1723111407754!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-6',
              'name' => 'Cabang Makasar',
              'address' => 'Jl. Makasar No.6, Makasar',
              'position' => ['left' => '51.8%', 'bottom' => '31%'],
              'branch-list' => [
                  ['name' => 'Makasar 1', 'address' => 'address makasar 1'],
                  ['name' => 'Makasar 2', 'address' => 'address makasar 2'],
                  ['name' => 'Makasar 3', 'address' => 'address makasar 3'],
                  ['name' => 'Makasar 4', 'address' => 'address makasar 4'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7947.6459023541065!2d119.40474400000001!3d-5.132198!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf03789f9cc0cf%3A0x78d2c1874f343315!2sPT.VICTORY%20INTERNATIONAL%20FUTURES!5e0!3m2!1sid!2sid!4v1723111478158!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-7',
              'name' => 'Cabang Malang',
              'address' => 'Jl. Malang No.7, Malang',
              'position' => ['left' => '36%', 'bottom' => '15%'],
              'branch-list' => [
                  ['name' => 'Malang 1', 'address' => 'address malang 1'],
                  ['name' => 'Malang 2', 'address' => 'address malang 2'],
                  ['name' => 'Malang 3', 'address' => 'address malang 3'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7902.777300144463!2d112.637487!3d-7.958727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629cc814d0737%3A0xf6e6654c0163eb13!2sPT%20Victory%20International%20Futures!5e0!3m2!1sid!2sid!4v1723111506788!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-8',
              'name' => 'Cabang Manado',
              'address' => 'Jl. Manado No.8, Manado',
              'position' => ['left' => '63%', 'top' => '28%'],
              'branch-list' => [
                  ['name' => 'Manado 1', 'address' => 'address manado 1'],
                  ['name' => 'Manado 2', 'address' => 'address manado 2'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7976.987985527438!2d124.833861!3d1.476287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287751bf1958fd7%3A0x7bb5e6e1fddc519d!2sVictory%20International%20Futures%20Megamas!5e0!3m2!1sid!2sid!4v1723111547526!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-9',
              'name' => 'Cabang Mataram',
              'address' => 'Jl. Mataram No.9, Mataram',
              'position' => ['left' => '44.5%', 'bottom' => '11%'],
              'branch-list' => [
                  ['name' => 'Mataram 1', 'address' => 'address mataram 1'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126240.3069672959!2d116.10368100000001!3d-8.595075000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf65a6450b21%3A0x859b7b29cc19f044!2sPT.%20Victory%20International%20Futures!5e0!3m2!1sid!2sid!4v1723111581711!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-10',
              'name' => 'Cabang Surakarta',
              'address' => 'Jl. Surakarta No.10, Surakarta',
              'position' => ['left' => '32.8%', 'bottom' => '17.5%'],
              'branch-list' => [
                  ['name' => 'Surakarta 1', 'address' => 'address surakarta 1'],
                  ['name' => 'Surakarta 2', 'address' => 'address surakarta 2'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63276.23829134938!2d110.814487!3d-7.6005460000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a167d43327caf%3A0x2d9992409578f05c!2sPT%20Victory%20International%20Futures%20Solo!5e0!3m2!1sid!2sid!4v1723111612146!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-11',
              'name' => 'Cabang Pekan Baru',
              'address' => 'Jl. Pekan Baru No.11, Pekan Baru',
              'position' => ['left' => '11.5%', 'top' => '28%'],
              'branch-list' => [
                  ['name' => 'Pekan Baru 1', 'address' => 'address pekan baru 1'],
                  ['name' => 'Pekan Baru 2', 'address' => 'address pekan baru 2'],
                  ['name' => 'Pekan Baru 3', 'address' => 'address pekan baru 3'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127668.8543083586!2d101.426632!3d0.523637!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5abfac7fe840b%3A0xf8a7b9893870f563!2sVICTORY%20INTERNATIONAL!5e0!3m2!1sid!2sid!4v1723111639415!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-12',
              'name' => 'Cabang Palembang',
              'address' => 'Jl. Palembang No.12, Palembang',
              'position' => ['left' => '19.5%', 'bottom' => '43%'],
              'branch-list' => [
                  ['name' => 'Palembang 1', 'address' => 'address palembang 1'],
                  ['name' => 'Palembang 2', 'address' => 'address palembang 2'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31875.83500085393!2d104.735538!3d-2.964403!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b767572e57d09%3A0xff54af17b1fe4df!2sVictory%20International%20Futures!5e0!3m2!1sid!2sid!4v1723111664127!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-13',
              'name' => 'Cabang Pontianak',
              'address' => 'Jl. Pontianak No.13, Pontianak',
              'position' => ['left' => '29.8%', 'top' => '33%'],
              'branch-list' => [
                  ['name' => 'Pontianak 1', 'address' => 'address pontianak 1'],
                  ['name' => 'Pontianak 2', 'address' => 'address pontianak 2'],
                  ['name' => 'Pontianak 3', 'address' => 'address pontianak 3'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.633497340041!2d109.34529500000001!3d-0.050856!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59bda5dddea3%3A0xe859eb2491d39310!2sVictory%20International%20Futures.%20PT!5e0!3m2!1sid!2sid!4v1723111686686!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-14',
              'name' => 'Cabang Semarang',
              'address' => 'Jl. Semarang No.14, Semarang',
              'position' => ['left' => '31.5%', 'bottom' => '20%'],
              'branch-list' => [
                  ['name' => 'Semarang 1', 'address' => 'address semarang 1'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31680.84117747898!2d110.40655900000002!3d-6.996897!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8154a40f23%3A0x2e07edc267c4ce73!2sPT.%20Victory%20International%20Futures!5e0!3m2!1sid!2sid!4v1723111724605!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-15',
              'name' => 'Cabang Cirebon',
              'address' => 'Jl. Cirebon No.15, Cirebon',
              'position' => ['left' => '28%', 'bottom' => '21.5%'],
              'branch-list' => [
                  ['name' => 'Cirebon 1', 'address' => 'address cirebon 1'],
                  ['name' => 'Cirebon 2', 'address' => 'address cirebon 2'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7924.839839933718!2d108.549716!3d-6.718503!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee3306415b593%3A0x4f64026b9fc4e339!2sPT.%20Victory%20International%20Futures%20Cirebon!5e0!3m2!1sid!2sid!4v1723111757767!5m2!1sid!2sid'
          ],
          [
              'id' => 'branch-16',
              'name' => 'Cabang Denpasar',
              'address' => 'Jl. Denpasar No.16, Denpasar',
              'position' => ['left' => '42.5%', 'bottom' => '11%'],
              'branch-list' => [
                  ['name' => 'Denpasar 1', 'address' => 'address denpasar 1'],
                  ['name' => 'Denpasar 2', 'address' => 'address denpasar 2'],
                  ['name' => 'Denpasar 3', 'address' => 'address denpasar 3'],
              ],
              'is-default' => false,
              'map-url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7888.405302152103!2d115.23805399999999!3d-8.672269!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241c4b2efcd35%3A0xaf2eb51516a78f08!2sPT.%20Victory%20International%20Future%20Cab.Denpasar!5e0!3m2!1sid!2sid!4v1723110794414!5m2!1sid!2sid'
          ],
      ];
    ?>

    <?php
      $image_url = get_dynamic_image_url('/wp-content/uploads/2024/07/indo-blue.png');
    ?>

    <?php echo do_shortcode('[display_branches]'); ?>

    <div class="contact-content--container">
      <div class="half-section">
        <div class="contact-content">
          <h1>Hotline Pengaduan Nasabah</h1>
          <a href="tel:0800 - 156 - 5758">0800 – 156 – 5758</a>
          <a href="mailto:viflegal@vifx.co.id">viflegal@vifx.co.id</a>
        </div>

        <div class="contact-content contact-address">
          <h1>Kantor Pusat</h1>
          <span class="bold">Pakuwon Center</span>
          <span>Superblock Tunjungan City Office Building <br> Lt. 15 Unit 5-7 Jl. Embong Malang No. 1, 3, 5, Surabaya, 60261</span>
        </div>
  
        <div class="contact-list--container">
          <div class="contact-content item-list">
            <div class="contact-title">
                <span class="icon">
                    <img src="<?php echo $icon_tel; ?>" alt="telephone">
                </span>
                <h3>Telepon</h3>
            </div>
            <a href="tel:0800 - 156 - 5758">0800 – 156 – 5758</a>
            <a href="tel:+62 31 9924 8699">031-9924-8699</a>
          </div>

          <div class="contact-content item-list">
            <div class="contact-title">
                <span class="icon">
                    <img src="<?php echo $icon_fax; ?>" alt="fax">
                </span>
                <h3>FAX</h3>
            </div>
            <a href="tel:+62 31 9925 1506">031-9925-1506</a>
          </div>

          <div class="contact-content item-list">
            <div class="contact-title">
                <span class="icon">
                    <img src="<?php echo $icon_wa; ?>" alt="whatsapp">
                </span>
                <h3>WhatsApp</h3>
            </div>
            <a href="https://wa.me/6282211565758">0822-1156-5758 (Settlement)</a>
          </div>

          <div class="contact-content item-list">
            <div class="contact-title">
                <span class="icon">
                    <img src="<?php echo $icon_email; ?>" alt="email">
                </span>
                <h3>Email</h3>
            </div>
            <a href="mailto:settlement@vifx.co">settlement@vifx.co</a>
          </div>
        </div>
      </div>

      <div class="half-section hidden">
        <?php get_template_part('template-parts/components/form'); ?>
      </div>
    </div>
  </div>
</div>