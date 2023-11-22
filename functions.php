<?php

define('PATH_CSS', get_template_directory_uri() . '/assets-gulp/build/css/');
define('PATH_JS', get_template_directory_uri() . '/assets-gulp/build/js/');

// подключение стилей
add_action( 'wp_enqueue_scripts', function () {
  wp_enqueue_style('main_css', PATH_CSS . 'style.min.css');
});

// подключение js
add_action( 'wp_enqueue_scripts', function () {
  wp_enqueue_script('vandor_js', PATH_JS . 'vendor.min.js');
  wp_enqueue_script('main_js', PATH_JS . 'main.min.js');
});

// подключение миниатюр в записи
add_action( 'after_setup_theme', function () {
  add_theme_support('post-thumbnails'  );
} );