<?php

function er_setup_theme() {
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'custom-logo' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );

  $starter_content = array(
    'widgets' => array(
      'er_sidebar' => array(
        'text_business_info',
        'search',
        'text_about'
      )
    ),

    'attachments' => array(
      'image-about' => array(
        'post_title' => __( 'About', 'ericraio' ),
        'file'       => 'assets/images/about/1.jpg'
      )
    ),

    'posts' => array(
      'home'            => array( 'thumbnail' => '{{image-about}}'),
      'about'           => array( 'thumbnail' => '{{image-about}}'),
      'contact'         => array( 'thumbnail' => '{{image-about}}'),
      'blog'            => array( 'thumbnail' => '{{image-about}}'),
      'homepage-sction' => array( 'thumbnail' => '{{image-about}}')
    ),

    'options' => array(
      'show_on_front'  => 'page',
      'page_on_front'  => '{{home}}',
      'page_for_posts' => '{{blog}}'
    ),

    'theme_mods' => array(
      'er_facebook_handle'    => 'ericraio',
      'er_twitter_handle'     => 'ericraio',
      'er_instagram_handle'   => 'ericraio',
      'er_email'              => 'ericraio',
      'er_phone'              => 'ericraio',
      'er_header_show_search' => 'yes',
      'er_header_show_cart'   => 'yes',
    ),

    'nav_menus' => array(
      'primary' => array(
        'name' => __( 'Primary Menu', 'ericraio' ),
        'items' => array(
          'link_home',
          'page_about',
          'page_blog',
          'page_contact'
        )
      ),

      'secondary' => array(
        'name' => __( 'Secondary Menu', 'ericraio' ),
        'items' => array(
          'link_home',
          'page_about',
          'page_blog',
          'page_contact'
        )
      )
    )
  );

  add_theme_support( 'starter-content', $starter_content );

  register_nav_menu( 'primary', __( 'Primary Menu', 'ericraio' ) );
  register_nav_menu( 'secondary', __( 'Secondary Menu', 'ericraio' ) );

  if (function_exists('quads_register_ad')) {
    quads_register_ad( array('location' => 'ericraio_header', 'description' => 'Eric Raio Header position') );
  }
}
