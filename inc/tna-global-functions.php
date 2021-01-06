<?php

/**
 * @param $server_ip - obtained from $_SERVER['SERVER_NAME']
 * @param $remote_ip - obtained from $_SERVER['REMOTE_ADDR']
 *
 * @return bool
 */
function served_from_local_machine($server_ip, $remote_ip)
{
	return ($server_ip === $remote_ip);
}

function check_for_specific_url_path($url_path = ''){
	$url = 'https://nationalarchives.gov.uk';
	return strpos($url,$url_path);
}