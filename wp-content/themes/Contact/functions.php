<?php 

the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

    add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1568, 9999 );
the_post_thumbnail( array(100,100) ); 



// colocar en el title el nombre de la page 
function wpdocs_filter_wp_title( $title, $sep ) {
    global $paged, $page;
 
    if ( is_feed() )
        return $title;
 
    // Add the site name.
    $title .= get_bloginfo( 'name' );
 
    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";
 
    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );
// Register Custom Post Type
function proyectos() {

    $labels = array(
        'name'                  => _x( 'Proyectos', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Proyecto', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Proyectos', 'text_domain' ),
        'name_admin_bar'        => __( 'Nombre de la barra de administración', 'text_domain' ),
        'archives'              => __( 'Archivo', 'text_domain' ),
        'attributes'            => __( 'Atributos', 'text_domain' ),
        'parent_item_colon'     => __( 'Artículo principal:', 'text_domain' ),
        'all_items'             => __( 'Todos los artículos', 'text_domain' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
        'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
        'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
        'edit_item'             => __( 'Editar elemento', 'text_domain' ),
        'update_item'           => __( 'Actualizar artículo', 'text_domain' ),
        'view_item'             => __( 'Ver ítem', 'text_domain' ),
        'view_items'            => __( 'Ver artículos', 'text_domain' ),
        'search_items'          => __( 'Buscar artículo', 'text_domain' ),
        'not_found'             => __( 'Extraviado', 'text_domain' ),
        'not_found_in_trash'    => __( 'Nuevo artículo Editar elemento Editar elemento Actualizar artículo Actualizar artículo Ver ítem Ver ítem Ver artículos Ver artículos Buscar artículo Buscar artículo Extraviado Extraviado No se encuentra en la basura', 'text_domain' ),
        'featured_image'        => __( 'Foto principal', 'text_domain' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
        'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
        'items_list'            => __( 'Lista de artículos', 'text_domain' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'proyectos', 'text_domain' ),
        'description'           => __( 'Descripción del tipo de publicación', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'custom-fields', 'thumbnail', 'editor' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-images-alt2',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'proyectos', $args );

}
add_action( 'init', 'proyectos', 0 );
// Register Custom Post Type
/*function slider() {

    $labels = array(
        'name'                  => _x( 'Slider', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Slider', 'text_domain' ),
        'name_admin_bar'        => __( 'Nombre de la barra de administración', 'text_domain' ),
        'archives'              => __( 'Archivo', 'text_domain' ),
        'attributes'            => __( 'Atributos', 'text_domain' ),
        'parent_item_colon'     => __( 'Artículo principal:', 'text_domain' ),
        'all_items'             => __( 'Todos los artículos', 'text_domain' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
        'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
        'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
        'edit_item'             => __( 'Editar elemento', 'text_domain' ),
        'update_item'           => __( 'Actualizar artículo', 'text_domain' ),
        'view_item'             => __( 'Ver ítem', 'text_domain' ),
        'view_items'            => __( 'Ver artículos', 'text_domain' ),
        'search_items'          => __( 'Buscar artículo', 'text_domain' ),
        'not_found'             => __( 'Extraviado', 'text_domain' ),
        'not_found_in_trash'    => __( 'Nuevo artículo Editar elemento Editar elemento Actualizar artículo Actualizar artículo Ver ítem Ver ítem Ver artículos Ver artículos Buscar artículo Buscar artículo Extraviado Extraviado No se encuentra en la basura', 'text_domain' ),
        'featured_image'        => __( 'Foto principal', 'text_domain' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
        'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
        'items_list'            => __( 'Lista de artículos', 'text_domain' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Slider', 'text_domain' ),
        'description'           => __( 'Descripción del tipo de publicación', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'custom-fields', 'thumbnail' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-images-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Slider', $args );

}
add_action( 'init', 'slider', 0 );*/

// Register Custom Post Type
function equinpo() {

    $labels = array(
        'name'                  => _x( 'Equinpo', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Equinpo', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Equinpo Humano', 'text_domain' ),
        'name_admin_bar'        => __( 'Nombre de la barra de administración', 'text_domain' ),
        'archives'              => __( 'Archivo', 'text_domain' ),
        'attributes'            => __( 'Atributos', 'text_domain' ),
        'parent_item_colon'     => __( 'Artículo principal:', 'text_domain' ),
        'all_items'             => __( 'Todos los artículos', 'text_domain' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
        'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
        'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
        'edit_item'             => __( 'Editar elemento', 'text_domain' ),
        'update_item'           => __( 'Actualizar artículo', 'text_domain' ),
        'view_item'             => __( 'Ver ítem', 'text_domain' ),
        'view_items'            => __( 'Ver artículos', 'text_domain' ),
        'search_items'          => __( 'Buscar artículo', 'text_domain' ),
        'not_found'             => __( 'Extraviado', 'text_domain' ),
        'not_found_in_trash'    => __( 'Nuevo artículo Editar elemento Editar elemento Actualizar artículo Actualizar artículo Ver ítem Ver ítem Ver artículos Ver artículos Buscar artículo Buscar artículo Extraviado Extraviado No se encuentra en la basura', 'text_domain' ),
        'featured_image'        => __( 'Foto principal', 'text_domain' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
        'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
        'items_list'            => __( 'Lista de artículos', 'text_domain' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'equinpo', 'text_domain' ),
        'description'           => __( 'Descripción del tipo de publicación', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'custom-fields', 'thumbnail' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-groups',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'equinpo', $args );

}
add_action( 'init', 'equinpo', 0 );


// Register Custom Post Type
function aliados() {

    $labels = array(
        'name'                  => _x( 'Aliados', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Aliados', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Aliados', 'text_domain' ),
        'name_admin_bar'        => __( 'Nombre de la barra de administración', 'text_domain' ),
        'archives'              => __( 'Archivo', 'text_domain' ),
        'attributes'            => __( 'Atributos', 'text_domain' ),
        'parent_item_colon'     => __( 'Artículo principal:', 'text_domain' ),
        'all_items'             => __( 'Todos los artículos', 'text_domain' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
        'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
        'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
        'edit_item'             => __( 'Editar elemento', 'text_domain' ),
        'update_item'           => __( 'Actualizar artículo', 'text_domain' ),
        'view_item'             => __( 'Ver ítem', 'text_domain' ),
        'view_items'            => __( 'Ver artículos', 'text_domain' ),
        'search_items'          => __( 'Buscar artículo', 'text_domain' ),
        'not_found'             => __( 'Extraviado', 'text_domain' ),
        'not_found_in_trash'    => __( 'Nuevo artículo Editar elemento Editar elemento Actualizar artículo Actualizar artículo Ver ítem Ver ítem Ver artículos Ver artículos Buscar artículo Buscar artículo Extraviado Extraviado No se encuentra en la basura', 'text_domain' ),
        'featured_image'        => __( 'Foto principal', 'text_domain' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
        'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
        'items_list'            => __( 'Lista de artículos', 'text_domain' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'aliados', 'text_domain' ),
        'description'           => __( 'Descripción del tipo de publicación', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'custom-fields', 'thumbnail' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-star-filled',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'aliados', $args );

}
add_action( 'init', 'aliados', 0 );

// Register Custom Post Type
function testimonios() {

    $labels = array(
        'name'                  => _x( 'Testimonios', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Testimonios', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Testimonios', 'text_domain' ),
        'name_admin_bar'        => __( 'Nombre de la barra de administración', 'text_domain' ),
        'archives'              => __( 'Archivo', 'text_domain' ),
        'attributes'            => __( 'Atributos', 'text_domain' ),
        'parent_item_colon'     => __( 'Artículo principal:', 'text_domain' ),
        'all_items'             => __( 'Todos los artículos', 'text_domain' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
        'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
        'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
        'edit_item'             => __( 'Editar elemento', 'text_domain' ),
        'update_item'           => __( 'Actualizar artículo', 'text_domain' ),
        'view_item'             => __( 'Ver ítem', 'text_domain' ),
        'view_items'            => __( 'Ver artículos', 'text_domain' ),
        'search_items'          => __( 'Buscar artículo', 'text_domain' ),
        'not_found'             => __( 'Extraviado', 'text_domain' ),
        'not_found_in_trash'    => __( 'Nuevo artículo Editar elemento Editar elemento Actualizar artículo Actualizar artículo Ver ítem Ver ítem Ver artículos Ver artículos Buscar artículo Buscar artículo Extraviado Extraviado No se encuentra en la basura', 'text_domain' ),
        'featured_image'        => __( 'Foto principal', 'text_domain' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
        'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
        'items_list'            => __( 'Lista de artículos', 'text_domain' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'testimonios', 'text_domain' ),
        'description'           => __( 'Descripción del tipo de publicación', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'custom-fields', 'thumbnail', 'editor' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-status',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'testimonios', $args );

}
add_action( 'init', 'testimonios', 0 );






// Función para contar visualizaciones de un post.
function set_post_views() {
    if (is_single()) {
        $post_ID = get_the_ID();
        $count = get_post_meta( $post_ID, 'post_views', true );
        
        if ( $count == '' ) {
            delete_post_meta( $post_ID, 'post_views' );
            add_post_meta( $post_ID, 'post_views', 1 );
        } else {
            update_post_meta( $post_ID, 'post_views', ++$count );
        }
    }
}
add_action( 'wp', 'set_post_views' );

// Función para obtener el número de visualizaciones de un post
function get_post_views($post_ID){
    $count = get_post_meta($post_ID, 'post_views', true);
    
    if ($count == ''){
        delete_post_meta($post_ID, 'post_views');
        add_post_meta($post_ID, 'post_views', 0);
        return 0;
    }
    return $count;
}
