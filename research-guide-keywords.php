<?php
/*
Template Name: Research guide keywords
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
  <div class="row margin-none ">
    <div class="col starts-at-full box clr margin-none ">

    
      <?php require_once('inc/research-guide-filter/research-guide-filter-utilities.php'); ?>

    <form id="guide-form" name="guide-form" method="get">

          <input type="hidden" value="<?php echo($reskeyletter);?>" name="keyword-letter" id="keyword-letter">
 <input type="hidden" value="<?php echo($reskeyword);?>" name="keyword" id="rkeyword">
 <input type="hidden" value="<?php echo($resshow);?>" name="show" id="rshow">


<!-- PAGE HEADING and INTRODUCTION -->
        <div class="breather">
          <h2 class="increase margin-bottom-medium">A-Z index</h2>


    
        </div><!-- end breather -->

      <!-- STEP 1 - A-Z -->
      <div class="width-full margin-none hue-grey-light clr">
        <div class="breather">
          <h3 class="margin-none pad-large">Step 1 - Select a letter to browse keywords</h3>
          <div class="disc-container">
            <ul id="menu-disc">

<?php
$arrRange = range('a', 'z');
array_push($arrRange, '1');

foreach($arrRange as $aletter) 
{ 
 if ($aletter == "q" || $aletter == "x" || $aletter == "y" || $aletter == "z"){

    ?>
  
<li><span class="disabled"><?php echo(strtoupper($aletter));?></a></li>


<?php

 }else{
  ?>
  
<li><a href="<?php the_permalink();?>?show=keywords&keyword-letter=<?php echo($aletter);?>" <?php if ($reskeyletter == $aletter){echo("class='selected'");}?>><?php echo(strtoupper($aletter));?></a></li>


<?php
}
}  


?>


     
            </ul>
          </div><!-- end disc-container -->
        </div><!-- end breather -->
      </div><!-- end width-full -->




<?php

if ($reskeyletter !=""){



?>


      <!-- STEP 2 - KEYWORDS -->
      <div id ="step-two" class="width-full bg-blue margin-none step-two">
        <h3 class="margin-none pad-large pad-bottom-none">Step 2 - Select a keyword</h3>
        <div class="breather clr">
          <div id="desktop-keywords">
            <ul class="no-bullet border-none keywords-selectable clr">

<?php 

query_posts('post_parent='.$resparent.'&post_type=page&posts_per_page=500&taxonomy=guidance');
    if ( have_posts() ) : while ( have_posts() ) : the_post();




        $terms = get_the_terms($post->ID, 'post_tag');

		if (is_array($terms) || is_object($terms)) {
        foreach ( $terms as $term ) {
          if (strlen($term->slug) >1){
          $terms_array[] = $term->slug.",".$term->name ;
		}
    }
}


    endwhile; 
   wp_reset_postdata();
   wp_reset_query();
    endif;



  $terms_array = array_unique($terms_array);

  asort($terms_array);

if ($terms_array){
foreach ( $terms_array as $tterm ) {

  $terms = explode(',',$tterm);

  $termslug= $terms[0];
   $termname= $terms[1];

 if ( preg_match("/^$reskeyletter/i",$termname) ) {

if ($reskeyword == $termslug){

    echo '<li><a href=?show=keywords&keyword-letter='.$reskeyletter.'&keyword='.$termslug.'#step-three><b>'. $termname. '</b></a></li>';
}else{
echo '<li><a href=?show=keywords&keyword-letter='.$reskeyletter.'&keyword='.$termslug.'#step-three>'. $termname. '</a></li>';
     

}


}

}
} 

//end of taxonomy loop 
?>





            </ul>
            
          </div><!-- end desktop-keywords -->
          <div id="mobile-keywords">
          
              <label class="margin-right-large">Show all guides relating to</label>
              <select id="keyword" name="keyword" class="margin-top-medium">




                <option value="0" selected>Select a keyword</option>
  <?php  


if ($terms_array){

foreach ( $terms_array as $tterm ) {

  $terms = explode(',',$tterm);

  $termslug= $terms[0];
   $termname= $terms[1];

 if ( preg_match("/^$reskeyletter/i",$termname) ) {?>

   <option value="<?php echo ($termslug);?>"  <?php if ($reskeyword == $termslug){ echo ("selected");}?>><?php echo($termname);?></option>
     
<?php 

}

}
}



?>
        
            
              </select>
      
          </div><!-- end mobile-keywords -->
        </div><!-- end breather -->

      </div><!-- end width-full -->




<?php }?>




    </div><!-- end col -->
  </div><!-- end row -->
  

<?php if ($reskeyword){?>
  <div class="category-filter-footer step-three"></div>
  <div id="step-three" class="row step-three margin-top-medium">


<!-- results go here -->


 <!-- START RESULTS -->
   <div class="col starts-at-full ends-at-full box margin-none clr">
  
      <div class="heading-holding-banner">
       
        <h2><span><span>     <?php outputResultCount($loopcount); ?>

<?php

   if ($ressearch) { 
              echo (" for '".stripslashes($ressearch)."'");
          }




          if ($reskeyword) { 


$keywordname = get_term_by('slug', $reskeyword, 'post_tag'); 

$keywordname = $keywordname->name;

              echo (" for '".$keywordname."'");
          }
?>

        </span></span></h2>
      </div><!-- end heading-holding-banner -->
      <div class="breather">
        <h3 class="margin-none float-left width-full-to-auto">How to look for records of...</h3>
        <span class="text-smallest float-left-to-right margin-bottom-medium margin-top-medium">

           <input type="checkbox" name="res-online" id="online-only" value="1" <?php if ($resonline == "online") {
                                    echo 'checked="checked"';
                                    } ?>>
                                    <label for="online-only">Show only guides with all records online</label>
        </span> 
        <div class="resource-results clr">



<!-- results go here -->

                    <ul>
                        <!-- build the loop -->

                        <?php 

                        $i = 0;

                        if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : ?>
                        <?php
                        $the_query->the_post();
                  //if (in_array($post->ID, $do_not_duplicate)) continue; 

                        $viewableOnline = (has_term('online', 'guidance')) ? "<span class='tag rg-label-all'>All records viewable online</span>" : "";
                      

                        generateResourceResults(get_the_permalink(), get_the_title(), generateTags(wp_get_post_terms($post->ID),$reskeyword), $viewableOnline, $ressearch, null ,$rescat);
                        
                        ?>
                        <?php 
                        $i++;
                        endwhile; ?>
                        <?php wp_reset_postdata(); 

                        wp_reset_query();

                        ?>
                        <?php else : ?>
                    <li>
                            <h3>Sorry</h3>
                            <p>We couldn't find any guides that matched your criteria.</p>
                          </ul>
                        <?php endif; ?>
                    </ul>




<!-- results go here -->




        </div><!-- end resource-results -->
      </div><!-- end breather --> 
    </div><!-- end col --> 
    <!-- END RESULTS --> 
















<!-- results go here -->
     </div><!-- end row --> 


<?php  

} 


?>

</form>
</div><!-- end page-wrap -->
<?php require_once('footer.php'); ?>