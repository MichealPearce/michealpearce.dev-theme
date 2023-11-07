<?php

namespace MichealPearce\Theme;

define('MICHEALPEARCEDEV_THEME_PATH', __DIR__);

require_once __DIR__ . '/vendor/autoload.php';


add_action('after_setup_theme', ns('setup'));
function setup(): void {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	// add menus
	register_nav_menus([
		'main-menu' => 'Main Menu',
	]);
}


add_action('wp_enqueue_scripts', ns('scripts'));
function scripts(): void {
	$version = Package::getInstance()['version'];
	wp_enqueue_style(ns('global-style'), resolve_url('assets/css/global.css'), [], $version);

	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
}