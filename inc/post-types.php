<?php
/** Online Exhibitions Custom Post Type */
if (!function_exists('create_events_cpt')) :
function create_events_cpt() {
    register_post_type( 'online-exhibitions',
        array(
            'public' => true,
            'hierachical' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'supports' => array( 'title', 'online-exhibitions', 'page-attributes', 'thumbnail','editor','custom-fields'),
            'register_meta_box_cb' => 'tna_custom_metabox',
            'labels' => array(
                'name' => __( 'Online exhibitions' ),
                'singular_name' => __( 'Exhibition' ),
                'add_new' => __( 'Add new' ),
                'add_new_item' => __( 'Add new exhibition' ),
                'edit' => __( 'Edit' ),
                'edit_item' => __( 'Edit exhibition' ),
                'new_item' => __( 'New exhibition' ),
                'view' => __( 'View exhibition' ),
                'view_item' => __( 'View exhibition' ),
                'search_items' => __( 'Search exhibitions' ),
                'not_found' => __( 'No exhibitions found' ),
                'not_found_in_trash' => __( 'No exhibitions found in Trash' ),
                'parent' => __( 'Parent exhibition' ),
            ),
        )
    );
//    flush_rewrite_rules();
}
endif;
add_action( 'init', 'create_events_cpt' );

/** Add Online Exhibitions PHP file to the custom post type Online Exhibitions */
if (!function_exists('include_template_function')) :
function include_template_function( $template_path ) {
    if ( get_post_type() == 'online-exhibitions' ) {
        if ( $theme_file = locate_template( array ( 'online-exhibitions-template.php' ) ) ) {
            $template_path = $theme_file;
        }
    }
    return $template_path;
}
add_filter( 'template_include','include_template_function', 1 );
endif;
?>
