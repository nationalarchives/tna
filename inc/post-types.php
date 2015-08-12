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
            'supports' => array( 'title', 'custom-fields', 'slug' ),
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
}
add_action( 'init', 'create_events_cpt' );


