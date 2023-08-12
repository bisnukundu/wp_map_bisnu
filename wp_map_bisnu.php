<?php
/*
 * Plugin Name: WP_MAP_Bisnu
 * Version: 1.0.0
 * Author: bisnukundu
 * Description: Free WordPress Map Plugin by Bisnu Kundu
 * Author URI: https://github.com/bisnukundu
 * */

function all_css_js_add()
{
    wp_enqueue_script('leaflet-js', plugin_dir_url(__FILE__) . 'inc/leaflet/leaflet.js', [], '1.0.0');
    wp_enqueue_style('leaflet.css', plugin_dir_url(__FILE__) . 'inc/leaflet/leaflet.css', [], '1.0.0');

}

;

add_action('wp_enqueue_scripts', 'all_css_js_add');

require_once plugin_dir_path(__FILE__) . '/inc/codestar-framework-master/codestar-framework.php';

require_once plugin_dir_path(__FILE__) . '/codestar_wordpess_bisnu.php';
require plugin_dir_path(__FILE__) . '/shortcode.php';