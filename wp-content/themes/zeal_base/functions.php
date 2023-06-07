<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */

add_theme_support(
    'custom-logo',
    array(
        'flex-width'  => false,
        'flex-height' => false,
    )
);

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

register_nav_menus(
    array(
        'primary' => esc_html__( 'Primary menu', 'zeal' ),
        'footer'  => __( 'Secondary menu', 'zeal' ),
        'extra' => __( 'Extra menu', 'zeal' ),
    )
);


/*Customizer Code HERE*/
add_action('customize_register', 'theme_footer_customizer');
function theme_footer_customizer($wp_customize)
{
    //adding section in wordpress customizer
    $wp_customize->add_section('footer_settings_section', array(
        'title' => 'Stopka'
    ));

    //adding setting for footer text area
    $wp_customize->add_setting('footer_name', array(
        'default' => 'FERRARI ',
    ));
    $wp_customize->add_control('footer_name', array(
        'label' => 'Nazwa Salonu',
        'section' => 'footer_settings_section',
        'type' => 'text',
    ));

    //adding setting for footer text area
    $wp_customize->add_setting('footer_street', array(
        'default' => '',
    ));
    $wp_customize->add_control('footer_street', array(
        'label' => 'Ulica',
        'section' => 'footer_settings_section',
        'type' => 'text',
    ));

//adding setting for footer text area
    //adding setting for footer text area
    $wp_customize->add_setting('footer_city', array(
        'default' => '',
    ));
    $wp_customize->add_control('footer_city', array(
        'label' => 'Kod pocztowy i Miasto',
        'section' => 'footer_settings_section',
        'type' => 'text',
    ));

    //adding setting for footer text area
    $wp_customize->add_setting('footer_email', array(
        'default' => 'konferencje@pixelmultimedia.pl',
    ));
    $wp_customize->add_control('footer_email', array(
        'label' => 'Email',
        'section' => 'footer_settings_section',
        'type' => 'text',
    ));

//adding setting for footer text area
    $wp_customize->add_setting('footer_phone', array(
        'default' => '______',
    ));
    $wp_customize->add_control('footer_phone', array(
        'label' => 'Telefon',
        'section' => 'footer_settings_section',
        'type' => 'text',
    ));


}