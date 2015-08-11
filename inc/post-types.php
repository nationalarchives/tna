<?php
    // Our custom post type function
    function create_posttype() {

        // Meeting Minutes
        register_post_type( 'Meeting-Minutes', array(
            'public' => true,
            'menu_icon' => 'dashicons-clipboard',
            'label' => 'Meeting Minutes',
            'supports' => array( 'title', 'custom-fields' )
        ) );
        }
        // Hooking up our function to theme setup
        add_action( 'init', 'create_posttype' );