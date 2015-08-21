<?php
/**
 * Created by PhpStorm.
 * User: pchotrani
 * Date: 11/08/15
 * Time: 13:48
 */

function create_events_cpt() {
    register_post_type( 'meeting-minutes',
        array(
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array( 'title', 'custom-fields' ),
        'labels' => array(
            'name' => __( 'Meeting Minutes' ),
            'singular_name' => __( 'Meeting' ),
            'add_new' => __( 'Add New' ),
            'add_new_item' => __( 'Add New Event' ),
            'edit' => __( 'Edit' ),
            'edit_item' => __( 'Edit Event' ),
            'new_item' => __( 'New Event' ),
            'view' => __( 'View Event' ),
            'view_item' => __( 'View Event' ),
            'search_items' => __( 'Search Events' ),
            'not_found' => __( 'No Events found' ),
            'not_found_in_trash' => __( 'No Events found in Trash' ),
            'parent' => __( 'Parent Event' ),
        ),
    )
    );
    register_post_type( 'online-exhibitions',
        array(
            'public' => true,
            'hierachical' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'supports' => array( 'title', 'online-exhibitions', 'page-attributes'),
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
}
add_action( 'init', 'create_events_cpt' );

/** Add Category to Online Exhibitions */
add_action( 'init', 'add_category_taxonomy_to_online_exhibitions' );
function add_category_taxonomy_to_online_exhibitions() {
    register_taxonomy_for_object_type( 'category', 'online-exhibitions' );
}
/** Add Online Exhibitions PHP file to the custom post type Online Exhibitions */
add_filter( 'template_include','include_template_function', 1 );
function include_template_function( $template_path ) {
    if ( get_post_type() == 'online-exhibitions' ) {
            if ( $theme_file = locate_template( array ( 'online-exhibitions.php' ) ) ) {
                $template_path = $theme_file;
            }
    }
    return $template_path;
}

function be_archive_post_class( $classes ) {
    // Don't run on single posts or pages
    if( is_singular() )
        return $classes;
    $classes[] = 'one-third';
    global $wp_query;
    if( 0 == $wp_query->current_post || 0 == $wp_query->current_post % 3 )
        $classes[] = 'first';
    return $classes;
}
add_filter( 'post_class', 'be_archive_post_class' );