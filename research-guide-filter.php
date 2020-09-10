<?php
/*
Template Name: Research guide filter
*/

get_header();
require_once('inc/research-guide-filter/research-guide-filter-data.php');
require_once('inc/research-guide-filter/research-guide-filter-queries.php');
require_once('inc/research-guide-filter/research-guide-filter-logic.php');

?>

<div id="page_wrap" class="container" role="main">
    <?php include 'breadcrumb.php'; ?>
    <div class="row">
        <div class="col starts-at-full box clr">
            <div class="heading-holding-banner">
                <h1 class="text-175pc"><span><span><?php the_title(); ?>
                    <?php if ($rescat) {
                    $restitle = "";
                    $restitle = $rescat;

                    if ($restitle == "first-world-war"){

                        $restitle = "First World War";
                    }
                      if ($restitle == "second-world-war-research"){

                        $restitle = "Second World War";
                    }
                    $restitle = str_replace("-"," ",$restitle);
                    $restitle = ucfirst($restitle);
                    echo (" - ".$restitle);
                    if ($rescat == "online"){ echo(" collections");}

                    }
                    if ($ressearch){ echo (" - ".$ressearch."");}

                    if ($reskeyword){ echo (" - ".str_replace("-", " ", $reskeyword)."");}
                    
                ?></span></span></h1>
            </div>
            <?php categoryBanner($categoryBanners); ?>
            
            <div class="width-full float-left hue-teal ">
                <div class="search-field-wrapper float-right pad-small hue-grey-dark">
                    <form method="get" action="#">
                        <label for="search" class="sr-only">Search all research guides</label>
                        <input type="text" class="search-field float-left" id="search" name="search"
                        placeholder="<?php if ($ressearch) {echo ($ressearch);}else{echo ("Search all research guides...");}?>" >
                        <input type="submit" class="search-button-medium float-right" value="Submit search" id="s1">
                    </form>
                </div>
                <form id="guide-form" name="guide-form" method="get" class="pad-top-medium">
                        <?php if (!$rescat){?>
    <input type="hidden" value="<?php echo($resletter);?>" name="letter" id="letter">
      <input type="hidden" value="<?php echo($ressearch);?>" name="search" id="rsearch">
        <input type="hidden" value="<?php echo($reskeyword);?>" name="keyword" id="rkeyword">
        <input type="hidden" value="<?php echo($resfilter);?>" name="filter" id="rfilter">
    <?php }?>
                    <div class="pad-horizontal-large">
                        Showing results for <?php generateSelect($categories); ?>
                    </div>
                    <?php
                    if ($ressearch == "" && $reskeyword =="") {
                    if ($rescat == "0" || $rescat == "") {
                    ?>
                    <div class="width-full float-left hue-25-black nav-extend pad-top-small">
                        <div class="pad-horizontal-large">
                            <div class="float-left width-half"><span>Filter by guide title
<!--
                                <a href="?filter=title" class="hue-teal">guide title</a> or <a href="?filter=keyword"  class="hue-teal">keyword</a>--></span> </div>
                            <a href="<?php the_permalink(); ?>?research-category=<?php echo($rescat); ?>"
                                title="Show all guides" class="float-right hue-teal text-smallest"
                            id="remove-all-filters">Show all guides</a>
                            <?php aToZ($unavailableLetters,$resfilter); ?>
                        </div>
                    </div>
                    <?php }
                    }
                    ?>
                    <?php
                    if ($rescat != "0") {
                    if ($rescat != "records-for-current-legal-purposes" && $rescat != "online"  ) {
                    ?>
                    <div class="width-full float-left hue-25-black nav-extend">
                        <div class="pad-horizontal-large margin-top-small">
                            <span class="text-small text-grey-light">Filter these results:</span>
                            <a href="<?php the_permalink(); ?>?research-category=<?php echo($rescat); ?>"
                            title="Clear all" class="close float-right" id="clear-all">Clear all</a>
                            <div id="research-guidance-subcategories">
                                <ul id="index" class="form-selectable clr">
                                    <?php generateAToZOrSubCategories($categories, $resfilter); ?>
                                </ul>
                                <div class="nav-controls margin-top-small">
                                    <!-- contains toggle-subcategories -->
                                </div>
                            </div>
                            <input id="f1" type="submit" class="margin-bottom-medium float-right" value="Find guides">
                        </div>
                    </div>
                    <?php }
                    } ?>
                    <!-- end of sub category options -->
                </div>
                <div class="float-left width-full box">
                    <div class="breather">
                        <div class="grid-within-grid-two-item">
                            <div>
                                <h2 class="margin-none">
                                How to look for records of...
                                </h2>
                            </div>
                            <div>
                                <span class="margin-left-medium text-smallest float-right hue-50-yellow pad-small">
                                    <input type="checkbox" name="res-online" id="online-only" value="1" <?php if ($resonline == "online") {
                                    echo 'checked="checked"';
                                    } ?>>
                                    <label for="online-only">Show only guides with all records online</label>
                                </span><span class="float-right text-smallest pad-small">
                                <?php outputResultCount($loopcount); ?>
                            </span>
                        </div>
                    </div>
                </form>
                <div class="resource-results">
                    <ul>
                        <!-- build the loop -->

<!-- recommended titles -->
<?php 
if (!$ressubcat){
$recquery = new WP_Query( $recargs );
 $do_not_duplicate = array();
while ( $recquery->have_posts() ) {
   $recquery->the_post();
 $do_not_duplicate[] = $post->ID;

   ?>
<li class='rg-recommended'>
                                <a href='<?php the_permalink();?>'><h3><?php the_title();?></h3><span class='rg-recommended-label'>We recommend</span></a>
                                <span class='text-smallest'>Keywords: </span>
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

                        if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : ?>
                        <?php
                        $the_query->the_post();
                  if (in_array($post->ID, $do_not_duplicate)) continue; 
                        $viewableOnline = (has_term('online', 'guidance')) ? "<span class='tag rg-label-all'>All records viewable online</span>" : "";
                        generateResourceResults(get_the_permalink(), get_the_title(), generateTags(wp_get_post_terms($post->ID),$reskeyword), $viewableOnline);
                        ?>
                        <?php 
                        $i++;
                        endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                        <li>
                            <h3>Sorry</h3>
                            <p>We couldn't find any guides that matched your criteria.</p>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="clear-both"></div>
            </div>
        </div>
    </div>
</div>
</div>
<?php require_once('footer.php'); ?>