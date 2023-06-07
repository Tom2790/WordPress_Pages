<?php
/*
Plugin Name:  My First Plugin
Plugin URI:   http://localhost:8000/
Description:  A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area.
Version:      1.0
Author:       Tomasz Remlein
Author URI:   http://localhost:8000/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpb-tutorial
Domain Path:  /languages
*/

define( 'MFP_PLUGIN', __FILE__ );

define( 'MFP_PLUGIN_DIR', untrailingslashit( dirname( MFP_PLUGIN ) ) );


add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'salcode_add_plugin_page_settings_link');
function salcode_add_plugin_page_settings_link( $links ) {
    $links[] = '<a href="' .
        admin_url( 'admin.php?page=wporg' ) .
        '">' . __('Settings') . '</a>';
    return $links;
}

require_once MFP_PLUGIN_DIR . '/load.php';