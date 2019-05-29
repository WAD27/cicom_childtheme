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
//
function custom_excerpt( $length ) {
	return 32;
}
add_filter( 'excerpt_length', 'custom_excerpt', 999 );
// Custom posts
function cicom_asoc_menu() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Menú CICOM', 'Post Type General Name', 'cicom-theme' ),
    'singular_name'       => _x( 'Menu Top CICOM', 'Post Type Singular Name', 'cicom-theme' ),
    'menu_name'           => __( 'Menú CICOM Top', 'cicom-theme' ),
    'parent_item_colon'   => __( 'Menu Top padre', 'cicom-theme' ),
    'all_items'           => __( 'Todos los Menú', 'cicom-theme' ),
    'view_item'           => __( 'Ver Menu Top', 'cicom-theme' ),
    'add_new_item'        => __( 'Agrega Menu Top', 'cicom-theme' ),
    'add_new'             => __( 'Nuevo Menu Top', 'cicom-theme' ),
    'edit_item'           => __( 'Edita Menu Top', 'cicom-theme' ),
    'update_item'         => __( 'Actualiza Menu Top', 'cicom-theme' ),
    'search_items'        => __( 'Busca Menú', 'cicom-theme' ),
    'not_found'           => __( 'No existen Menú', 'cicom-theme' ),
    'not_found_in_trash'  => __( 'No existen Menú en la basura', 'cicom-theme' ),
  );

  // Set other options for Custom Post Type
  $args = array(
    'label'               => __( 'CICOM Menú', 'cicom-theme' ),
    'description'         => __( 'Menú para mostrar asociados', 'cicom-theme' ),
    'labels'              => $labels,
    'supports'            => array('title', 'custom-fields'),
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
    'taxonomies'          => ''
  );
  // Registra
  register_post_type( 'cicom_asoc_menu', $args );
}
// banners footer
function cicom_banners_footer() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Banners CICOM', 'Post Type General Name', 'cicom-theme' ),
    'singular_name'       => _x( 'Banner CICOM', 'Post Type Singular Name', 'cicom-theme' ),
    'menu_name'           => __( 'Banners CICOM Footer', 'cicom-theme' ),
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
    'supports'            => array('title','custom-fields'),
    'menu_icon'           => 'dashicons-images-alt',
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
    'taxonomies'          => '',
  );
  // Registra
  register_post_type( 'cicom-banners-footer', $args );
}
// socios landing page
function socios_landing_page() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Socios CICOM', 'Post Type General Name', 'cicom-theme' ),
    'singular_name'       => _x( 'Socio CICOM', 'Post Type Singular Name', 'cicom-theme' ),
    'menu_name'           => __( 'Socios CICOM', 'cicom-theme' ),
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
    'label'               => __( 'CICOM Socios', 'cicom-theme' ),
    'description'         => __( 'Landing Page para Socios CICOM', 'cicom-theme' ),
    'labels'              => $labels,
    'supports'            => array('title', 'thumbnail', 'custom-fields'),
    'menu_icon'           => 'dashicons-admin-users',
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
  register_post_type( 'socios-cicom', $args );
}

function eventos_cicom() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Eventos CICOM', 'Post Type General Name', 'cicom-theme' ),
    'singular_name'       => _x( 'Evento CICOM', 'Post Type Singular Name', 'cicom-theme' ),
    'menu_name'           => __( 'Eventos CICOM', 'cicom-theme' ),
    'parent_item_colon'   => __( 'Evento padre', 'cicom-theme' ),
    'all_items'           => __( 'Todos los Eventos', 'cicom-theme' ),
    'view_item'           => __( 'Ver Evento', 'cicom-theme' ),
    'add_new_item'        => __( 'Agrega Evento', 'cicom-theme' ),
    'add_new'             => __( 'Nuevo Evento', 'cicom-theme' ),
    'edit_item'           => __( 'Edita Evento', 'cicom-theme' ),
    'update_item'         => __( 'Actualiza Evento', 'cicom-theme' ),
    'search_items'        => __( 'Busca Eventos', 'cicom-theme' ),
    'not_found'           => __( 'No existen Eventos', 'cicom-theme' ),
    'not_found_in_trash'  => __( 'No existen eventos en la basura', 'cicom-theme' ),
  );

  // Set other options for Custom Post Type
  $args = array(
    'label'               => __( 'CICOM Eventos', 'cicom-theme' ),
    'description'         => __( 'CPT para Eventos de CICOM', 'cicom-theme' ),
    'labels'              => $labels,
    'supports'            => array('title', 'thumbnail', 'custom-fields'),
    'menu_icon'           => 'dashicons-media-document',
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
    'taxonomies'          => ''
  );
  // Registra
  register_post_type( 'eventos-cicom', $args );
}
// inicia CPTs
add_action('init', 'socios_landing_page', 0);
add_action('init', 'cicom_asoc_menu', 0);
add_action('init', 'cicom_banners_footer', 0);
add_action('init', 'eventos_cicom', 0);
// cpt a categorias
add_action( 'init', 'add_category_taxonomy_to_cpt' );
function add_category_taxonomy_to_cpt() {
  register_taxonomy_for_object_type( 'category', 'socios-cicom' );
  register_taxonomy_for_object_type( 'category', 'cicom-banners-footer' );
}

// analytics
add_action('wp_head', 'add_analytics');
function add_analytics() { ?>
  <!-- <script>

  </script> -->
  <?php
}
