<?php
// CICOM custom
 function cicom_scripts() {
   $parent_style = 'parent-style';
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom-child', get_stylesheet_directory_uri() . '/assets/css/cicom.css', array($parent_style), '1.0.0' );
  wp_enqueue_script('img-script',get_stylesheet_directory_uri() . '/assets/js/cicomimgLiquid-min.js', array( 'jquery' ));
  wp_enqueue_script('custom-script',get_stylesheet_directory_uri() . '/assets/js/cicom.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'cicom_scripts' );

// Custom posts
function cicom_banners() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Banners CICOM', 'Post Type General Name', 'cicom-theme' ),
    'singular_name'       => _x( 'Banner CICOM', 'Post Type Singular Name', 'cicom-theme' ),
    'menu_name'           => __( 'Banners CICOM', 'cicom-theme' ),
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
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', ),
    // 'taxonomies'          => array( '' ),
    'menu_icon'           => 'dashicons-controls-play',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 7,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );

  // Registra
  register_post_type( 'cicom-banners', $args );

}

add_action( 'init', 'cicom_banners', 0 );
