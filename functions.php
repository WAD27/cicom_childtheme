<?php
// CICOM custom
 function cicom_scripts() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom-child', get_stylesheet_directory_uri() . '/assets/css/cicom.css', array(''), '1.0.0' );
  wp_enqueue_script('custom-script',get_stylesheet_directory_uri() . '/assets/js/cicom.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'cicom_scripts' );

// Custom post
