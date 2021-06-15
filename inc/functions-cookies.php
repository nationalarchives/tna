<?php
//! These functions are going to be moved into the plugin
//! upon cross site roll-out

// Delete Google Analytics cookies on WP init
function delete_GA_cookies() {
	$domain = 'nationalarchives.local';
	$cookie_list = ['_ga', '_gid', '_gat_UA-2827241-22', '_gat_UA-2827241-1'];
	handle_cookies($cookie_list, $domain);
}

// Delete legacy cookies on WP init
function delete_legacy_cookies() {
	$domain = 'nationalarchives.local';
	$cookie_list = ['__atuvs', '__atuvc'];
	handle_cookies($cookie_list, $domain);
}

// Delete legacy cookies on WP init
function delete_AddThis_cookies() {
	$domain = 'addthis.com';
	$cookie_list = ['uvc', 'na_tc', 'ouid', 'na_id', 'loc', 'uid'];
	handle_cookies($cookie_list, $domain);
}

function handle_GA_script(string $global_cookie) {
	$cookie = $_COOKIE[$global_cookie];
    $clean_cookie = preg_replace('/\\\\/', '', $cookie);
    $cookies_policy_to_obj = json_decode( $clean_cookie );
    if(property_exists($cookies_policy_to_obj, 'usage') && $cookies_policy_to_obj->usage == true) {
        include 'gtm-script.php';
    }			
}

// Remove cookies if available when coming from Latin
function remove_cookies_on_page_load() {
	$global_cookie = 'cookies_policy';

	if(isset($_COOKIE[$global_cookie])) {
        $cookie = $_COOKIE[$global_cookie];
        $clean_cookie = preg_replace('/\\\\/', '', $cookie);
        $cookies_policy_to_obj = json_decode( $clean_cookie );
        if(property_exists($cookies_policy_to_obj, 'usage') && $cookies_policy_to_obj->usage == false) {
            add_action( 'init', 'delete_GA_cookies' );
        }
    }
    // Remove legacy cookies
    add_action( 'init', 'delete_legacy_cookies' );   
    add_action( 'init', 'delete_AddThis_cookies' );  
}

// Cookie banner custom hook
function wp_cookie_banner_hook() {
	do_action('wp_cookie_banner_hook');
}

// Clear cookies
function clear_cookie($cookie_name, $cookie_domain) {
	unset( $_COOKIE[$cookie_name] );
	setcookie($cookie_name, '', time()-10000000000, '/', '.' . $cookie_domain);
	setcookie($cookie_name, '', time()-10000000000, '/', $cookie_domain);
	setcookie($cookie_name, '', time()-10000000000, '/');
}

// Get all the cookies, loop through each and every one
function handle_cookies($cookie_list, $domain) {
	if (isset($_SERVER['HTTP_COOKIE'])) {
		$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
		foreach($cookies as $cookie) {
			$parts = explode('=', $cookie);
			$name = trim($parts[0]);
			foreach($cookie_list as $single_cookie) {
				if($name == $single_cookie) {
                    clear_cookie($name, $domain);
                }
			}
		}
	}
}

// Remove GA cookies on page load
remove_cookies_on_page_load();