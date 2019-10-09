<?php
/*
Template Name: Research guide filter LH
*/

get_header();
require_once('inc/research-guide-filter/research-guide-filter-data.php');
require_once('inc/research-guide-filter/research-guide-filter-queries.php');
require_once('inc/research-guide-filter/research-guide-filter-logic.php');

?>

<div id="page_wrap" class="container research-guide-filter-left" role="main">
    <?php 
  include 'breadcrumb.php'; 
  ?>



    <!-- INTRODUCTORY CONTENT -->
    <div class="row">
        <div class="col starts-at-full box clr">


            <?php require_once('inc/research-guide-filter/research-guide-filter-utilities.php'); ?>

            <form id="guide-form" role="search" name="guide-form" method="get" action="">
                <?php 
          if (!$rescat){
          ?>
                <input type="hidden" value="<?php echo($resletter);?>" name="letter" id="letter">
                <input type="hidden" value="<?php echo($resfilter);?>" name="filter" id="rfilter">
                <input type="hidden" value="<?php echo($ressearch);?>" name="search" id="rsearch">
                <input type="hidden" value="<?php echo($reskeyword);?>" name="keyword" id="rkeyword">

                <?php }

          ?>
                <!-- PAGE HEADING and INTRODUCTION -->
                <h2 class="text-175pc pad-horizontal-large margin-top-large">

                    <?php

$restitle = '';
if ($rescat == "0" && !$ressearch && !$reskeyword){
        $restitle = "All research guides";


}
 




echo ($restitle);
 


     if ($rescat) {
              $restitle = "";
              $restitle = $rescat;

              if ($restitle == "first-world-war") {
                  $restitle = "First World War";
              }
              if ($restitle == "second-world-war-research") {
                  $restitle = "Second World War";
              }

                if ($restitle == "medieval-early-modern-history") {
                  $restitle = "Medieval and early modern history";
              }
              
              $restitle = str_replace("-"," ",$restitle);
              $restitle = str_replace("-"," ",$restitle);
              $restitle = ucfirst($restitle);
              echo ($restitle);
              
              if ($rescat == "online") { 
              echo(" collections");
              }

          }
          
          if ($ressearch !="") { 
              echo ("Search results");
          }

          if ($reskeyword !="") { 
              echo ("Keyword results");
          }
     ?></h2>

                <?php if ($rescat == "0" && !$ressearch && !$reskeyword &&  !is_page_template('research-guide-keywords.php')){
        // $restitle = "All research guides";
?>
                <div class="two-thirds pad-horizontal-large margin-none margin-bottom-large">
                    <p>
                        Our research guides can help you uncover the history of a place, a person or explore a
                        particular historical subject. Each guide tells you where you can find, access and understand
                        the relevant records.
                    </p>


                </div>
                <?php 
}
?>

                <?php 
      categoryBanner($categoryBanners); 
      ?>

        </div><!-- end col -->
    </div><!-- end row -->

    <div class="row">






        <!-- START LOCAL FILTERS -->



        <?php
if ($rescat != "0") {?>


        <div class="col starts-at-full ends-at-one-third bg-light-grey clr">
            <div class="category-filter">
                <div class="breather pad-top-medium">
                    <label for="research-category">
                        <?php if ($rescat == "records-for-current-legal-purposes"){
                  echo("Results for");

          }else{

            echo("Refine results for");

          }?>
                    </label>
                    <?php generateSelect($categories); ?>

                </div><!-- end breather -->
                <div id="mobile-only">
                    <div class="pad-small">
                        <p>Show all filters</p>
                    </div><!-- end pad-small -->
                </div><!-- end mobile-only -->
            </div><!-- end category-filter -->
            <?php if ($rescat != "records-for-current-legal-purposes"){ ?>
            <div id="toggle-container" class="hue-grey-light pad-bottom-large">

                <div class="category-filter-footer"></div>

                <?php
                    if ($rescat != "0") {
           
                    ?><div class="pad-horizontal-large">
                    <div id="research-guidance-subcategories">
                        <div class="filter-container clr">
                            <a href="<?php the_permalink(); ?>?research-category=<?php echo($rescat); ?>"
                                title="Clear all" class="filter-button-secondary float-left">Clear all</a>
                            <input type="submit" class="float-right filter-button-primary js-show-spinner"
                                value="Apply">


                            <ul class="form-selectable float-left">
                                <?php generateAToZOrSubCategories($categories, $resfilter); ?>

                            </ul>




                            <a href="<?php the_permalink(); ?>?research-category=<?php echo($rescat); ?>"
                                title="Clear all" class="filter-button-secondary float-left">Clear all</a>
                            <input type="submit" class="float-right filter-button-primary js-show-spinner "
                                value="Apply">


                        </div><!-- end filter-container -->
                    </div><!-- end research-guidance-subcategories -->
                </div><!-- end breather --> <?php }
                     ?>
            </div>
            <?php }?>

            <!-- end toggle container -->
        </div><!-- end col -->
        <?php 
                    } ?>

        <!-- END LOCAL FILTERS -->


        <!-- START RESULTS -->
        <?php if ($rescat != "0") {?>
        <div id="reload-marker" class="col starts-at-full ends-at-two-thirds box margin-none clr">

            <?php }else{ ?>
            <div id="reload-marker" class="col starts-at-full ends-at-full box margin-none clr">
                <?php }?>
                <div class="heading-holding-banner">
                    <h2><span><span> <?php outputResultCount($loopcount); ?>

                                <?php

   if ($ressearch) { 
              echo (" for '".stripslashes($ressearch)."'");



          }

          if ($reskeyword) { 
              echo (" for '".str_replace("-", " ", $reskeyword)."'");
          }
?>

                            </span></span></h2>
                </div><!-- end heading-holding-banner -->
                <div class="breather">

                    <h3 class="margin-none float-left width-full-to-auto">How to look for records of...</h3>

                    <span class="text-smallest float-left-to-right margin-bottom-medium margin-top-medium">

                        <?php if ($rescat != "online"){?>

                        <input type="checkbox" name="res-online" id="online-only" value="1" <?php if ($resonline == "online") {
                                    echo 'checked="checked"';
                                    } ?>>


                        <label for="online-only">Show only guides with all records online</label>

                        <?php } ?>
                    </span>
                    <div class="resource-results clr">



                        <!-- results go here -->

                        <ul>
                            <!-- build the loop -->

                            <!-- recommended titles -->
                            <?php 
$do_not_duplicate = array();
if (!$ressubcat){
$recquery = new WP_Query( isset($recargs) ? $recargs : '' );
while ( $recquery->have_posts() ) {
   $recquery->the_post();
 $do_not_duplicate[] = $post->ID;

   ?>
                            <li class='rg-recommended hue-grey-lightest'>
                                <a href='<?php the_permalink();?>'><?php the_title();?><br><span
                                        class='rg-recommended-label'>Recommended guide</span></a>

                                <div class='text-small margin-bottom-medium'>
                                    <?php
if (has_excerpt()){
the_excerpt();
}?></div>
                                <span class='text-smallest'>Keywords:</span>
                                <?php echo (generateTags(wp_get_post_terms($post->ID)));?>
                                <?php 
$viewableOnline = (has_term('online', 'guidance')) ? "<span class='tag rg-label-all'>All records viewable online</span>" : "";
                                   echo ($viewableOnline);?>
                            </li>


                            <?php
}

}
?>

                            <!-- recommended titles -->
                            <?php 

                        $i = 0;
                        $curr_letter = '';
                        if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : ?>
                            <?php
                        $the_query->the_post();
                  if (in_array($post->ID, $do_not_duplicate)) continue; 

   

                  $image_id = get_post_thumbnail_id($post->ID);
                  $image_url = wp_get_attachment_image_src($image_id,'thumbnail', false); 

                  $featuredImage = fix_internal_url($image_url[0]);

// Adds first letter of block to clearly define Alphabetical listing (in 'All research guides' only)

if (!$rescat && !$ressearch){
 $firstletter = strtoupper(substr($post->post_title,0,1));
      if ($firstletter != $curr_letter) {
         echo "<div class='clear-both pad-top-medium'></div><h3 class='text-200pc margin-top-medium margin-bottom-medium' id ='$firstletter'>$firstletter</h3>";
         $curr_letter = $firstletter;
      }

    }

    // ends
                        $viewableOnline = (has_term('online', 'guidance')) ? "<span class='tag rg-label-all'>All records viewable online</span>" : "";

                      if ($ressearch){

                        generateSearchResults(get_the_permalink(), get_the_title(), get_the_content(), generateTags(wp_get_post_terms($post->ID),$reskeyword), $viewableOnline, $ressearch);
                      }else{
                        generateResourceResults(get_the_permalink(), get_the_title(), generateTags(wp_get_post_terms($post->ID),$reskeyword), $viewableOnline, $featuredImage, $rescat);
                        }

                        ?>
                            <?php 
                        $i++;
                        endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                            <li>
                                <h3>Sorry</h3>
                                <p>


                                    <?php if ($ressearch && $loopcount == 0){

 echo("We couldn't find anything about <b>".$ressearch."</b>. Try narrowing your search by using shorter terms or phrases such as <b>MH 12</b> or <b>Royal Navy</b>.");


}else{

  echo ("We couldn't find any guides that matched your criteria.");
}
?>
                                </p>

                        </ul>
                        <?php endif; ?>
                        </ul>




                        <!-- results go here -->




                    </div><!-- end resource-results -->
                </div><!-- end breather -->
            </div><!-- end col -->
            <!-- END RESULTS -->






            </form>



        </div><!-- end row -->
    </div><!-- end page-wrap -->


    <?php require_once('footer.php'); ?>