<?php

/*
Plugin Name: Surbma - Twitter Bootstrap 3
Plugin URI: http://surbma.com/
GitHub Plugin URI: Surbma/surbma-twitter-bootstrap-3
Description: Twitter Bootstrap 3
Version: 1.2.0
Author: Surbma
Author URI: http://surbma.com/
License: GPL2
*/

function surbma_twitter_bootstrap_scripts() {
?><script type="text/javascript">
	!function ($) {
		$(function() {
			$(".tip").tooltip()
			$(".pop").popover()
		})
	}(window.jQuery)
</script><?php
}
add_action( 'wp_footer', 'surbma_twitter_bootstrap_scripts' );

function surbma_twitter_bootstrap_enqueue_scripts() {
	wp_enqueue_script( 'bootstrap-scripts', plugins_url( '', __FILE__ ) . '/js/bootstrap.min.js', array( 'jquery' ), '3.0.0', true );
	wp_enqueue_style( 'bootstrap-styles', plugins_url( '', __FILE__ ) . '/css/bootstrap.min.css', false, '3.0.0' );
}
add_action( 'wp_enqueue_scripts', 'surbma_twitter_bootstrap_enqueue_scripts' );

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
