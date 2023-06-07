<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$footer_nav_menu = wp_nav_menu( [
    'theme_location' => 'footer',
    'fallback_cb' => false,
    'echo' => false,
] );

?>
<footer id="site-footer" class="site-footer bg-black pt-5 pb-5" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">

                <p><strong>FERRARI Italia</strong><br>
                </p>
                <p> Via Alfredo Dino Ferrari 43</p>
                <p> 41-053 Maranello MO<br>
                    <p>Włochy</p><br>
                </p>

            </div>
            <div class="col-12 col-md-5">
                <p><strong><a><?= get_theme_mod( 'footer_name' ) ?></a><br></strong></p>

                <a><?= get_theme_mod( 'footer_street' ) ?></a><br>
                  <p><a><?= get_theme_mod( 'footer_city' ) ?></a><br><p/>
                <p>email: <a href="mailto:<?=get_theme_mod( 'footer_email' )?>"><?= get_theme_mod( 'footer_email' ) ?></a><br><p/>
                    tel. <a href="tel:<?=get_theme_mod( 'footer_phone' )?>"><?= get_theme_mod( 'footer_phone' ) ?></a></p>

            </div>
            <div class="col-12 col-md-2">
                <?php if ( $footer_nav_menu ) : ?>
                    <div class="footer-nav">
                        <?php echo $footer_nav_menu; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
	<?php // footer. ?>
</footer>
