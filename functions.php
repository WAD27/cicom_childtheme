<?php
// CICOM custom
 function cicom_scripts() {
   $parent_style = 'parent-style';
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom-child', get_stylesheet_directory_uri() . '/assets/css/cicom.css', array($parent_style), '1.0.0' );
  wp_enqueue_script('img-script',get_stylesheet_directory_uri() . '/assets/js/imgLiquid-min.js', array( 'jquery' ));
  wp_enqueue_script('custom-script',get_stylesheet_directory_uri() . '/assets/js/cicom.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'cicom_scripts' );

// Custom posts
function cicom_banners_top() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Banners CICOM', 'Post Type General Name', 'cicom-theme' ),
    'singular_name'       => _x( 'Banner CICOM', 'Post Type Singular Name', 'cicom-theme' ),
    'menu_name'           => __( 'Banners CICOM Top', 'cicom-theme' ),
    'parent_item_colon'   => __( 'Banner padre', 'cicom-theme' ),
    'all_items'           => __( 'Todos los Banners', 'cicom-theme' ),
    'view_item'           => __( 'Ver Banner', 'cicom-theme' ),
    'add_new_item'        => __( 'Agrega Banner', 'cicom-theme' ),
    'add_new'             => __( 'Nuevo Banner', 'cicom-theme' ),
    'edit_item'           => __( 'Edita Banner', 'cicom-theme' ),
    'update_item'         => __( 'Actualiza Banner', 'cicom-theme' ),
    'search_items'        => __( 'Busca Banners', 'cicom-theme' ),
    'not_found'           => __( 'No existen Banners', 'cicom-theme' ),
    'not_found_in_trash'  => __( 'No existen Banners en la basura', 'cicom-theme' ),
  );

  // Set other options for Custom Post Type
  $args = array(
    'label'               => __( 'CICOM Banners Top', 'cicom-theme' ),
    'description'         => __( 'Banners premium para CICOM', 'cicom-theme' ),
    'labels'              => $labels,
    'supports'            => array('title', 'custom-fields'),
    'menu_icon'           => 'dashicons-images-alt',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 4,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'taxonomies'          => ''
  );
  // Registra
  register_post_type( 'cicom-banners-top', $args );
}
// banners footer
function cicom_banners_bottom() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Banners CICOM', 'Post Type General Name', 'cicom-theme' ),
    'singular_name'       => _x( 'Banner CICOM', 'Post Type Singular Name', 'cicom-theme' ),
    'menu_name'           => __( 'Banners CICOM Bottom', 'cicom-theme' ),
    'parent_item_colon'   => __( 'Banner padre', 'cicom-theme' ),
    'all_items'           => __( 'Todos los Banners', 'cicom-theme' ),
    'view_item'           => __( 'Ver Banner', 'cicom-theme' ),
    'add_new_item'        => __( 'Agrega Banner', 'cicom-theme' ),
    'add_new'             => __( 'Nuevo Banner', 'cicom-theme' ),
    'edit_item'           => __( 'Edita Banner', 'cicom-theme' ),
    'update_item'         => __( 'Actualiza Banner', 'cicom-theme' ),
    'search_items'        => __( 'Busca Banners', 'cicom-theme' ),
    'not_found'           => __( 'No existen Banners', 'cicom-theme' ),
    'not_found_in_trash'  => __( 'No existen Banners en la basura', 'cicom-theme' ),
  );

  // Set other options for Custom Post Type
  $args = array(
    'label'               => __( 'CICOM Banners', 'cicom-theme' ),
    'description'         => __( 'Banners para CICOM', 'cicom-theme' ),
    'labels'              => $labels,
    'supports'            => array('title','custom-fields', 'thumbnail'),
    'menu_icon'           => 'dashicons-images-alt',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'taxonomies'          => '',
  );
  // Registra
  register_post_type( 'cicom-banners-bottom', $args );
}
// socios landing page
function socios_landing_page() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Socios CICOM', 'Post Type General Name', 'cicom-theme' ),
    'singular_name'       => _x( 'Socio CICOM', 'Post Type Singular Name', 'cicom-theme' ),
    'menu_name'           => __( 'Socios CICOM Landing Page', 'cicom-theme' ),
    'parent_item_colon'   => __( 'Socio padre', 'cicom-theme' ),
    'all_items'           => __( 'Todos los Socios', 'cicom-theme' ),
    'view_item'           => __( 'Ver Socio', 'cicom-theme' ),
    'add_new_item'        => __( 'Agrega Socio', 'cicom-theme' ),
    'add_new'             => __( 'Nuevo Socio', 'cicom-theme' ),
    'edit_item'           => __( 'Edita Socio', 'cicom-theme' ),
    'update_item'         => __( 'Actualiza Socio', 'cicom-theme' ),
    'search_items'        => __( 'Busca Socios', 'cicom-theme' ),
    'not_found'           => __( 'No existen Socios', 'cicom-theme' ),
    'not_found_in_trash'  => __( 'No existen Socios en la basura', 'cicom-theme' ),
  );

  // Set other options for Custom Post Type
  $args = array(
    'label'               => __( 'CICOM Socios Landing Page', 'cicom-theme' ),
    'description'         => __( 'Landing Page para Socios CICOM', 'cicom-theme' ),
    'labels'              => $labels,
    'supports'            => array('title', 'thumbnail', 'custom-fields'),
    'menu_icon'           => 'dashicons-media-document',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 6,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'taxonomies'          => ''
  );
  // Registra
  register_post_type( 'socios-landing-page', $args );
}
// inicia CPTs
add_action( 'init', 'cicom_banners_top', 0 );
add_action( 'init', 'cicom_banners_bottom', 0 );
add_action( 'init', 'socios_landing_page', 0 );
