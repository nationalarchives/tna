<?php
/*
Template Name: News and Document Release Article
*/
get_header();



?>


<div id="page_wrap" class="container" role="main">
  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
  <?php

	if ( have_posts() ) :


	?>
  <?php while ( have_posts() ) : the_post(); ?>

  <!-- content goes here -->

  <div class="row">
    <div class="col starts-at-full ends-at-two-thirds box clr">
      <div class="breather pad-top-small no-left-right-padding content-area">
        <h1 class="section-heading mt-0">
          <?php the_title(); ?>
         </h1>
 <div class="pad-bottom-large margin-bottom-small clr">
        <span class="entry-meta float-left"><?php the_time('l j F Y') ?></span>
        <div class="float-left-to-right">
          <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_facebook"></a><a class="addthis_button_twitter"></a><a class="addthis_button_compact"></a><div class="atclear"></div>
</div>
          <!--<div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook at300b" title="Facebook" href="#"><span class="at16nc at300bs at15nc at15t_facebook at16t_facebook"><span class="at_a11y">Share on facebook</span></span></a><a class="addthis_button_twitter at300b" title="Tweet" href="#"><span class="at16nc at300bs at15nc at15t_twitter at16t_twitter"><span class="at_a11y">Share on twitter</span></span></a><a class="addthis_button_email at300b" target="_blank" title="Email" href="#"><span class="at16nc at300bs at15nc at15t_email at16t_email"><span class="at_a11y">Share on email</span></span></a><a class="addthis_button_compact at300m" href="#"><span class="at16nc at300bs at15nc at15t_compact at16t_compact"><span class="at_a11y">More Sharing Services</span></span></a><a class="addthis_counter addthis_bubble_style" href="#" tabindex="1000" style="display: inline-block;"></a><div class="atclear"></div></div>-->
            <script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f20302f7cde0b51"></script>
            <script type="text/javascript" src="scripts/addthis-config-news.js"></script>
            <div class="right">
              <div class="PopUpdiv"></div>
            </div>
            <!-- end right -->
          </div>
          <!-- end float-right -->
        </div>
<div id="news-content">

<!-- auto-TOC -->


<?php


$getdata = get_the_content();

                //libxml_use_internal_errors(true);
                $h2Tag= array();
                $h2TagID= array();
                $xmlDoc = new DOMDocument();
                $xmlDoc->loadHTML($getdata);



$hcount = $xmlDoc->getElementsByTagName("h2")->length;



if ($hcount !=0){

   $searchNode = $xmlDoc->getElementsByTagName("h2");

   ?>
   <h2 class="hue-grey-mid-dark margin-none pad-horizontal-medium">In this release</h2>
        <div class="feature-box starts-at-full ends-at-full margin-bottom-large float-left">
          <div class="breather clr">


          <div id="records-content">
            <div id="toc">

<?php


             echo ("<ul class='child' id='toc-list'>");

                 foreach($searchNode as $d){
                   $h2Tag =  $d->textContent;
                   $h2TagID =  $d->getAttribute('id');

 echo "<li ><a href='#".$h2Tag."'>".$h2Tag."</a></li>";
                 }

echo("</ul>");

?>
            </div>
          </div>
        </div>
      </div>

      <?php }?>

<!-- auto-TOC-->

<!-- add ids to H2s for anchor links -->

        <?php
$content = mb_convert_encoding(get_the_content(), 'HTML-ENTITIES', "UTF-8");
$content = apply_filters( 'the_content', $content  );
$content = str_replace( ']]>', ']]&gt;', $content );


$dom = new DOMDocument();
$dom->encoding = 'utf-8';
$dom->loadHTML(utf8_decode($content));

foreach ($dom->getElementsByTagName('h2') as $item) {
 $h2ID =  $item->textContent;
 $item->setAttribute('id', $h2ID);

}

    //strip doctype and html headers

    echo preg_replace('/^<!DOCTYPE.+?>/', '', str_replace( array('<html>', '</html>', '<body>', '</body>'), array('', '', '', ''), $dom->saveHTML()));

?>
<!-- add ids to H2s for anchor links -->

<!-- if Document Releases show child pages -->

<?php if (in_category("document-releases")){



  $children = get_pages('child_of='.$post->ID);

if (count($children) != 0 ) {
?>

   <h2 class="hue-grey-mid-dark margin-none pad-horizontal-medium">Explore the files</h2>
<div class="feature-box float-left width-full margin-bottom-large">
  <div class="breather clr">

<!-- get child pages -->
            <ul class="child">

    <?php
  $pages = get_pages('sort_column=menu_order&child_of='.$post->ID.'&parent='.$post->ID.'');

  foreach($pages as $page)
  {


  ?>

           <li><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title;?></a></li>



<?php }?>

       </ul>
    </div>
<!-- get child pages -->


        </div>


<?php }


  ?>


<?php } ?>
<!-- For Document Releases -->

</div>

  <p>
        <?php
$terms = wp_get_post_terms( $post->ID);

$count = count($terms);


   $i = $count;

if ($terms){

echo("Tags: ");



              foreach($terms as $term) {
           $strtagslug = $term->slug;
            $strtagname = $term->name;

$strurl = "<a href=/about-us/news/?news-tag=".$strtagslug."&news-view=child>". $strtagname."</a>";


       $i = $i -1;
       if ($i < ($count - 1)) {
       printf(', %s', $strurl); }
       else{
     printf('%s', $strurl);
   }



         }
         }

         ?>
</p>

      </div>
    </div>



    <div class="col starts-at-full ends-at-one-third clr box">





<!-- related news-->


<?php

$currentID = get_the_ID();
$currentTags = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );

$args = array(
        'category_name' => 'news',
        'tag__in' => wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) ),
        'posts_per_page' => 3,
         'post__not_in' => array($currentID));

$myposts = get_posts( $args );

$postcount = count($myposts);

if ($postcount != 0){ ?>

<div class="heading-holding-banner">
        <h2> <span> <span>Related news</span> </span> </h2>
      </div>
<div class="breather">
<!-- loop for the related news -->
<?php
foreach ( $myposts as $post ) : setup_postdata( $post );
  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id());
?>

        <div class="pictorial-list grid-within-grid-one-item">
          <div class="resource-block"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
           <div class="has-background" <?php printf('style="background-image: url(%s)">', $image_url[0]); ?></div>
            <h3><?php the_title(); ?></h3>      </a>
            <p class="margin-bottom-large pad-bottom-medium"><?php the_time('l j F Y') ?></p>
          </div>
      </div>

<?php endforeach;
wp_reset_postdata();

}
?>

</div><!-- end pictorial-list -->
    </div>

  <?php endwhile; ?>
  <?php endif; ?>
</div>
</div>
<?php include 'footer.php'; ?>
