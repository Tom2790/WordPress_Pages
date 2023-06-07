<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:normal,bold,light,semibold">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:normal,bold,light,semibold">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/fa.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/theme.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
get_template_part( 'template-parts/header' );
