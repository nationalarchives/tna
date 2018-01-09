<?php
/*
Template Name: A-Z guidance
*/

get_header(); ?>
<?php 
$strletter = (isset($_GET["letter"])) ? filter_input( INPUT_GET, "letter", FILTER_SANITIZE_FULL_SPECIAL_CHARS ) : null;
$strkeyword = (isset($_GET["keyword"])) ? urldecode( filter_input( INPUT_GET, "keyword", FILTER_SANITIZE_FULL_SPECIAL_CHARS ) ) : null;

if ( have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div id="page_wrap" class="container" role="main"> 
  
  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
  
  <!-- Page content -->
  <div class="row">
    <div class="col starts-at-full ends-at-full box clr">
            <div class="heading-holding-banner">
        <h1><span><span>
         <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </span> </span> </h1>
      </div>
      <div class="breather">
   <div class="col starts-at-full ends-at-two-thirds clr"> 

              <?php the_content(); ?>


              
                   <ul id="a-z-menu">
        <li <?php if ($strletter == "a"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=a">A</a></li>
        <li <?php if ($strletter == "b"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=b">B</a></li>
        <li <?php if ($strletter == "c"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=c">C</a></li>
        <li <?php if ($strletter == "d"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=d">D</a></li>
        <li <?php if ($strletter == "e"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=e">E</a></li>
        <li <?php if ($strletter == "f"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=f">F</a></li>
        <li <?php if ($strletter == "g"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=g">G</a></li>
        <li <?php if ($strletter == "h"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=h">H</a></li>
        <li <?php if ($strletter == "i"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=i">I</a></li>
        <li><span href="" class="disabled">J</span></li>
        <li><span href="" class="disabled">K</span></li>
        <li><span href="" class="disabled">L</span></li>
        <li <?php if ($strletter == "m"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=m">M</a></li><br/>
                <li><span href="" class="disabled">N</span></li>
        <li <?php if ($strletter == "o"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=o">O</a></li>
        <li <?php if ($strletter == "p"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=p">P</a></li>
        <li><span href="" class="disabled">Q</span></li>
        <li <?php if ($strletter == "r"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=r">R</a></li>
        <li <?php if ($strletter == "s"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=s">S</a></li>
        <li <?php if ($strletter == "t"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=t">T</a></li>
        <li><span href="" class="disabled">U</span></li>
        <li><span href="" class="disabled">V</span></li>
        <li <?php if ($strletter == "w"){ echo ("class=selected"); }?>><a href="/information-management/browse-guidance-standards/?letter=w">W</a></li>
        <li><span href="" class="disabled">X</span></li>
        <li><span href="" class="disabled">Y</span></li>
        <li><span href="" class="disabled">Z</span></li>
      </ul>

    </div>
    <div class="col starts-at-full ends-at-one-third clr feature-box">
          <div class="breather">

          <?php if(get_field('how_title')): ?>
                  <h2><?php the_field('how_title'); ?></h2>
             <?php endif; ?>
                <?php if(get_field('tips')): ?>
                <p> <?php the_field('tips'); ?></p>
             <?php endif; ?>
                        </div>
        </div>
     </div>
    </div>
  </div>

 
<?php 
if ($strletter){?>
 
 <div class="row">
  
  <div class="col starts-at-full ends-at-full box clr">
      <div class="heading-holding-banner"><a name="guidance" id="guidance"></a>
        <h2><span><span>
       <?php  if(isset($strkeyword)){
		   
		   $str_keyword = str_replace("-"," ",$strkeyword);
		   $str_keyword = str_replace("1"," ",$str_keyword);
		   $str_keyword = str_replace("2"," ",$str_keyword);
		   $str_keyword = str_replace("3"," ",$str_keyword);
		   
		   	if ($str_keyword == "it management"){
	$str_keyword = "IT management";	
	}
		   	if ($str_keyword == "droid"){
	$str_keyword = "DROID (file characterisation)";	
	}
		if ($str_keyword == "information re use"){
	$str_keyword = "information re-use";	
	}
		if ($str_keyword == "re use"){
	$str_keyword = "re-use";	
	}
		   
		   echo ("Guidance for ".$str_keyword."");
			}else
			{
				echo ("All guidance for ".strtoupper($strletter)."");
			}
			
			?>
          </span> </span> </h2>
      </div>
      <div class="breather" id="guidance-links">

          
          <?php

if(isset($strkeyword)){
	
		    $loop = new WP_Query( array( 
			'post_type' => 'im_guidance_link',
			'tax_query' => array(
         'relation' => 'AND',
         array(
            'taxonomy' => 'post_tag',
            'field' => 'slug',
            'terms' => ''. $strkeyword.'')),
			'posts_per_page' => 500,
			'orderby'=> 'title',
			'order' => 'ASC' ) );
		 
	
			}else
			{
			
			 $loop = new WP_Query( array( 
			 'post_type' => 'im_guidance_link',
			'tax_query' => array(
         'relation' => 'AND',
         array(
            'taxonomy' => 'post_tag',
            'field' => 'slug',
            'terms' => ''. $strletter.'')),  
			'posts_per_page' => 500,
			'orderby'=> 'title', 
			'order' => 'ASC' ) );
		 
			}
   ?>



<div class="float-right">
<form name="az-form" method="get" action="<?php the_permalink();?>">
<input type="hidden" name="letter" value="<?php echo ($strletter);?>" />

<select name="keyword" required onchange="this.options[this.selectedIndex].value && (window.location='?letter=<?php echo ($strletter);?>&keyword='+this.options[this.selectedIndex].value)">
 
<option value="" >Filter by...</option>
        <optgroup label="Subjects starting with <?php echo (strtoupper($strletter));?> ">
    <!-- <ul class="link-list">-->

            <?php
				  query_posts( array('tag' => ''. $strletter.'', 'posts_per_page' => 1000,'orderby' => 'title','order' => 'ASC' ) );

				
                if ( have_posts() ) : while ( have_posts() ) : the_post();
				
                $custom_post_tags = get_the_tags();
                
				if ( $custom_post_tags ) {
						
                    foreach( $custom_post_tags as $tag ) {
						
						//echo ($tag -> name.'<br>');
						//echo ('('.$tag -> slug.')<br>');
                        $tags_arr[] = $tag -> slug;
						
                    }
                }
                
				endwhile; 
				
				endif;
                
				$count = $wp_query->post_count;

				if ($count == 0){
	echo ("Sorry, no keywords found.");
}else{
		
				if( $tags_arr ) {
                    $uniq_tags_arr = array_unique( $tags_arr );
					sort($uniq_tags_arr);
					
                 foreach( $uniq_tags_arr as $tag ) {
					 
	 $sanitizeTag =  sanitize_title($tag);
               
					 if ($sanitizeTag != "". $strletter ."") {
					  if ($sanitizeTag[0] == "". $strletter ."") {        
					  
					  $tagloop = new WP_Query( array( 
			'post_type' => 'im_guidance_link', 
			'tax_query' => array(
         'relation' => 'AND',
         array(
            'taxonomy' => 'post_tag',
            'field' => 'slug',
            'terms' => array(''.$sanitizeTag.''))),
			 ) 
			
			);
			
			$tagcount = $tagloop->found_posts;
			
	$tagexceptions = array(
"self-assessment", 
"re-use",
"information-re-use"
);		
		
		if ($tagcount !=0) {
			$strkeywordr = $strkeyword;	 
		  
		     $strkeywordr = str_replace("-1","",$strkeywordr);
		   $strkeywordr = str_replace("-2","",$strkeywordr);
		   $strkeywordr = str_replace("-3","",$strkeywordr);


if (! in_array($sanitizeTag, $tagexceptions)) {
     $sanitizeTag = str_replace("-"," ",$sanitizeTag);
}
if (! in_array($strkeywordr, $tagexceptions)) {
     $strkeywordr = str_replace("-"," ",$strkeywordr);
}
    if ($sanitizeTag == "information-re-use"){
	$sanitizeTag = "information re-use";
	}
	if ($sanitizeTag == "it management"){
	$sanitizeTag = "IT management";	
	}
	if ($sanitizeTag == "droid"){
	$sanitizeTag = "DROID";	
	}
	if ($strkeywordr == "information-re-use"){
	$strkeywordr = "information re-use";
	}
	if ($strkeywordr == "it management"){
	$strkeywordr = "IT management";	
	}
	if ($strkeywordr == "droid"){
	$strkeywordr = "DROID";	
	}
	
    if ($sanitizeTag == $strkeywordr){
	echo("<li> <span class=guidance-selected>");
	}else{
	echo("<li><span>");  
	}
	$Tagstrip = $sanitizeTag;

if ($Tagstrip == "information management 2")

{
	$Tagstrip = "information management";
}
if ($Tagstrip == "DROID")

{
	$Tagstrip = "DROID (file characterisation)";
}
	
	  ?>
      

<option value="<?php echo (strtolower($sanitizeTag));?>" <?php if (strtolower($sanitizeTag) == strtolower($strkeywordr)) echo "selected";?>><?php echo ($Tagstrip);?> (<?php echo($tagcount);?>)</option>

<?php
    	}
wp_reset_query();	 
	   }
					 }
                
                     }
                 }
}
wp_reset_query();
		   
		   ?>            
<!-- </ul> -->
</optgroup>
</select>
        <noscript>
         
          <input type="submit" value="Apply filter">
          </noscript>
           <?php if ($strkeyword != ""){
?>           

 <a href="?letter=<?php echo ($strletter);?>" title="Remove all filters" class="close text-black" id="remove-all-filters">Remove all filters</a>

            
            <?php }?>
</form>

   </div>


<p>
<?php 

$loopcount = $loop->post_count;
if ($loopcount == 0){
	echo ("Sorry, no files found.");
}else{
echo "Showing ".$loopcount ." link";
if ($loopcount > 1){ echo("s"); };
}

?></p>
<div class="clear-both"></div>

<?php
while ( $loop->have_posts() ) : $loop->the_post();  

$post_type = get_post_type( $post);
if ($post_type == "im_guidance_link"){
	
?>

<div class="guidance-item two-thirds">


 <?php 

 if(get_field('guidance-link-type') == "webpage"){
	 $target="_parent";
	 $linktype="webpage";
	 
 }else{
	 $target="_blank";
	 $linktype="file in new window";
 }
 $posttags = get_the_tags();
?>
<div class="clear-both"></div>
<div class="breather">
  <h3><a href="<?php the_field('guidance-link'); ?>" target="<?php echo $target;?>" title="<?php the_title(); ?> - open <?php echo $linktype;?> "><?php the_title(); ?></a> <?php edit_post_link('Edit', '', ''); ?> <div class="title-file-meta">
  <?php if(get_field('guidance-file-size'))
{
	echo '(' . get_field('guidance-file-size') . ')';
}
?>
</div>

 </h3>
<span class="guidance-description"><?php the_field('guidance-description'); ?></span> <div class="file-meta margin-bottom-medium">
<?php echo ("Subjects: "); $posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
	  if (strlen($tag->slug) !=1){
		  
		 
		 if ($tag->slug[0] == "". $strletter ."" & strlen($tag->slug) >1 ) { 
$tagr = str_replace("-"," ",$tag->slug);
echo("<span class='flag'><a href=?letter=".strtolower($tag->slug[0])."&keyword=".urlencode($tagr)." title=".$tag->name .">".strtolower($tag->name)."</a></span>");
}else{
$tagr = str_replace("-"," ",$tag->slug);
    echo "<a href=?letter=".strtolower($tag->slug[0])."&keyword=".urlencode($tagr)." title=".$tag->name .">".strtolower($tag->name)."</a>";
	  }if ($tag != end($posttags))
        echo ', '; 

	  }
	
  }
} ?></div>

<!-- <div class="cf"></div>
 -->
</div>
</div><!-- end of guidance-item -->

<?php 
}

endwhile; 
wp_reset_query();
?>

    
    </div>




  </div>

</div>
<?php }?>
</div>
<!-- end page content -->
<?php endwhile; ?>
<?php endif; ?>


<style>



</style>



<?php get_footer(); ?>
