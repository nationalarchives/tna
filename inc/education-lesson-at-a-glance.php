<?php

function display_education_lesson_at_a_glance () {
	global $post;
	$content = array();

	#education resource meta: key stage and time period
	$key_stage = array();
	$time_period = array();

	$education_resources = retrieve_content("education-resources");
	$content[] = format_content($education_resources["KS"], "key-stage");
	$content[] = format_content($education_resources["TP"], "time-period");

	#suggested inquiry questions
	$suggested_inquiry_questions = retrieve_content("suggested-inquiry-questions") ;
	$content[] = format_content($suggested_inquiry_questions, "suggested-inquiry-questions");


	#potential activities
	$potential_activities = retrieve_content("potential-activities");
	$content[] = format_content($potential_activities, "potential-activities");

	#download link
	$download_link = retrieve_content("document-link");
	$content[] = format_content($download_link, "document-link");

	$html = "<div class='position-relative separator lesson-at-a-glance'>
                    <div class='heading-holding-banner'>
                        <h2> <span> <span> Lesson at a glance </span> </span> </h2>
                    </div>
                    <div class='breather'>
                        <div class='pictorial-list grid-within-grid-one-item'>
                            %s
                        </div>
                    </div>
                </div>";

	echo sprintf($html, implode(" <br>", array_filter($content)));
}

function retrieve_content ($section_key) {
	global $post;
	switch ($section_key) {
		case "education-resources":
			$education_resource_meta = get_the_terms($post->ID, "education resource");
			$KS = [];
			$TP = [];
			foreach ( $education_resource_meta as $education_resource){
				if (sort_education_resource($education_resource) == "KS") {
					$KS[]  = $education_resource;
				} elseif (sort_education_resource($education_resource) == "TP") {
					$TP[] = $education_resource;
				}
			}
			return ["KS" => $KS, "TP" => $TP];
			break;
		case "suggested-inquiry-questions":
		case "potential-activities":
		case "document-link":
			return get_post_meta($post->ID, $section_key, true);
			break;
		default:
			return null;
			break;
	}
	}

function format_content ($content, $section_key) {
	if ($content == null || !isset($content)) {
		return null;
	}

	$string = "<p><strong>%s: </strong>%s<p>";
	$section_label  = ucfirst(str_replace($section_key, "-", " "));

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


function sort_education_resource ($meta) {
	$key_stage_strings = array ("ks1", "ks2", "ks3", "ks4", "ks5");
	$time_period_strings = array ("early-20th-century", "early-modern", "empire-and-industry", "interwar", "medieval", "postwar", "second-world-war", "victorians");

	if (in_array($meta->slug, $key_stage_strings)) {
		return "KS";
	} else if (in_array($meta->slug, $time_period_strings)) {
		return "TP";
	} else {
		return null;
	}
}
