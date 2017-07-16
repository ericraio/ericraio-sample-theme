<?php

function er_social_customizer_section( $wp_customize ) {
  $wp_customize->add_setting( 'er_facebook_handle', array(
    'default' => ''
  ));

  $wp_customize->add_setting( 'er_twitter_handle', array(
    'default' => ''
  ));

  $wp_customize->add_setting( 'er_instagram_handle', array(
    'default' => ''
  ));

  $wp_customize->add_setting( 'er_phone', array(
    'default' => ''
  ));

  $wp_customize->add_setting( 'er_email', array(
    'default' => ''
  ));

  $wp_customize->add_section( 'er_social_section', array(
    'title'    => __( 'Social Settings', 'ericraio' ),
    'priority' => 30,
    'panel'    => 'ericraio'
  ));

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'er_social_facebook_input',
      array(
        'label'    => __( 'Facebook Handle', 'ericraio' ),
        'section'  => 'er_social_section',
        'settings' => 'er_facebook_handle'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'er_social_twitter_input',
      array(
        'label'    => __( 'Twitter Handle', 'ericraio' ),
        'section'  => 'er_social_section',
        'settings' => 'er_twitter_handle'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'er_social_instagram_input',
      array(
        'label'    => __( 'Instagram Handle', 'ericraio' ),
        'section'  => 'er_social_section',
        'settings' => 'er_instagram_handle'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'er_social_section',
      array(
        'label'    => __( 'Phone Number', 'ericraio' ),
        'section'  => 'er_social_section',
        'settings' => 'er_phone'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'er_social_phone_input',
      array(
        'label'    => __( 'Email', 'ericraio' ),
        'section'  => 'er_social_section',
        'settings' => 'er_email'
      )
    )
  );
}
