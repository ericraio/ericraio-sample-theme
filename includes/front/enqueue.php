<?php


function er_enqueue() {

  wp_register_style( 'er_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' );
  wp_register_style( 'er_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
  wp_register_style( 'er_style', get_template_directory_uri() . '/assets/style.css' );
  wp_register_style( 'er_dark', get_template_directory_uri() . '/assets/css/dark.css' );
  wp_register_style( 'er_font_icons', get_template_directory_uri() . '/assets/css/font-icons.css' );
  wp_register_style( 'er_animate', get_template_directory_uri() . '/assets/css/animate.css' );
  wp_register_style( 'er_magnific_popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
  wp_register_style( 'er_responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
  wp_register_style( 'er_custom', get_template_directory_uri() . '/assets/css/custom.css', array(), null );

  wp_enqueue_style( 'er_google_fonts' );
  wp_enqueue_style( 'er_bootstrap' );
  wp_enqueue_style( 'er_style' );
  wp_enqueue_style( 'er_dark' );
  wp_enqueue_style( 'er_font_icons' );
  wp_enqueue_style( 'er_animate' );
  wp_enqueue_style( 'er_magnific_popup' );
  wp_enqueue_style( 'er_responsive' );
  wp_enqueue_style( 'er_custom' );

  wp_register_script( 'er_plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), false, true );
  wp_register_script( 'er_functions', get_template_directory_uri() . '/assets/js/functions.js', array(), false, true );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'er_plugins' );
  wp_enqueue_script( 'er_functions' );

}
