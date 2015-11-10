<?php
/** Online Exhibitions Custom Post Type */
function create_events_cpt() {
    register_post_type( 'online-exhibitions',
        array(
            'public' => true,
            'hierachical' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'supports' => array( 'title', 'online-exhibitions', 'page-attributes', 'thumbnail','editor','custom-fields'),
            'labels' => array(
                'name' => __( 'Online Exhibitions' ),
                'singular_name' => __( 'Exhibition' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Exhibition' ),
                'edit' => __( 'Edit' ),
                'edit_item' => __( 'Edit Exhibition' ),
                'new_item' => __( 'New Exhibition' ),
                'view' => __( 'View Exhibition' ),
                'view_item' => __( 'View Exhibition' ),
                'search_items' => __( 'Search Exhibitions' ),
                'not_found' => __( 'No Exhibitions found' ),
                'not_found_in_trash' => __( 'No Exhibitions found in Trash' ),
                'parent' => __( 'Parent Exhibition' ),
            ),
        )
    );
    flush_rewrite_rules();
}
add_action( 'init', 'create_events_cpt' );

/** Add Online Exhibitions PHP file to the custom post type Online Exhibitions */
add_filter( 'template_include','include_template_function', 1 );
function include_template_function( $template_path ) {
    if ( get_post_type() == 'online-exhibitions' ) {
        if ( $theme_file = locate_template( array ( 'online-exhibitions-template.php' ) ) ) {
            $template_path = $theme_file;
        }
    }
    return $template_path;
}
?>
