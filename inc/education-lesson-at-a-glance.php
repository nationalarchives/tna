<?php
/**
 * @param $type
 * Static content - if more is to be added, function must be changed to use if/switch statement as opposed to ternary operator
 * @return array|null
 * Returns array of the keys for each section within a lesson
 */
function get_section_keys_array ($type) {
	return ($type === "lesson-at-a-glance") ?
		["education-resource" => [ "key-stage", "time-period" ],
			"suggested-inquiry-questions",
			"potential-activities",
			"document-link"] : null;
}
/**
 * @param $sub_key
 * Static content - if more is to be added, then more conditionals should follow before the final 'else'.
 * @return array|null
 * Returns arrays of the categorised sub-sections of the 'education resource' taxonomy
 */
function get_education_resource_strings ($sub_key) {
	if ($sub_key === "key-stage") {
		return ["ks1", "ks2", "ks3", "ks4", "ks5"];
	} elseif ($sub_key === "time-period") {
		return ["early-20th-century", "early-modern", "empire-and-industry", "interwar", "medieval", "postwar", "second-world-war", "victorians"];
	} else {
		return null;
	}
}
/**
 * @param $type
 * The function which compiles the side box content based on the box type input, then returns it for output
 * @return string
 */
function display_education_side_box ($type) {
	$content = [];
	foreach (get_section_keys_array($type) as $key => $section_key) {
		if (is_string($key)) {
			foreach ( $section_key as $sub_section ) {
				$content[] = format_content(retrieve_content( $type, [ "key" => $key, "sub-section" => $sub_section ] ), $sub_section );
			}
		} else {
			$content[] = format_content(retrieve_content($type, ["key" => $section_key]), $section_key);
		}
	}
	return get_html_box($type, implode(" ", $content));
}
/**
 * @param $label
 * @param $content
 * Inserts the box type as the label and class, and then adds the content below
 * @return string
 * Returns the formatted box HTML
 */
function get_html_box ($label, $content) {
	return "<div class='position-relative separator ". $label ."'>
                    <div class='heading-holding-banner'>
                        <h2> <span> <span> ". ucfirst(remove_hyphen($label)) ." </span> </span> </h2>
                    </div>
                    <div class='breather'>
                        <div class='pictorial-list grid-within-grid-one-item'>
                            ". $content ."
                        </div>
                    </div>
                </div>";
}
/**
 * @param $type
 * @param $section_keys
 * This function takes the box type and the current section key (if multiple subsections are present, then it takes both current overarching section and subsection)
 * @return array|mixed|null
 * array of meta terms | single mixed meta content (often string) | null if section key does not exist
 */
function retrieve_content ($type, $section_keys) {
	global $post;
	if (isset($section_keys["sub-section"])) {
		$content_array = [];
		foreach (get_the_terms( $post->ID, remove_hyphen($section_keys["key"])) as $meta ) {
			if (slug_is_present_in_array($section_keys["sub-section"], $meta)) {
				$content_array[] =	$meta;
			}
		}
		return $content_array;
	} else if (in_array($section_keys["key"], get_section_keys_array($type)) && !is_string(array_search($section_keys["key"], get_section_keys_array($type)))) {
		return get_post_meta( $post->ID, $section_keys["key"], true );
	} else {
		return null;
	}
}
/**
 * @param $sub_key
 * @param $meta
 * takes sub key and meta, then if the meta slug is contained in the corresponding resource strings array return true
 * @return bool
 */
function slug_is_present_in_array ($sub_key, $meta) {
	return (in_array($meta->slug, get_education_resource_strings($sub_key))) ?
		true : false;
}
/**
 * @param $content
 * @param $section_key
 * Takes the content and the section the content comes under as parameters
 * @return null|string
 * null if content does not exist or is not set | string of formatted content based on the section type
 */
function format_content ($content, $section_key) {
	if ($content == null || !isset($content)) {return null;}
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
/**
 * @param $path
 * @param $section_key
 * @param $item_slug
 * @param $label
 *
 * @return string
 */
function make_link ($path, $section_key, $item_slug, $label) {
	return "<a href='" . $path ."?" . $section_key . "=" . $item_slug ."'>" . $label . "</a>";
}
/**
 * @param $label
 * @param $content
 *
 * @return string
 */
function make_label ($label, $content) {
	return sprintf("<p><strong>%s: </strong>%s<p>", $label, $content);
}
/**
 * @param $string
 *
 * @return mixed
 * If the parameter is of the type string return the string without hyphens, else return the value as it was
 */
function remove_hyphen ($string) {
	return (gettype($string) === "string") ?
		str_replace("-", " " , $string) : $string;
}
/**
 * @param $glue
 * @param $array
 *
 * @return string
 * If the parameter is an array, implode the array into a string using the defined glue, else return the parameter unchanged
 */
function implode_content ($glue, $array) {
	return (gettype($array) === "array") ?
		implode($glue, array_filter($array)) : $array;
}
