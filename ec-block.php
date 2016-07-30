<?php
/**
 * Plugin Name:   Expand Collapse Blocks
 * Plugin URI:    http://devchakra.com/
 * Description:   The easiest way for converting any block to Expand & Collapase Blocks
 * Author:        Sirus Das
 * Author URI:    http://devchakra.com
 * Version:       0.0.1
 * Text Domain:   ec-block
 *
 * GitHub Plugin URI: https://gist.github.com/sirusdas/f299cdec64343e6822ad54627265ac94
 *
 * @package     ec-block
 * @category    Core
 * @author      Sirus Das
 * @copyright   Copyright (c) 2016, Sirus Das
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ecblock_scripts_basic()
{
    // Register the script like this for a plugin:
    wp_register_script( 'ecblock-script', plugins_url( '/js/ec.js', __FILE__ ) );
    // or
    // Register the script like this for a theme:
    wp_register_script( 'ecblock-script', get_template_directory_uri() . '/js/ec.js' );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'ecblock-script' );
}
add_action( 'wp_enqueue_scripts', 'ecblock_scripts_basic' );

function ecblock_style_basic()
{
    // Register the script like this for a plugin:
    wp_register_script( 'ecblock-style', plugins_url( '/css/ec.css', __FILE__ ) );
    // or
    // Register the script like this for a theme:
    wp_register_script( 'ecblock-style', get_template_directory_uri() . '/css/ec.css' );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'ecblock-style' );
}
add_action( 'wp_enqueue_scripts', 'ecblock_style_basic' );