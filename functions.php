<?php

function montheme_supports () {
	add_theme_support('title-tag');
}

function montheme_register_assets () {
	wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'); //chargement du css bootstrap
	wp_register_script('bootsrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_style('bootstrap');
	wp_enqueue_scripts('bootstrap');
}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');