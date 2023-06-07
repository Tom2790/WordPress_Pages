<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );
$header_nav_menu = wp_nav_menu( [
	'theme_location' => 'primary',
	'fallback_cb' => false,
	'echo' => false,
] );
$extra_nav_menu = wp_nav_menu( [
	'theme_location' => 'extra',
	'fallback_cb' => false,
	'echo' => false,
] );
?>
<header id="site-header" class="container-fluid site-header" role="banner">
    <div class="container align-items-center container d-flex justify-content-between">
        <div class="d-block d-lg-none">
            <div class="navigation-control controll-open" data-toggle="#main-navigation">
                <span></span>
            </div>
        </div>

        <div class="site-branding">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } elseif ( $site_name ) {
                ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <?php echo esc_html( $site_name ); ?>
                    </a>
                </h1>
                <p class="site-description">
                    <?php
                    if ( $tagline ) {
                        echo esc_html( $tagline );
                    }
                    ?>
                </p>
            <?php } ?>
        </div>

        <?php if ( $header_nav_menu ) : ?>
            <nav class="site-navigation" role="navigation" id="main-navigation">
                <div class="d-flex d-lg-none justify-content-between">
                    <div class="navigation-control controll-close" data-toggle="#main-navigation"></div>
                    <div class="site-branding">
                        <?php
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } elseif ( $site_name ) {
                            ?>
                            <h1 class="site-title">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    <?php echo esc_html( $site_name ); ?>
                                </a>
                            </h1>
                            <p class="site-description">
                                <?php
                                if ( $tagline ) {
                                    echo esc_html( $tagline );
                                }
                                ?>
                            </p>
                        <?php } ?>
                    </div>
                </div>
                <?php echo $header_nav_menu; ?>

                <div class="extra-menu d-flex d-lg-none">
                    <?php echo $extra_nav_menu; ?>
                </div>
            </nav>

            <div class="extra-menu d-none d-lg-flex">
                <?php echo $extra_nav_menu; ?>
            </div>
        <?php endif; ?>

        <div class="header-socials ml-auto ml-lg-0">

        </div>
    </div>
</header>
