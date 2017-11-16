<?php

function display_education_lesson_at_a_glance () {
	$content = [];
	foreach (get_section_keys_array() as $key => $section_key) {
		if (is_string($key)) {
			foreach ( $section_key as $sub_section ) {
				$content[] = format_content(retrieve_content( [ "key" => $key, "sub-section" => $sub_section ] ), $sub_section );
			}
		} else {
			$content[] = format_content(retrieve_content(["key" => $section_key]), $section_key);
		}
	}
	return get_html_box_lesson_at_a_glance(implode(" ", $content));
}

function get_html_box_lesson_at_a_glance ($content) {
	return "<div class='position-relative separator lesson-at-a-glance'>
                    <div class='heading-holding-banner'>
                        <h2> <span> <span> Lesson at a glance </span> </span> </h2>
                    </div>
                    <div class='breather'>
                        <div class='pictorial-list grid-within-grid-one-item'>
                            ". $content ."
                        </div>
                    </div>
                </div>";
}

function get_section_keys_array () {
	return [
		"education-resource" => [ "key-stage", "time-period" ],
		"suggested-inquiry-questions",
		"potential-activities",
		"document-link"
	];
}

function retrieve_content ($section_keys) {
	global $post;
	if (isset($section_keys["sub-section"])) {
		$content_array = [];
		foreach (get_the_terms( $post->ID, remove_hyphen($section_keys["key"])) as $meta ) {
			if (slug_is_present_in_array($section_keys["sub-section"], $meta)) {
				$content_array[] =	$meta;
			}
		}
		return $content_array;
	} else if (in_array($section_keys["key"], get_section_keys_array()) && !is_string(array_search($section_keys["key"], get_section_keys_array()))) {
		return get_post_meta( $post->ID, $section_keys["key"], true );
	} else {
		return null;
	}
}

function remove_hyphen ($string) {
	return (gettype($string) === "string") ?
		str_replace("-", " " , $string) : $string;
}

function implode_content ($glue, $array) {
	return (gettype($array) === "array") ?
		implode($glue, array_filter($array)) : $array;
}

function format_content ($content, $section_key) {
	if ($content === null || !isset($content)) {
		return null;
	}

	$section_label  = ucfirst(remove_hyphen($section_key));

	switch ($section_key) {
		case "key-stage":
			$section_label  = "Suitable for";
		case "time-period":
			$content_array = array();
			foreach ($content as $item) {
				$content_array[] = make_link("/education/sessions-and-resources/", $section_key, $item->slug, $item->name);
			}
			return make_label($section_label, implode_content(", ", $content_array));
			break;
		case "suggested-inquiry-questions":
		case "potential-activities":
			return make_label($section_label, $content);
			break;
		case "document-link":
			return make_label("Download", "<a href='" . $content ."'>Lesson pack</a>");
			break;
		default:
			return null;
			break;
	}
}

function make_link ($path, $section_key, $item_slug, $label) {
	return "<a href='" . $path ."?" . $section_key . "=" . $item_slug ."'>" . $label . "</a>";
}

function make_label ($label, $content) {
	return sprintf("<p><strong>%s: </strong>%s<p>", $label, $content);
}

function get_education_resource_strings ($sub_key) {
	if ($sub_key === "key-stage") {
		return ["ks1", "ks2", "ks3", "ks4", "ks5"];
	} elseif ($sub_key === "time-period") {
		return ["early-20th-century", "early-modern", "empire-and-industry", "interwar", "medieval", "postwar", "second-world-war", "victorians"];
	} else {
		return null;
	}
}

function slug_is_present_in_array ($sub_key, $meta) {
	return (in_array($meta->slug, get_education_resource_strings($sub_key))) ?
		 true : false;
}
