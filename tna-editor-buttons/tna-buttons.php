<?php

add_action( 'init', 'tna_buttons' );
function tna_buttons() {
	add_filter("mce_external_plugins", "tna_add_buttons");
    add_filter('mce_buttons', 'tna_register_buttons');
}	
function tna_add_buttons($plugin_array) {
	$plugin_array['tna'] = get_template_directory_uri() . '/tna-editor-buttons/tna-buttons-plugin.js';
	return $plugin_array;
}
function tna_register_buttons($buttons) {
	array_push( $buttons, 'attribution' ); // Attribution
	array_push( $buttons, 'miscquote' ); // Miscellaneous blockquote
    array_push( $buttons, 'ancestry' ); // Ancestry link
    array_push( $buttons, 'findmypast' ); // Findmypast link
    array_push( $buttons, 'recordsbox' ); // Records code block
    array_push( $buttons, 'bmd' ); // Births, marriages and deaths link
    array_push( $buttons, 'thumbnail_list_view' ); // Left thumbnail list view
    array_push( $buttons, 'right_thumbnail_list_view' ); // Right thumbnail list view
	return $buttons;
}
?>