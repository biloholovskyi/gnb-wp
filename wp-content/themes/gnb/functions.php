<?php
add_action('wp_enqueue_scripts', 'style_them');
add_action('wp_footer', 'script_them');
add_action('after_setup_theme', 'menu');

function style_them() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('owl_default', get_template_directory_uri() . '/css/owl.theme.default.min.css');
  wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.carousel.min.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
}

function script_them() {
  wp_enqueue_script('carousel', get_template_directory_uri() . '/buildjs/owl.carousel.min.js');
  wp_enqueue_script('script', get_template_directory_uri() . '/buildjs/index.js');

  add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
  function codeless_remove_type_attr($tag, $handle) {
    return preg_replace("/type=['\"]text\/(javascript|css)['\"]/", '', $tag);
  }
}

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );