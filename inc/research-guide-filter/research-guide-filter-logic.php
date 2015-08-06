<?php 

/**
 * 	Determines if there is a current value for "research-category" in $_GET and, if so, returns it. Otherwise returns false.
 *	
 *	@return 	string 	$currentCategory 	The current category
 *	@return 	bool 						False is returned if no value is found for "research-category" in $_GET
*/

function getCurrentCategory() {
	
	$currentCategory = (isset($_GET["research-category"])) ? $_GET["research-category"] : false;

	if($currentCategory) {

		return $currentCategory;

	} else {

		return false;

	}
}

/**
 * 	Outputs checkbox and label pairs (linked by 'id' and 'for') for each item in the passed array. Uses isThisSubCategorySelected()
 *	function to apply a 'checked="checked"' attribute
 *	
 *	@param 		array 	$scArray 	A sub-category array
 *
*/

function generateSubCategories($scArray = false) {

	$checkboxFormat = "<input type='checkbox' name='sub-category[]' class='rescheck' value='%s' id='%s'%s>";

	$labelFormat = "<label for='%s'>%s</label>";

	$liFormat =  "<li><span>%s%s</span></li>";

	if(is_array($scArray) and sizeof($scArray) > 0) {

		foreach ($scArray as $key => $value) {

			$checkbox = sprintf($checkboxFormat, $key, $key, isThisSubCategorySelected($key));

			$label = sprintf($labelFormat, $key, $value);

			printf($liFormat, $checkbox, $label);

		}
	}
}


/**
 * 	Determines if the passed value matches appears in the array of subcategories obtained from $_GET
 *	
 *	@param 		string 	$category 	The name of a category 
 *	@return 	string 				A 'checked="checked"' attribute or an empty string
 *
*/

function isThisSubCategorySelected($category) {
	
	$subCategoriesInGetArray = (isset($_GET["sub-category"])) ? $_GET["sub-category"] : array();

	if(in_array($category, $subCategoriesInGetArray)) {

		return " checked='checked'";

	} else {

		return "";

	}

}


/**
 * 	Determines if the passed value matches the current letter obtained from $_GET
 *	
 *	@param 		string 	$letter 	The letter
 *	@return 	string 				'class="selected"' or an empty string
 *
*/

function isCurrentLetterSelected($letter) {

	$currentLetter = (isset($_GET['letter']) ? $_GET['letter'] : false);

	if($currentLetter && ($currentLetter == $letter)) {

		return " class='selected'"; 

	} else {

		return "";

	}
}

/**
 * 	Outputs A-Z with available letters shown as links, unavailable letters as spans
 *	
 *	@param 		array 	$unavailableLetters 	Array of unavailable letters
 *
*/

function aToZ($unavailableLetters, $filtertype) {

	$liFormat_available = "<li><a href='?letter=%s&filter=%s'%s>%s</a></li>";

	$liFormat_not_available = "<li><span class='disabled'>%s</span></li>";

	$domElements = array();

	foreach (range('a', 'z') as $index) {

		if(in_array($index, $unavailableLetters)) {

			$li = sprintf($liFormat_not_available, strtoupper($index));

		} else {

			$li = sprintf($liFormat_available, $index, $filtertype, isCurrentLetterSelected($index), strtoupper($index));

		}

		$domElements[] = $li;
		
	}

	$ul = sprintf("<ul id='menu-disc' class='margin-top-medium pad-bottom-small'>%s</ul>", implode($domElements));

	echo($ul);

}

/**
 * 	Generates an HTML select element with options corresponding to the array passed.
 *	
 *	
 *	Expects the structure found in $categories array
 *
 * 
 *	@param 		array 	$categories 	Array of unavailable letters
 *
*/

function generateSelect($categoriesArray) {

	$optionFormat = "<option value='%s'%s>%s</option>"; 

	$domOptions = array(); 

	$domOptions[] = "<option value='0'>All research guides (A-Z)</option>";

	foreach ($categoriesArray as $key => $value) {

		$option = sprintf($optionFormat, $key, isThisCategorySelected($key), $value['text']);

		$domOptions[] = $option;

	}

	$select = sprintf("<select name='research-category' id='research-category' class='margin-right-medium'>%s</select>", implode($domOptions));

	echo($select);
}





/**
 * 	Determines if the passed value matches as the sub-category obtained from $_GET
 *	
 *	@param 		string 	$category 	The name of a category 
 *	@return 	string 				A 'checked="checked"' attribute or an empty string
 *
*/

function isThisCategorySelected($category) {

	$currentCategory = (isset($_GET["research-category"])) ? $_GET["research-category"] : "";

	if($category == $currentCategory) {

		return " selected='selected'";

	} else {

		return "";

	}

}

/**
 * 	Outputs either the A-Z or relevant subcategories based on the current category.
 *
 *	Defaults to 'family-history' subcategory if the value found by getCurrentCategory() 
 *	does not exist as a key in $categories
 *	
 *
 *	@param 		array 	$categories 			The array of categories (as provided by research-guide-filter-data.php)
  *	@param 		array 	$unavailableLetters 	The array of unavailableLetters (as provided by research-guide-filter-data.php)
*/

function generateAToZOrSubcategories($categories, $filtertype, $unavailableLetters) {

	$defaultCategory = 'family-history'; 

	if(getCurrentCategory()) {

		if(array_key_exists(getCurrentCategory(), $categories)) {

			generateSubCategories($categories[getCurrentCategory()]['subcategories']);	

		} else {

			generateSubCategories($categories[$defaultCategory]['subcategories']);	

		}

	} else {

		aToZ($unavailableLetters, $filtertype);

	}
}

/**
 * 	Will either:
 *			a) output an HTML block for a specific category - including a specific class name.
 *			b) Return false, if the current category (established via getCurrentCategory()) does not exist as a key in $categoryBanners 
 *
 *	@param 		array 	$categoryBanners (as provided by reseearch-guide-filter-data.php)
 *
*/

function categoryBanner($categoryBanners) {

	$htmlFormat = "<div class='width-two-thirds'><p class='text-small pad-horizontal-large margin-top-medium'>%s</p></div><div class='width-one-third float-right banner-category %s'></div>";

	if(array_key_exists(getCurrentCategory(), $categoryBanners)) {
		
		$cssClass = $categoryBanners[getCurrentCategory()]['htmlClass'];

		$text = $categoryBanners[getCurrentCategory()]['message'];

		$outputHtml = sprintf($htmlFormat, $text, $cssClass);

		echo($outputHtml);

	}

}

/**
 * 	Will either:
 *			a) output an HTML string tags.
 *			b) Return false if the argument was either a) not an array, or b) is an array but length == 0
 *
 *	@param 		array 	$arrayOfTerms	Array of strings which contain tag text. 
 *
*/

function generateTags($arrayOfTerms, $reskeyword) {


	if(is_array($arrayOfTerms) and (count($arrayOfTerms) > 0)) {

		foreach ($arrayOfTerms as $term) {

			$strtag = strtolower($term->name);
			$strslug = $term->slug;
			$strfirstletter = substr($term->slug,0,1);

			if ($strslug == $reskeyword){
				$tags[] = sprintf("<span class='tag hue-50-yellow'><a href='/help-with-your-research/research-guides-keywords/?show=keywords&keyword-letter=%s&keyword=%s#guidance' title='Show all research guides tagged %s'>%s</a></span>", $strfirstletter, $strslug, $strtag, $strtag);

			} else {

				$tags[] = sprintf("<span class='tag'><a href='/help-with-your-research/research-guides-keywords/?show=keywords&keyword-letter=%s&keyword=%s#guidance' title='Show all research guides tagged %s'>%s</a></span>", $strfirstletter, $strslug, $strtag,  $strtag);
			}
		}

		return implode($tags);

	} else {

		return false; 
		
	}

}


/**
 *	Outputs  filtering results on the research guide filter page
 *
 *	@param 		string 	$permalink 		The permalink (as obtained by get_the_permalink())
 *	@param 		string 	$title 			The title (as obtained by get_the_title())
 *	@param 		string 	$tagsHtml 	 	The html for individual tags (as obtained by generateTags())
 *	@param 		string 	$viewableOnline	HTML element or empty string denoting if the current item is viewable online
 *	@param 		string 	$featuredImage	HTML element or empty string denoting the src of the featured image (if exists)
 *	@param 		string 	$rescat	HTML The current category to determine if to display the featured image
 *
*/

function generateResourceResults($permalink, $title, $tagsHtml, $viewableOnline, $featuredImage, $rescat) {

	if ($featuredImage && $rescat == "online")
	{

	$resultFormat = "<li><a href='%s'><div style='background:url(%s);' class='thumb-container'></div></a><div class='guide-container'><a href='%s'>%s</a><br><span class='text-smallest '>Keywords: </span> %s %s</div></li>";

		printf( $resultFormat, $permalink,$featuredImage, $permalink,  $title, $tagsHtml, $viewableOnline);

	} else {


        if (in_category('find-my-past') or in_category('ancestry')){

            $available_on = "<div class='provider-label text-smallest'>";

          $available_on = $available_on."Available on:<br>";

            if (in_category('find-my-past') ){

                $available_on = $available_on. "<div class='find-my-past' title='This guide is available on findmypast.co.uk'></div>";

            }

            if (in_category('ancestry') ){

                $available_on = $available_on. "<div class='ancestry' title='This guide is available on ancestry.co.uk'></div>";

            }
            $available_on = $available_on."</div>";

        }else{

            $available_on = "";
        }

		$resultFormat = "<li>%s<a href='%s'>%s</a><br><span class='text-smallest '>Keywords: </span> %s %s</li>";

		printf($resultFormat, $available_on, $permalink, $title, $tagsHtml, $viewableOnline);

	}

}

/**
 *	Outputs search results on the research guide filter page
 *
 *	@param 		string 	$permalink 		The permalink (as obtained by get_the_permalink())
 *	@param 		string 	$title 			The title (as obtained by get_the_title())
 *	@param 		string 	$tagsHtml 	 	The html for individual tags (as obtained by generateTags())
 *	@param 		string 	$viewableOnline	HTML element or empty string denoting if the current item is viewable online
 *	@param 		string 	$ressearch      Search term input by user
 *  @param 		string 	$viewableOnline	HTML element or empty string denoting if the current item is viewable online
 *
*/

function generateSearchResults($permalink, $title, $thecontent, $tagsHtml, $viewableOnline, $ressearch) {

	if ($ressearch){

		$thecontent = strip_tags($thecontent);

		$thecontent = strip_shortcodes($thecontent);

		$thecontent = getSearchContext($thecontent, $ressearch);

		//$title = preg_replace("/".preg_quote($ressearch, "/")."/i", "<b>$0</b>", $title);

        if (in_category('find-my-past') or in_category('ancestry')){

            $available_on = "<div class='provider-label text-smallest'>";

            $available_on = $available_on."Available on:<br>";

            if (in_category('find-my-past') ){

                $available_on = $available_on. "<div class='find-my-past' title='This guide is available on findmypast.co.uk'></div>";

            }

            if (in_category('ancestry') ){

                $available_on = $available_on. "<div class='ancestry' title='This guide is available on ancestry.co.uk'></div>";

            }
            $available_on = $available_on."</div>";

        }else{

            $available_on = "";
        }



        $resultFormat = "<li>%s<a href='%s'>%s</a><br><div>%s</div><span class='text-smallest '>Keywords: </span>%s %s</li>";

		printf($resultFormat, $available_on, $permalink, $title, $thecontent, $tagsHtml, $viewableOnline);

	}

}




/**
 *	Outputs the string indicating how many results there are. This is plural when there is more than one result, and singular otherwise. 
 *
 *	@param 		string 	$numberOfResults		
 *
*/

function outputResultCount($numberOfResults) {

	$messageFormat = ($numberOfResults > 1) ? '%s guides available' : '%s guide available';

	$message = sprintf($messageFormat, $numberOfResults);

	echo $message;

}


function getSearchContext($str, $query) {

	$query = stripslashes($query);

	$query = str_replace('"', " ", $query);

	$append='&hellip;';

	$prepend='&hellip;';

//preg_match_all("/((\w+ ){1,20})($query)(( \w+){1,20})/i", $str, $result, PREG_SET_ORDER);

preg_match_all("/((\w+ ){0,10})(?:[A-Z][^\.!?,']*[\.!?]\s|$)*\b($query)\b.*?(?:[A-Z][^\.!?,']*[\.!?]\s|$)(( \w+){0,10})/i", $str, $result, PREG_SET_ORDER);

	foreach ($result[0] as $res) {
		return $prepend.preg_replace("/".preg_quote($query, "/")."/i", "<b>$0</b>", $res).$append;
		break;
	}

}