<?php get_header(); ?>

<?php get_template_part('template-parts/components/navbar');

if ( is_front_page() ) {
  get_template_part( 'template-parts/pages/homepage', 'home');
} elseif ( is_page( 'about-us' ) ) {
  get_template_part( 'template-parts/pages/about-us', 'about-us' );
} elseif ( is_page( 'platform' ) ) {
  get_template_part( 'template-parts/pages/platform', 'platform' );
} elseif ( is_page( 'contacts' ) ) {
  get_template_part( 'template-parts/pages/contact-us', 'contact-us' );
} elseif ( is_page( 'produk' ) ) {
  get_template_part( 'template-parts/pages/produk-fitur/produk', 'produk' );
} elseif ( is_page( 'fitur' ) ) {
  get_template_part( 'template-parts/pages/produk-fitur/fitur', 'fitur' );
} elseif ( is_page( 'analisa' ) ) {
  get_template_part( 'template-parts/pages/analisa/fundamental', 'fundamental' );
} elseif ( is_page( 'analisa-fundamental' ) ) {
  get_template_part( 'template-parts/pages/analisa/fundamental', 'fundamental' );
} elseif ( is_page( 'analisa-teknikal' ) ) {
  get_template_part( 'template-parts/pages/analisa/teknikal', 'teknikal' );
} elseif ( is_page( 'panduan-trading' ) ) {
  get_template_part( 'template-parts/pages/edukasi/panduan', 'panduan' );
} elseif ( is_page( 'faq' ) ) {
  get_template_part( 'template-parts/pages/edukasi/faq', 'faq' );
} else {
  get_template_part( 'template-parts/components/not-found', 'not-found' );
  // echo 'halaman lain sedang ditampilkan';
}

get_template_part('template-parts/components/footer'); ?>

<?php get_footer(); ?>