<?php
class EducationResourceFilterMeta {
	public $education_resource_filtered_meta = array ("time-period" => array(), "key-stage" => array(), "uncategorised" => array());
	public $education_resource_unfiltered_meta;
	private $key_stage_strings = array ("ks1", "ks2", "ks3", "ks4", "ks5");
	private $time_period_strings = array ("early-20th-century", "early-modern", "empire-and-industry", "interwar", "medieval", "postwar", "second-world-war", "victorians");

	function set_education_resource_unfiltered_meta ($post) {
	    //Sets all the retrieved metadata under the taxonomy 'education resource'
	    $this->education_resource_unfiltered_meta = get_the_terms($post->ID, "education resource");
	}

	function set_education_resource_filtered_meta ($value) {
	    //pushes the filtered meta (with parent categories) into a new array, as a property of the object
		array_push($this->education_resource_filtered_meta[$value["category"]] , $value["meta"]);
	}

    function filter_education_resource_meta ($current_unfiltered_meta) {
	    //Takes whatever is the currently selected unfiltered piece of 'education resource' meta
	    $slug = $current_unfiltered_meta->slug;
	    //Then assesses whether it is present in an array of 'time periods', 'key stages' or 'uncategorised'
	    switch ($slug) {
            case in_array($slug, $this->time_period_strings):
                $value = array('category' => 'time-period',
                               "meta" => $current_unfiltered_meta);
                break;
		    case in_array($slug, $this->key_stage_strings):
			    $value = array('category' => 'key-stage',
                               "meta" => $current_unfiltered_meta);
		        break;
            default:
	            $value = array('category' => 'uncategorised',
                               "meta" => $current_unfiltered_meta);
        }
        //This then filters the currently held meta into an array, where the parent category can be easily seen and attached
        $this->set_education_resource_filtered_meta($value);
    }
	/**
	 * @return array
	 */
	public function get_data($value) {
		return $this->education_resource_filtered_meta[$value];
	}
}

class LessonAtAGlance extends EducationResourceFilterMeta {

    //the sections to the 'Lesson at a Glance' box -> would hopefully be dynamically created in the future

	public $sections = array (
		"key-stage" => "Suitable for",
		"time-period" => "Time period",
		"suggested-learning-objective" => "Suggested learning objective",
		"potential-activities" => "Potential activities",
		"document-link" => "Download");

	function transform_to_link ($value, $section_key) {
	    return ($section_key == "document-link") ?
	        //if it is for the download section, follow this template:
		     "<a href='" . $value ."'>Lesson pack</a>":
	        //if it is a link for any other section, follow this template:
	        "<a href='/education/sessions-and-resources/?" . $section_key . "=" . $value->slug ."'>" . $value->name . "</a>";
	}

	function get_education_filter_tags ($post) {
	    //this loads the above education resource/filter tags for the necessary post
		$this->set_education_resource_unfiltered_meta($post);
		foreach ($this->education_resource_unfiltered_meta as $current_unfiltered_meta) {
		    //then filters the meta
			$this->filter_education_resource_meta($current_unfiltered_meta);
		}
	}

	private function section_is_non_education_resource ($section_key, $post_ID) {
		if ($section_key == "document-link") {
		    //if it is a download link, display it with a special link
			return $this->transform_to_link(get_post_meta($post_ID, $section_key, true), $section_key);
		} else {
			// or return the associated meta for the post
			return get_post_meta($post_ID, $section_key, true);
		}
    }

	/**
	 * @param $section_key
	 *
	 * @return null|string
	 */
	private function section_is_education_resource ($section_key) {
	    if ($section_key == "key-stage" || $section_key == "time-period") {
		    $section_data_array = array();
			foreach($this->get_data($section_key) as $section_data) {
				//for each key stage type, format it into a link
				$section_data_array[] = $this->transform_to_link($section_data, $section_key);
			};
		    //make sure there are no null elements to display, and return the remaining elements
		    return (array_filter($section_data_array) != null)?
			    implode(", ", $section_data_array) : null;
	    } else {
	    	return null;
	    }
    }


	/**
	 * @param $post_ID
	 * @param $section_key
	 *
	 * @return mixed|null|string
	 */
	function get_section_text ($post_ID, $section_key) {
	    $current_meta = get_post_meta($post_ID, $section_key);
        return ($current_meta != null) ?
            //if the current meta type is valid/exists on the post (is not education resource meta), then do this:
            $this->section_is_non_education_resource($section_key, $post_ID)
            :
            //OR, if the current meta is 'education resource' meta then do this:
            $this->section_is_education_resource($section_key);
    }

	function load_section_html ($label, $contents) {
		$label_string = "<p><strong>%s:</strong> %s</p>";
		return ($contents != null) ?
		sprintf($label_string, $label, $contents) : null;
	}

	function load_sections () {
		global $post;
		$sections_array = array();
		foreach ($this->sections as $section_key => $section_label) {
		    //for each potential section, get the text for that section
			$section_contents = $this->get_section_text($post->ID, $section_key);

			//and then load it into the label template if it is present
			$sections_array[] = $this->load_section_html($section_label, $section_contents);
		}
		//return a stringified version of the retrieved contents
        return implode("", array_filter($sections_array));
	}



    function load_html_box () {
	    return "<div class='position-relative separator lesson-at-a-glance'>
                    <div class='heading-holding-banner'>
                        <h2> <span> <span> Lesson at a glance </span> </span> </h2>
                    </div>
                    <div class='breather'>
                        <div class='pictorial-list grid-within-grid-one-item'>
                            %s
                        </div>
                    </div>
                </div>";
    }

    public function display () {
		$sections = sprintf($this->load_html_box(), $this->load_sections());
	    echo $sections;
    }

	public function __construct() {
		global $post;
		$this->get_education_filter_tags($post);
	}
}