<?php

function er_customize_register( $wp_customize  ) {
  $wp_customize->get_section( 'title_tagline' )->title = 'General';

  $wp_customize->add_panel( 'ericraio', array(
    'title'       => __( 'Theme Settings', 'ericraio' ),
    'description' => "<p>Eric Raio's Theme Settings</p>",
    'priority'    => 160
  ));

  er_social_customizer_section( $wp_customize );
  er_misc_customizer_section( $wp_customize );

  // echo '<pre>';
  // var_dump( $wp_customize );
  // echo '</pre>';
}
