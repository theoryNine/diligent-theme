<?php
/*
Plugin Name: Responsive Gallery Grid Pro
Plugin URI: http://bdwm.be/rgg
Description: Converts the default wordpress gallery to a Google+ styled image gallery grid, where the images are scaled to fill the gallery container, while maintaining image aspect ratio's.
Author: Jules Colle, BDWM
Author URI: http://bdwm.be
Version: 2.1.5

Copyright 2013-2016 Jules Colle (email : jules@bdwm.be)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

// don't do anything if the RGG plugin is already loaded
// (RGG and RGG Pro should not be activated together, but if they are, make sure only the first one loaded is used.)

if (!function_exists('rgg_gallery_shortcode')) {

    define('RGG_PLUGIN', 'rgg');
    define('RGG_OPTIONS', 'rgg_options');

    define( 'RGG_VERSION', '2.1.5' );
    define( 'RGG_REQUIRED_WP_VERSION', '4.1' );
    define( 'RGG_PLUGIN_PATH', __FILE__ );
    define( 'RGG_PLUGIN_BASENAME', plugin_basename( RGG_PLUGIN_PATH ) );
    define( 'RGG_PLUGIN_NAME', trim( dirname( RGG_PLUGIN_BASENAME ), '/' ) );
    define( 'RGG_PLUGIN_DIR', untrailingslashit( dirname( RGG_PLUGIN_PATH ) ) );
    define( 'RGG_PLUGIN_DIR_URL', plugins_url('',RGG_PLUGIN_PATH));

	define('RGG_IS_PRO', file_exists(RGG_PLUGIN_DIR.'/pro/rgg_pro_options.php'));

	global $rgg_options, $all_settings;
	$all_settings = array();
	require_once RGG_PLUGIN_DIR.'/rgg-options.php';
	if (RGG_IS_PRO) {
		require_once RGG_PLUGIN_DIR.'/pro/update.php';
	}
    require_once RGG_PLUGIN_DIR.'/gallery-shortcode.php';


    // register scripts and styles

    function rgg_register_scripts() {

        global $all_settings;
        if (count($all_settings) == 0) return;

	    $all_settings['rgg_is_pro'] = RGG_IS_PRO;

        wp_enqueue_script('jquery');
        wp_enqueue_script('rgg-main', RGG_PLUGIN_DIR_URL.'/js/main.js', array('jquery'), RGG_VERSION );
        wp_localize_script( 'rgg-main', 'rgg_params', $all_settings );
    }

    function rgg_register_styles() {

        // enqueue css
        wp_register_style( 'rgg-style', RGG_PLUGIN_DIR_URL.'/css/style.css', false, RGG_VERSION );
        wp_enqueue_style( 'rgg-style' );

    }

    add_action('wp_footer', 'rgg_register_scripts');
    add_action('wp_head', 'rgg_register_styles');
}