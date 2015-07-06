<?php
/*
Template Name: State Secrets Category

*/
 
?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); 


$Dtitle = get_the_title();
?>

  <div class="starts-at-full ends-at-full grey-bg document-viewer margin-bottom-large">
<div id="document-placeholder">
    <?php
    $Iquery = new WP_Query();
$Iquery->query('category_name='.$Dtitle.'&orderby=menu_order&order=asc&posts_per_page=1');




while ($Iquery->have_posts()) : $Iquery->the_post(); 


  $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_image_src($image_id,'full', false); 

 

   include 'inc/state-secrets/inc-document-loader.php';


   endwhile; 
   wp_reset_query(); 
   ?>
</div>

<div id="document-next"></div>

<div class="document-navigation">
  <div class="document-slides">

<span id="slider-prev"></span>
<span id="slider-next"></span>
<ul class="bxslider">
<!-- thumbs go here -->
<?php


$Dquery = new WP_Query();
$Dquery->query('category_name='.$Dtitle.'&orderby=menu_order&order=asc');




while ($Dquery->have_posts()) : $Dquery->the_post(); 

$documenturl = substr(get_permalink(), strlen(get_settings('home')));
  $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_image_src($image_id,'medium', false); 

 ?>
<a href="#document-loader" onClick="showDocumentDetails('<?php echo ($documenturl); ?>');">
<li class="document-slide-thumb dark-grey-border" <?php printf('style="background-image: url(%s)"', $image_url[0]); ?>></li></a>

<?php 
   endwhile; 
   wp_reset_query(); 
   ?>
<!-- thumbs go here -->

</ul>




  </div>
<div class="document-intro">   
  <div class="breather"><h2><?php the_title();?></h2>
    <p>
<?php the_content();?>
</div>
</div>
<div class="clear-both"></div>


  <div class="breather">


<?php  
$thistitle = strtolower(get_the_title());

$tagurl = "";

if ($thistitle == "crime and punishment"){
$tagurl = "michael-portillo-state-secrets-crime-and-punishment";

}
if ($thistitle == "tyrants"){
$tagurl = "michael-portillo-state-secrets-tyrants";

}
if ($thistitle == "celebrity and scandal" || $thistitle == "celebrity and scandals" ){
$tagurl = "michael-portillo-state-secrets-celebrity";

}
if ($thistitle == "traitors and spies"){
$tagurl = "michael-portillo-state-secrets-spies";

}
if ($thistitle == "banned"){
$tagurl = "michael-portillo-state-secrets-banned";

}
if ($thistitle == "monarchy"){
$tagurl = "michael-portillo-state-secrets-monarchy";

}
if ($thistitle == "on trial"){
$tagurl = "michael-portillo-state-secrets-on-trial";

}
if ($thistitle == "sport and politics"){
$tagurl = "michael-portillo-state-secrets-sport-and-politics";

}
if ($thistitle == "mysteries"){
$tagurl = "michael-portillo-state-secrets-mysteries";

}
if ($thistitle == "national security"){
$tagurl = "michael-portillo-state-secrets-national-security";

}
?>




  <div style="background:url(<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-amp.jpg);" class="secret-box extras-box" >

    <div class="secret-title">
    <a href="http://media.nationalarchives.gov.uk/index.php/tag/<?php echo ($tagurl);?>/" title="Listen and watch ‘<?php the_title();?>’ on our Media Player website."><h2>Podcasts and videos</h2></a>
    <p>
Listen and watch ‘<?php the_title();?>’ on our Media Player website.</p></div>
</div>



<div style="background:url(<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-blog.jpg);" class="secret-box extras-box" >

    <div class="secret-title">
    <a href="http://blog.nationalarchives.gov.uk/blog/tag/<?php echo ($tagurl);?>/" title="Read articles about ‘<?php the_title();?>’ and take part in discussions on our blog."><h2>Blogs</h2></a>
    <p>Read articles about ‘<?php the_title();?>’ on our blog.</p></div>
</div>

</div>

</div>
<div class="clear-both"></div>
</div>

<?php endwhile; ?>
<?php endif; ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_directory");?>/css/minisite-state-secrets.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_directory");?>/css/jquery.bxslider.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<script type="text/javascript">
jQuery(document).ready(function($) {

   var dslider=  $('.bxslider').bxSlider({
  minSlides: 1,
  maxSlides: 3,
  slideWidth: 200,
  slideMargin: 10,
  pager:true, 
  responsive:true,
  preloadImages:'visible',
  controls:true,
  infiniteLoop:false,
  hideControlOnEnd:true,
  nextSelector: '#slider-next',
  prevSelector: '#slider-prev',
  nextText: '<i class="fa fa-chevron-right fa-4x"></i>',
  prevText: '<i class="fa fa-chevron-left fa-4x"></i>'
});   

    });


 function showDocumentDetails(u){

 var href = u;

$('html, body').animate({
    scrollTop: $("#documents").offset().top
}, 1000);
  $("#document-placeholder").fadeOut('slow');
  $("#document-next").html("<p style=\"margin-top: 0; padding-top: 3em;text-align:center;\">Loading State Secrets</p><p align=center><img src=/wp-content/themes/tna/images/centenary-map/ajax-loader.gif></p>");
$("#document-next").load(href);


          }



</script>