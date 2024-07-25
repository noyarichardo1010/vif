<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
            endwhile;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </main>
</div>

<?php get_footer(); ?>
