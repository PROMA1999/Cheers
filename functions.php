<?php

add_theme_support('title-tag'); // support de mon title tag
add_theme_support('post-thumbnails'); // support du thumbnail sur mes articles
add_theme_support('menus'); // support des menus par notre theme
register_nav_menu('header', 'En tête du menu');

function wpbootstrap_styles_scripts() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
  wp_enqueue_style('mainStyle', get_template_directory_uri() . '/assets/css/main.css', false, '0.0.2');
  wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', false, '1.0.0', true);
  wp_enqueue_style('Gilroy', 'https://fonts.cdnfonts.com/css/gilroy-bold?styles=20876,20877,20878,20879,20880');

}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');


function create_posttypes() {
  register_post_type('quiz', [
      'labels' => [
          'name' => __( 'Quiz' ),
          'singular_name' => __( 'Quiz' )
      ],
      'public' => true,
      'has_archive' => true,
      'rewrite' => ['slug' => 'quiz'],
      'show_in_rest' => false,
  ]);
}
add_action('init', 'create_posttypes');