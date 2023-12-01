<?php

function agArt_files() {
  wp_enqueue_style('agArt_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_script('main_agArt_js', get_theme_file_uri('/build/index.js'), [], '1.0', true);
}

add_action('wp_enqueue_scripts', 'agArt_files');


function agArt_features() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('squareImg', 400, 400, true);
}

add_action('after_setup_theme', 'agArt_features');
