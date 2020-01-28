<?php



/**
Template Name: Resource selector with forms
*/

if (is_page("Sessions we teach") or is_page("Classroom resources")){

	// 301 redirect for /sessions and /resources page

	header("HTTP/1.1 301 Moved Permanently");
  header( 'Location: /education/sessions-and-resources' ) ;
exit();
}

get_header(); ?>

<?php



$stralltimeperiods ='medieval,early-modern,empire-and-industry,victorians,early-20th-century,interwar,second-world-war,postwar';
$strallsessionsweteach = "workshop,video-conferences,virtual-classroom";
$strallclassroomresources = "focussed-topics,games,lesson,themed-collection";
$strsessions = "sessions-we-teach";
$strcustomposttype = "education resource";

class resourceFilter {
  private $initialFilterOptions;
  private $filterOptionsWithAllLink;
  private $queriesToPersist;
  private $preparedOptions = array();
  private $currentSelection = "Testing";

  public function appendAllKeysAsNewItem($array) {
    $stringOfKeys = "";
    foreach($array as $key => $value) {
      $stringOfKeys .= $key . ",";
    }
    if(substr($stringOfKeys, -1, 1) == ",") {
      $stringOfKeys = substr($stringOfKeys, 0, -1);
    }
    $array[$stringOfKeys] = "All";
    return $array;
  }

  public function setFilterOptions($array) {
    $this->initialFilterOptions = $array;
  }

  public function createFilterOptionsWithAllLink($array) {
    $this->filterOptionsWithAllLink = $this->appendAllKeysAsNewItem($array);
  }

  public function setQueriesToPersist($array) {
    $queryString = "?";
    foreach($array as $item) {
      $queryString .= (isset($_GET[$item])) ? $item . "=" . filter_input( INPUT_GET, $item, FILTER_SANITIZE_FULL_SPECIAL_CHARS ) : "";
      $queryString .= (substr($queryString, -1) != "&") ? "&" : "";
    }
    $this->queriesToPersist = $queryString;
  }

  public function setPreparedOptions($name) {
    foreach($this->filterOptionsWithAllLink as $key => $value) {
      $thisFilter = $name . "=" . $key;
      $fullQuery = $this->queriesToPersist . $thisFilter;

      if(empty($_GET[$name]) && $value == 'All') {
        $classes = ' selected';
        $this->setCurrentSelection("All");
      } elseif($_GET[$name] == $key) {
        $classes = ' selected';
        $this->setCurrentSelection( filter_input( INPUT_GET, $name, FILTER_SANITIZE_FULL_SPECIAL_CHARS ) );
      } else {
        $classes = '';
      }

      $currentPage = get_page_link(); // Uses WordPress to get the current link

      $k = array( 'linkText' => $value,
                  'classes' => $classes,
                  'linkToThisPage' => $currentPage,
                  'persistedQueries' => $this->queriesToPersist ,
                  'linkSpecificFullQuery' => $fullQuery);

      array_push($this->preparedOptions, $k);
    }
  }

  public function printPreparedOptions($array) {
    foreach($array as $key => $value) {
      printf('<li><a href="%s%s" class="button%s">%s</a></li>',
              $value['linkToThisPage'],
              $value['linkSpecificFullQuery'],
              $value['classes'],
              $value['linkText']);
    }
  }

  public function setCurrentSelection($string) {
    $this->currentSelection = $string;
  }

  public function getCurrentSelection() {
    return $this->currentSelection;
  }

  function __construct($arrayOfOptions, $queriesToPersist, $name) {
    $this->setFilterOptions($arrayOfOptions);
    $this->createFilterOptionsWithAllLink($arrayOfOptions);
    $this->setQueriesToPersist($queriesToPersist);
    $this->setPreparedOptions($name);
    $this->printPreparedOptions($this->preparedOptions);
  }



}



//Wordpress
$strtimeperiod = null;
if (isset($_GET["time-period"])) {
  $strtimeperiod = filter_input( INPUT_GET, "time-period", FILTER_SANITIZE_FULL_SPECIAL_CHARS ) ;
  if(strpos($strtimeperiod, ",")) {
    $timePeriodArray = explode(",", $strtimeperiod);
  } else {
    $timePeriodArray = array($strtimeperiod);
  }
  // echo '<h3>Time period selected</h3>';
  // print_r($timePeriodArray);
  // echo '<br/>';
}

$strkeystage = (isset($_GET['key-stage'])) ? filter_input( INPUT_GET, "key-stage", FILTER_SANITIZE_FULL_SPECIAL_CHARS ) : null;

if (isset($_GET["key-stage"]) && $_GET["key-stage"] != "") {
  if(strpos($strkeystage, ",")) {
    $keyStageArray = explode(",", $strkeystage);
  } else {
    $keyStageArray = array($strkeystage);
  }
  // echo '<h3>Key stage selected</h3>';
  // print_r($keyStageArray);
  // echo '<br/>';
}



$strresourcetype = (isset($_GET["resource-type"])) ? filter_input( INPUT_GET, "resource-type", FILTER_SANITIZE_FULL_SPECIAL_CHARS ) : null;

 if (isset($_GET["resource-type"]) && $_GET["resource-type"] != "") {
 if(strpos($strresourcetype, ",")) {
    $resourceTypeArray = explode(",", $strresourcetype);
  } else {
    $resourceTypeArray = array($strresourcetype);
  }
 		  //echo ($strresourcetype);
}





   if (isset($strtimeperiod)){

 if(strpos($strtimeperiod, ",")) {
			  $strresourcetitle ="All time periods";
		   }else{
		 $sterm = get_term_by('slug', ''.$strtimeperiod.'', 'education resource');
		 $strresourcetitle = $sterm->name;
		   }
   }elseif (isset($strresourcetype)){


	   if(strpos($strresourcetype, "games,")) {
			   $strresourcetitle = "Classroom resources";
		  }elseif(strpos($strresourcetype, "video-conferences,")) {
			   $strresourcetitle = "Sessions we teach";
		  }

		  else {

		 $sterm = get_term_by('slug', ''.$strresourcetype.'', 'education resource');


		  $strresourcetitle = $sterm->name;


		  if (strtolower($strresourcetitle) == "breadth study" ) {
			$strresourcetitle = "Breadth studies";
		 }

		 elseif (strtolower($strresourcetitle) == "depth study" ) {
			$strresourcetitle = "Depth studies";
		 }
		 		  elseif (strtolower($strresourcetitle) == "actor-led sessions" ) {
			$strresourcetitle = "Actor-led sessions";

			}
				  elseif (strtolower($strresourcetitle) == "themed-collection" ) {
			$strresourcetitle = "Themed collections";

			}
					  elseif (strtolower($strresourcetitle) == "games" ) {
			$strresourcetitle = "Games";

			}
						  elseif (strtolower($strresourcetitle) == "focussed topics" ) {
			$strresourcetitle = "Focussed topics";

			}

		 else{
			 $strresourcetitle = $strresourcetitle.'s';
		 }



		    if (isset($strkeystage)){

				if ($strkeystage == "ks1"){
				$strresourcetitle	 = "key stage 1";

				}elseif ($strkeystage == "ks2"){
				$strresourcetitle	 = "key stage 2";

				}
				elseif ($strkeystage == "ks3"){
				$strresourcetitle	 = "key stage 3";

				}
				elseif ($strkeystage == "ks4"){
				$strresourcetitle	 = "key stage 4";

				}
				elseif ($strkeystage == "ks5"){
				$strresourcetitle	 = "key stage 5";

				}elseif ($strkeystage == "ks1,ks2,ks3,ks4,ks5"){
				$strresourcetitle	 = "All key stages";

				}


			}


	}

		   }
		   else{
			  $strresourcetitle = get_the_title();
		   }



$tax_query = array('relation' => 'AND');
    if (isset($strtimeperiod))
    {
        $tax_query[] =  array(
                'taxonomy' => 'education resource',
                'field' => 'slug',
                'terms' => $timePeriodArray
            );


		   }


    if (isset($strkeystage))
    {
        $tax_query[] =  array(
                'taxonomy' => 'education resource',
                'field' => 'slug',
                'terms' => $keyStageArray
            );



    }
    if (isset($strresourcetype))
    {
        $tax_query[] =  array(
                'taxonomy' => 'education resource',
                'field' => 'slug',
                'terms' => $resourceTypeArray
            );


    }

	if (empty($strtimeperiod)  && empty($strkeystage) && empty($strresourcetype) ){

		$taxonomy = 'education resource';

    $taxonomy_terms = get_terms( $taxonomy, array(
        'hide_empty' => 0,
        'fields' => 'ids'
    ));

    $tax_query[] =  array(
            'taxonomy' => $taxonomy,
             'field' => 'id',
        'terms' => $taxonomy_terms
    );
	}


 $loop = new WP_Query(
    array(
        'post_type' => 'page',
        'posts_per_page' => '250',
        'tax_query' => $tax_query,
		    'orderby'=> 'title',
        'order' => 'ASC'
    )
  );

  $loopcount = $loop->found_posts;

  if ($loopcount == 0){
	  $strresourcetitle = "Education sessions and resources";
  }


?>

<div id="page_wrap" class="container" role="main">
<!-- Breadcrumbs -->
<?php include 'breadcrumb.php'; ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="row">
  <div class="col starts-at-full box clr">
            <div class="heading-holding-banner">

    <h1><span><span>

    <?php echo ($strresourcetitle);?></span></span></h1>
</div>

    <div class="breather two-thirds no-left-right-padding">
    <?php if(get_field('time_period_text') )
{
	while( has_sub_field('time_period_text') )
	{
    if ($strtimeperiod == "medieval"){

	$strintro = get_sub_field('medieval');
	}
	elseif ($strtimeperiod == "early-modern"){

	$strintro = get_sub_field('early_modern');
	}elseif ($strtimeperiod == "empire-and-industry"){

	$strintro = get_sub_field('empire_and_industry');
	}
	elseif ($strtimeperiod == "victorians"){

	$strintro = get_sub_field('victorians');
	}
	elseif ($strtimeperiod == "early-20th-century"){

	$strintro = get_sub_field('early_20th_century');
	}
	elseif ($strtimeperiod == "interwar"){

	$strintro = get_sub_field('interwar');
	}
	elseif ($strtimeperiod == "second-world-war"){

	$strintro = get_sub_field('second_world_war');
	}
	elseif ($strtimeperiod == "postwar"){

	$strintro = get_sub_field('postwar');
	}
		elseif ($strresourcetype == "games"){

	$strintro = get_sub_field('games');
	}
	elseif ($strresourcetype == "focussed-topics"){

	$strintro = get_sub_field('showcase');
	}
		elseif ($strresourcetype == "themed-collection"){

	$strintro = get_sub_field('themed_collections');
	}
	elseif ($strresourcetype == "video-conferences"){

	$strintro = get_sub_field('videoconferences');
	}
	elseif ($strresourcetype == "virtual-classroom"){

	$strintro = get_sub_field('virtual_classroom');
	}
	elseif ($strresourcetype == "workshop"){

	$strintro = get_sub_field('workshops');
	}
	elseif ($strresourcetype == "lesson"){

	$strintro = get_sub_field('lesson');
	}
	else{

	$strintro = get_sub_field('all_time_periods');
	}
	?>


      <?php echo ($strintro); ?>


    <?php



    }

    }
?>
 <?php the_content(); ?>
  </div>
  </div>
</div>

<!-- form based filters go here -->

<div class="row">
  <div class="starts-at-full">





<form id="resources-form" name="resources-form" method="get" action="#">

<div class="select-float preload">
    <h2>Filter by</h2>
<select name="time-period">
<option selected="selected" value="medieval,early-modern,empire-and-industry,victorians,early-20th-century,interwar,second-world-war,postwar" >All time periods</option>
<option value="medieval" <?php if ($strtimeperiod =="medieval") echo "selected";?>>Medieval 974-1485</option>
               <option value="early-modern" <?php if ($strtimeperiod =="early-modern") echo "selected";?>>Early modern 1485-1750</option>
               <option value="empire-and-industry" <?php if ($strtimeperiod =="empire-and-industry") echo "selected";?>>Empire and Industry 1750-1850</option>
                <option value="victorians" <?php if ($strtimeperiod =="victorians") echo "selected";?>>Victorians 1850-1901</option>
                <option value="early-20th-century" <?php if ($strtimeperiod =="early-20th-century") echo "selected";?>>Early 20th Century 1901-1918</option>
                <option value="interwar" <?php if ($strtimeperiod =="interwar") echo "selected";?>>Interwar 1918-1939</option>
                <option value="second-world-war" <?php if ($strtimeperiod =="second-world-war") echo "selected";?>>Second World War 1939-1945</option>
                <option value="postwar" <?php if ($strtimeperiod =="postwar") echo "selected";?>>Postwar 1945-present</option>

</select>



<select name="key-stage">
<option selected="selected" value="ks1,ks2,ks3,ks4,ks5">All key stages</option>
<option value="ks1" <?php if ($strkeystage =="ks1") echo "selected";?>>Key stage 1 &ndash; ages 5-7 </option>
               <option value="ks2" <?php if ($strkeystage =="ks2") echo "selected";?>>Key stage 2 &ndash; ages 7-11 </option>
               <option value="ks3" <?php if ($strkeystage =="ks3") echo "selected";?>>Key stage 3 &ndash; ages 11-14 </option>
                <option value="ks4" <?php if ($strkeystage =="ks4") echo "selected";?>>Key stage 4 &ndash; ages 14-16</option>
                <option value="ks5" <?php if ($strkeystage =="ks5") echo "selected";?>>Key stage 5 &ndash; ages 16-18</option>

</select>

<select name="resource-type">
<option selected="selected" value="workshop,video-conferences,virtual-classroom,actors,showcase,games,lesson,focussed-topics,themed-collection" >All resource types</option>
<optgroup label="Classroom resources">
   <option value="lesson" <?php if ($strresourcetype =="lesson") echo "selected";?>>Lessons</option>
   <option value="themed-collection" <?php if ($strresourcetype =="themed-collection") echo "selected";?>>Themed collections</option>
<option value="focussed-topics" <?php if ($strresourcetype =="focussed-topics") echo "selected";?>>Focussed topics</option>
 <option value="games" <?php if ($strresourcetype =="games") echo "selected";?>>Games</option>
                <option value="focussed-topics,games,lesson,themed-collection" <?php if ($strresourcetype =="focussed-topics,games,lesson,themed-collection") echo "selected";?>>All classroom resources</option>
                </optgroup>


                <optgroup label="Sessions we teach">
<option value="workshop"  <?php if ($strresourcetype =="workshop") echo "selected";?>>Workshops</option>
               <option value="video-conferences"  <?php if ($strresourcetype =="video-conferences") echo "selected";?>>Videoconferences</option>
               <option value="virtual-classroom" <?php if ($strresourcetype =="virtual-classroom") echo "selected";?>>Virtual classroom</option>
                <option value="workshop,video-conferences,virtual-classroom,actors" <?php if ($strresourcetype =="workshop,video-conferences,virtual-classroom,actors") echo "selected";?>>All sessions we teach</option>
                </optgroup>

</select>

<noscript>
<input type="submit" value="Apply filter">
</noscript>
<?php if ($strresourcetype != "" or $strtimeperiod !="" or $strkeystage !=""){?>
 <a href="<?php the_permalink();?>" title="Remove all filters" class="close" id="remove-all-filters">Remove all filters</a>
 <?php }?>
 </div>
</form>

  </div>
</div>
<!-- form based filters go here -->



<div class="row">

  <div class="col starts-at-full ends-at-full box clr">
    <div class="heading-holding-banner">
    <h2 class="margin-top-10"><span><span>
    <?php
	if ($strtimeperiod == "medieval,early-modern,empire-and-industry,victorians,early-20th-century,interwar,second-world-war,postwar"){
		$strshowtimeperiod = " time period ";
	}else{
	$strshowtimeperiod = str_replace("-"," ",$strtimeperiod);
	$strshowtimeperiod = ucwords($strshowtimeperiod);
	$strshowtimeperiod = " ".$strshowtimeperiod." ";
	}
    if (isset($strkeystage)){

    if(strpos($strkeystage, ",")) {
			   $strsub = "All key stage resources";
		  }else {

		 $ssubterm = get_term_by('slug', ''.$strkeystage.'', 'education resource');
		 $strsub = 'All '.strtolower($ssubterm->name).' resources';

	}



	}

	if (isset($strresourcetype)){



if($strresourcetype == "focussed-topics,games,lesson,themed-collection") {
			   $strsub = "All".$strshowtimeperiod."classroom resources";
		  }elseif($strresourcetype == "workshop,video-conferences,virtual-classroom,actors") {
			   $strsub = "All".$strshowtimeperiod."sessions we teach";
		  }
		  elseif($strresourcetype == "workshop,video-conferences,virtual-classroom,actors,showcase,games,lesson" or $strresourcetype == "" ) {
			   $strsub = "All".$strshowtimeperiod."resources";
		  }

		  else {

		 $ssubterm = get_term_by('slug', ''.$strresourcetype.'', 'education resource');

		 $strsub = (is_object($ssubterm)) ? $ssubterm->name : null;

		 if (strtolower($strsub) == "games" ) {
			$strsub = "All".$strshowtimeperiod."games";
		 }
		 	elseif (strtolower($strsub) == "workshop" ) {
			$strsub = "All".$strshowtimeperiod."workshops";
		 } 	elseif (strtolower($strsub) == "lesson" ) {
			$strsub = "All".$strshowtimeperiod."lessons";
		 }
		 elseif (strtolower($strsub) == "focussed topics" ) {
			$strsub = "All".$strshowtimeperiod."focussed topics";
		 }
		  elseif (strtolower($strsub) == "videoconference" ) {
			$strsub = "All".$strshowtimeperiod."videoconferences";
		 }
		elseif (strtolower($strsub) == "actor-led sessions" ) {
			$strsub = "All".$strshowtimeperiod."actor-led sessions";
		 }
		 elseif (strtolower($strsub) == "virtual classroom" ) {
			$strsub = "All".$strshowtimeperiod."virtual classrooms";
		 }
		 elseif (strtolower($strsub) == "themed collection" ) {
			$strsub = "All".$strshowtimeperiod."themed collections";
		 }
		 else{
			 $strsub = "All".$strshowtimeperiod.$strsub;
		 }



	}




	}

if (!isset($strsub)){
$strsub = "All resources";
}

  if ($loopcount == 0){
	  $strsub = "No resources found";
  }


// if (isset($strtimeperiod)){

	//  if($strresourcetitle =="All time periods"){
	//	$strsub = 'All time period resources';
	  //}else{
//$strsub = 'All '. $strresourcetitle .' resources';
//}
//}

				$strkeystagetitle = '';
				if ($strkeystage == "ks1"){
				$strkeystagetitle	 = "in key stage 1";

				}elseif ($strkeystage == "ks2"){
				$strkeystagetitle	 = "in key stage 2";

				}
				elseif ($strkeystage == "ks3"){
				$strkeystagetitle	 = "in key stage 3";

				}
				elseif ($strkeystage == "ks4"){
				$strkeystagetitle	 = "in key stage 4";

				}
				elseif ($strkeystage == "ks5"){
				$strkeystagetitle	 = "in key stage 5";



				}

if(strpos($strsub, "key")) {
	echo ($strsub );

}else{
		echo ($strsub );
				echo ("&nbsp;");
	echo ($strkeystagetitle);


}
	?>
    </span></span></h2>
  </div>
    <div class="breather no-left-right-padding">
          <?php


		  if ($loopcount == 0){
	echo ("Try selecting a menu option to find what you're looking for or <a href='/education/sessions-and-resources/' title='View all Education sessions and resouces'>view all our resources</a>.");



}else{
echo "Showing ".$loopcount ." resource";
if ($loopcount > 1){ echo("s"); };
echo('<div class="pad-bottom-medium"></div>');
} ?>
      <div id="index" class="pictorial-list grid-within-grid-three-item resource-results">


      <?php

	  while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php
          $image_id = get_post_thumbnail_id();
          $image_url = make_relative_path_from_url(wp_get_attachment_image_src($image_id,'thumbnail', false));
		  $terms = wp_get_post_terms( $post->ID, 'education resource' );
		  $termstitle = wp_get_post_terms( $post->ID, 'education resource' );


		  $resourcequestion = "";

          if (get_field('subheading')){

		  $resourcequestion = get_field('subheading');
          }

        ?>
        <div class="resource-block">

          <a href="<?php the_permalink()?>" title="<?php the_title();?> - <?php echo ($resourcequestion);?>"><div class="has-background" <?php printf('style="background-image: url(%s)">', $image_url[0]); ?>
     <?php foreach($termstitle as $termt) {if (strtolower($termt->slug) == "classroom-resource"){echo("<div class='type-label bg-peach'><span>Classroom resource</span></div>");}if (strtolower($termt->slug) == "sessions-we-teach"){echo("<div class='type-label bg-mint'><span>Session we teach</span></div>");}}

      ?>

 </div>

       <h3 class="pad-none pad-bottom-small"><?php the_title();?></h3>    </a>

              <div class="pad-bottom-medium"><?php echo ($resourcequestion);?></div>


	<span class="entry-meta float-left pad-bottom-large">Tags:
       <?php

			       $i = 0;
              foreach($terms as $term) {
					 $stredtag = $term->slug;


					 if ($stredtag != "sessions-we-teach" and $stredtag != "classroom-resource"){
					 $stredtag = str_replace("-"," ",$stredtag);


					   if ($term->slug =='medieval' or $term->slug =='early-modern' or $term->slug =='empire-and-industry' or $term->slug == 'victorians' or $term->slug =='early-20th-century' or $term->slug=='interwar' or $term->slug == 'second-world-war' or $term->slug =='postwar')
					   {
						 $stredurl = "<span class=tag><a href=?time-period=". $term->slug.">". $term->slug."</a></span>";

					   }elseif ($term->slug =='ks1' or $term->slug =='ks2' or $term->slug =='ks3' or $term->slug =='ks4' or $term->slug =='ks5'){
						    $stredurl = "<span class=tag><a href=?key-stage=". $term->slug.">". $stredtag."</a></span>";
							 }
							 elseif ($term->slug =='focussed-topics' or $term->slug =='themed-collection' or $term->slug =='lesson' or $term->slug =='workshop' or $term->slug =='virtual-classroom' ){

								 if ($term->slug =='focussed-topics'){
									  $stredurl = "<span class=tag><a href=?resource-type=". $term->slug.">". $stredtag."</a></span>";
								 }else{
						    $stredurl = "<span class=tag><a href=?resource-type=". $term->slug.">". $stredtag."s</a></span>";
								 }
							 }
							 elseif ($term->slug =='games'){
								  $stredurl = "<span class=tag><a href=?resource-type=". $term->slug.">games</a></span>";
							 }
							elseif ($term->slug =='video-conferences'){
								$stredurl = "<span class=tag><a href=?resource-type=".$term->slug.">videoconferences</a></span>";
					   }elseif ($term->slug =='actors'){
						   $stredurl = "<span class=tag><a href=?resource-type=".$term->slug.">actor-led sessions</a></span>";
					   }

			 $i = $i -1;
       if ($i < (-1)) {
       printf(', %s', $stredurl); }
       else{
     printf('%s', $stredurl);
   }

    }
                }
               ?>

</span>
        </div>

      <?php endwhile;


	  wp_reset_query(); ?>
    <div class="clear-both">  </div>

      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>

</div>
</div>

<?php get_footer(); ?>
