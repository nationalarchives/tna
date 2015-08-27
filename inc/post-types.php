<?php
/**
 * Created by PhpStorm.
 * User: pchotrani
 * Date: 11/08/15
 * Time: 13:48
 */

/*function create_events_cpt() {
    register_post_type( 'meeting-minutes',
        array(
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-clipboard',
            'supports' => array( 'title', 'custom-fields','editor','thumbnail' ),
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
                'parent' => __( 'Parent Event' )
            ),
        )
    );
    $args = array(
        'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
	  );

}
add_action( 'init', 'create_events_cpt', '$args' );*/

add_action( 'init', 'register_cpt_meeting_minutes' );

function register_cpt_meeting_minutes() {

    $labels = array(
        'name'               => __( 'Add New Minutes', 'text_domain' ),
        'singular_name'      => __( 'single post type name', 'text_domain' ),
        'add_new'            => _x( 'New Minutes Page', '${4:Name}', 'text_domain' ),
        'add_new_item'       => __( 'Add New Minutes Page', 'text_domain}' ),
        'edit_item'          => __( 'Edit single Meeting-Minutes', 'text_domain' ),
        'new_item'           => __( 'New single Meeting-Minutes', 'text_domain' ),
        'view_item'          => __( 'View single Meeting-Minutes', 'text_domain' ),
        'search_items'       => __( 'Search Meeting-Minutes', 'text_domain' ),
        'not_found'          => __( 'No Meeting Minutes found', 'text_domain' ),
        'not_found_in_trash' => __( 'No meeting-minutes found in Trash', 'text_domain' ),
        'parent_item_colon'  => __( 'Parent single post type name:', 'text_domain' ),
        'menu_name'          => __( 'Meeting Minutes', 'text_domain' )
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => true,
        'description'         => 'description',
        //'taxonomies'          => array( 'category' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-clipboard',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'query_var'           => true,
        'can_export'          => true,
        //'rewrite'             => array( 'slug' => 'meeting-minutes-and-summeries/meeting-minutes' ),
        'has_archive'         => false,
        'post_type'           => 'page',
        'capability_type'     => 'page',
      //  "parent"              => 'about',
        'supports'            => array(
                                    'title',
                                    'thumbnail',
                                    'custom-fields',
                                    'page-attributes',
                                    //'post-formats',
                                    'excerpt'
                                    ),
    );

    register_post_type( 'meeting-minutes', $args );
}

//specifying the custom post type template to use in minutes meeting
function is_publication() {
    $post_type = get_query_var('meeting-minutes');
    // short had for if / else;
    return $post_type == 'meeting-minutes' ? true : false;
}