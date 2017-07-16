<?php

function er_widgets() {
  register_sidebar(array(
    'name'          => __( 'My First Theme Sidebar', 'ericraio' ),
    'id'            => 'er_sidebar',
    'description'   => __( 'Sidebar for the theme ericraio', 'ericraio' ),
    'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
}
