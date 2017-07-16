<?php

function er_misc_customizer_section( $wp_customize ) {
  $wp_customize->add_setting( 'er_header_show_search', array(
    'default'   => 'yes',
    'transport' => 'postMessage'
  ));

  $wp_customize->add_setting( 'er_header_show_cart', array(
    'default'   => 'yes',
    'transport' => 'postMessage'
  ));

  $wp_customize->add_setting( 'er_footer_copyright_text', array(
    'default' => 'Copyrights &copy; ' . date("Y") . ' All Rights Reservered by Eric Raio'
  ));

  $wp_customize->add_setting( 'er_footer_tos_page', array(
    'default' => 0
  ));

  $wp_customize->add_setting( 'er_footer_privacy_policy_page', array(
    'default' => 0
  ));

  $wp_customize->add_setting( 'er_show_header_popular_posts_widget', array(
    'default' => false
  ));

  $wp_customize->add_setting( 'er_popular_posts_widget_title', array(
    'default' => 'Breaking News'
  ));

  $wp_customize->add_section( 'er_misc_section', array(
    'title'    => __( 'Misc Settings', 'ericraio' ),
    'prorioty' => 30,
    'panel'    => 'ericraio'
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'er_header_show_search_input',
    array(
      'label'    => __( 'Show Search Button in Header', 'ericraio' ),
      'section'  => 'er_misc_section',
      'settings' => 'er_header_show_search',
      'type'     => 'checkbox',
      'choices'  => array(
        'yes' => __( 'Yes', 'ericraio' )
      )
    )
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'er_header_show_cart_input',
    array(
      'label'    => __( 'Show Cart Button in Header', 'ericraio' ),
      'section'  => 'er_misc_section',
      'settings' => 'er_header_show_cart',
      'type'     => 'checkbox',
      'choices'  => array(
        'yes' => __( 'Yes', 'ericraio' )
      )
    )
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'er_footer_copyright_text_input',
    array(
      'label'    => __( 'Copyright Text', 'ericraio' ),
      'section'  => 'er_misc_section',
      'settings' => 'er_footer_copyright_text'
    )
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'er_footer_tos_page_input',
    array(
      'label'    => __( 'TOS Page', 'ericraio' ),
      'section'  => 'er_misc_section',
      'settings' => 'er_footer_tos_page',
      'type'     => 'dropdown-pages'
    )
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'er_footer_privacy_policy_page_input',
    array(
      'label'    => __( 'Privacy Policy Page', 'ericraio' ),
      'section'  => 'er_misc_section',
      'settings' => 'er_footer_privacy_policy_page',
      'type'     => 'dropdown-pages'
    )
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'er_show_header_popular_posts_widget',
    array(
      'label'    => __( 'Show Popular Posts', 'ericraio' ),
      'section'  => 'er_misc_section',
      'settings' => 'er_show_header_popular_posts_widget',
      'type'     => 'checkbox',
      'choices'  => array(
        'yes' => __( 'Yes', 'ericraio' )
      )
    )
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'er_popular_posts_widget_title_input',
    array(
      'label'    => __( 'Popular Posts Title', 'ericraio' ),
      'section'  => 'er_misc_section',
      'settings' => 'er_popular_posts_widget_title',
    )
  ));
}
