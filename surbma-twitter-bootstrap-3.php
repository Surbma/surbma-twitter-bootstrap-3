<?php

/*
Plugin Name: Surbma - Twitter Bootstrap 3
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Twitter Bootstrap 3 styles

Version: 1.4.2

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-twitter-bootstrap-3
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) {
	die( 'Good try! :)' );
}

// Localization
function surbma_twitter_bootstrap_3_init() {
	load_plugin_textdomain( 'surbma-twitter-bootstrap-3', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'surbma_twitter_bootstrap_3_init' );

function surbma_twitter_bootstrap_3_scripts() {
?><script type="text/javascript">
	!function ($) {
		$(function() {
			$(".tip").tooltip()
			$(".pop").popover()
		})
	}(window.jQuery)
</script><?php
}
add_action( 'wp_footer', 'surbma_twitter_bootstrap_3_scripts' );

function surbma_twitter_bootstrap_3_enqueue_scripts() {
	wp_enqueue_script( 'bootstrap-scripts', plugins_url( '', __FILE__ ) . '/js/bootstrap.min.js', array( 'jquery' ), '3.1.1', true );
	wp_enqueue_style( 'bootstrap-styles', plugins_url( '', __FILE__ ) . '/css/bootstrap.css', false, '3.1.1' );
}
add_action( 'wp_enqueue_scripts', 'surbma_twitter_bootstrap_3_enqueue_scripts' );

global $allowedposttags;
$allowedposttags['a'] = array(
	'class' => array(),
	'id' => array(),
	'style' => array(),
	'title' => array(),
	'href' => array(),
	'rel' => array(),
	'rev' => array(),
	'name' => array(),
	'target' => array(),
	'data-animation' => array(),
	'data-html' => array(),
	'data-placement' => array(),
	'data-selector' => array(),
	'data-trigger' => array(),
	'data-title' => array(),
	'data-delay' => array(),
	'data-container' => array(),
	'data-toggle' => array(),
	'data-target' => array(),
	'data-content' => array(),
	'data-parent' => array(),
	'data-dismiss' => array()
);
$allowedposttags['button'] = array(
	'disabled' => array(),
	'name' => array(),
	'type' => array(),
	'value' => array(),
	'class' => array(),
	'id' => array(),
	'style' => array(),
	'data-animation' => array(),
	'data-html' => array(),
	'data-placement' => array(),
	'data-selector' => array(),
	'data-trigger' => array(),
	'data-title' => array(),
	'data-delay' => array(),
	'data-container' => array(),
	'data-toggle' => array(),
	'data-target' => array(),
	'data-content' => array(),
	'data-parent' => array(),
	'data-dismiss' => array()
);

