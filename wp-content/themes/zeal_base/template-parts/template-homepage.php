<?php
/**
 * Template Name: Homepage
 */

get_header();

while ( have_posts() ) :
    the_post();
    ?>

    <main <?php post_class( 'site-main' ); ?> role="main">
        <div class="page-content container-fluid p-0">

            <div class="container">
                <?php the_content() ?>
            </div>

        </div>
    </main>

<?php
endwhile;

get_footer();