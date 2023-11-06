<?php

namespace MichealPearce\Theme;

define('MICHEALPEARCEDEV_THEME_PATH', __DIR__);

require_once __DIR__ . '/vendor/autoload.php';


add_action('after_setup_theme', ns('setup'));
function setup(): void {
	add_theme_support('title-tag');
}


add_action('wp_enqueue_scripts', ns('scripts'));
function scripts(): void {
	$version = Package::getInstance()['version'];
	wp_enqueue_style(ns('style'), get_stylesheet_uri(), [], $version);
}