<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_template_part( 'template-parts/footer' );
?>

<?php wp_footer(); ?>
<!--<script src="--><?//= get_template_directory_uri()?><!--/assets/js/jquery-3.3.1.slim.min.js"></script>-->
<script src="<?= get_template_directory_uri()?>/assets/js/bootstrap.min.js"></script>
<script src="<?= get_template_directory_uri()?>/assets/js/theme.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1500,
        once: true
    });
</script>
</body>
</html>
