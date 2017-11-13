<?php

function display_education_lesson_at_a_glance () {
	$key_stage_strings = array ("ks1", "ks2", "ks3", "ks4", "ks5");
	$time_period_strings = array ("early-20th-century", "early-modern", "empire-and-industry", "interwar", "medieval", "postwar", "second-world-war", "victorians");
	$sections = array (
		"key-stage" => "Suitable for",
		"time-period" => "Time period",
		"suggested-inquiry-questions" => "Suggested inquiry questions",
		"potential-activities" => "Potential activities",
		"document-link" => "Download");



	global $post;
	$education_resource_meta = get_the_terms($post->ID, "education resource");
	$key_stage = array();
	$time_period = array();

#education resource meta: key stage and time period

	foreach ( $education_resource_meta as $education_resource){
		if (in_array($education_resource->slug, $key_stage_strings)) {
			$key_stage[] = $education_resource;
		}
		if (in_array($education_resource->slug, $time_period_strings)) {
			$time_period[] = $education_resource;
		}
	}
	

}