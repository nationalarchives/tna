<?php

function display_education_lesson_at_a_glance () {
	$content = [];
	foreach (get_section_keys_array() as $key => $section_key) {
		if ($key === "education-resources") {
			foreach ( $section_key as $sub_section ) {
				$content[] = format_content(retrieve_content( [ "key" => $key, "sub-section" => $sub_section ] ), $sub_section );
			}
		} else {
			$content[] = format_content(retrieve_content(["key" => $section_key]), $section_key);
		}
	}
	$imploded_content = implode(" ", array_filter($content));
	return get_html_box_lesson_at_a_glance($imploded_content);
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
		"education-resources" => [ "key-stage", "time-period" ],
		"suggested-inquiry-questions",
		"potential-activities",
		"document-link"
	];
}

function retrieve_content ($section_keys) {
	global $post;
	if ($section_keys["key"] === "education-resources") {
		$content_array = [];
		foreach (get_the_terms( $post->ID, "education resource") as $education_resource_meta ) {
			if (slug_is_present_in_array($section_keys["sub-section"], $education_resource_meta)) {
				$content_array[] =	$education_resource_meta;
			}
		}
		return $content_array;
	} else if ($section_keys["key"] === "suggested-inquiry-questions" || $section_keys["key"] === "potential-activities" || $section_keys["key"] === "document-link") {
		return get_post_meta( $post->ID, $section_keys["key"], true );
	} else {
		return null;
	}
}

function format_content ($content, $section_key) {
	if ($content === null || !isset($content)) {
		return null;
	}

	$string = "<p><strong>%s: </strong>%s<p>";
	$section_label  = ucfirst(str_replace("-"," " , $section_key));

	switch ($section_key) {
		case "key-stage":
			$section_label  = "Suitable for";
		case "time-period":
			$content_array = array();
			foreach ($content as $item) {
				$content_array[] = "<a href='/education/sessions-and-resources/?" . $section_key . "=" . $item->slug ."'>" . $item->name . "</a>";
			}
			return sprintf($string, $section_label, implode(", " , $content_array));
			break;
		case "suggested-inquiry-questions":
		case "potential-activities":
			return sprintf($string, $section_label, $content);
			break;
		case "document-link":
			return sprintf($string, "Download", "<a href='" . $content ."'>Lesson pack</a>");
			break;
		default:
			return null;
			break;
	}
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
