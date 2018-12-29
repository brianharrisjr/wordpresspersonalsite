<?php

function theme_styles() {
  wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');
  wp_enqueue_style('style', get_stylesheet_uri());
}



add_action('wp_enqueue_scripts', 'theme_styles');

?>