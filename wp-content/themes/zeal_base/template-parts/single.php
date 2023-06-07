<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php
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
