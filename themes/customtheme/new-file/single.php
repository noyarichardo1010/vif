<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', 'single' );
            endwhile;
        endif;
        ?>
    </main>
</div>

<?php get_footer(); ?>
