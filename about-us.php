<?php
/*
Template Name: About Us
*/

get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div id="page_wrap" class="container" role="main"> 

  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
  <div class="row banner small <?php echo( basename(get_permalink()) ); ?>">
    <div class="col starts-at-full clr">
      <h1><span><span><?php echo get_the_title(); ?></span></span></h1>
<!-- call-to-action -->


<?php


      $banner_title =  get_post_meta(get_the_ID(), 'tna_banner_title', TRUE);

        if ($banner_title){

            $banner_desc = get_post_meta(get_the_ID(), 'tna_banner_desc', TRUE);
            $banner_btn_link = get_post_meta(get_the_ID(), 'tna_button_link_1', TRUE);
            $banner_btn_link_text = get_post_meta(get_the_ID(), 'tna_button_text', TRUE);
        ?>


                 <div class="overlay width-full no-print pad-bottom-large">

<div class="pad-large  ">

          <div class="float-left"><h2 class="margin-none"><?php echo ($banner_title);?></h2>
              <?php echo ($banner_desc );?>
          </div>


          <div class="float-left-to-right pad-top-medium"> <a href="<?php echo ($banner_btn_link );?>" class="ghost-button"><?php echo ($banner_btn_link_text);?></a></div>
</div>

</div>

<?php }?>


<!-- call-to-action -->

      <div class="sprite icon-img-desc position-top-right">
        <div class="image-description" style="display: block;">
          <?php the_field('main-banner-image-description'); ?>
        </div>
      </div>
    </div>
  </div>
  

<!-- Start of About Us layout -->
 
 
 
 
 <div class="row">
  <div class="col starts-at-full ends-at-half clr box ">
  
   <a title="Our role" href="/about/our-role/">
<div class="image-container box-role">

		<h2>
			<span>
				<span>
				Our role
				</span>
			</span>
		</h2></div>  
  
  
  
    <div>
</a>

    <div class="breather">
      <?php the_field('our-role'); ?></div>
  </div>
  </div>
  <div class="col starts-at-full ends-at-half box clr">
  
   <?php //the_field('visit-us'); ?>

            <a href="/about/visit-us/" title="Visit Us">
              <div class="heading-holding-banner">
                <h2><span><span>Visit us</span></span></h2>
              </div>
            </a>
            <div class="position-top-right">
               <?php include 'openingtimes-inc.php'; ?>
            </div>
            <div class="breather">
              <a href="https://maps.google.com/maps?q=The+National+Archives,+Kew,+Richmond,+United+Kingdom&amp;hl=en&amp;sll=51.454251,-0.291338&amp;sspn=0.200887,0.389328&amp;oq=the+national&amp;t=m&amp;z=16&amp;iwloc=A" target="_blank" title="Click for larger map of The National Archives">
                <div class="position-relative">
                  <div class="position-top-right">
                    <div class="sprite icon-new-window">
                    </div>
                  </div>
                  <div class="margin-bottom-medium">
                    <img src="http://nationalarchives.gov.uk/images/home/map-location-the-national-archives.jpg" alt="Click for larger map of The National Archives" />
                  </div>
                </div>
            </a>
            <ul class="child width-full">
            	<li><a href="/about/visit-us/opening-times/">Opening times</a></li>
               	<li><a href="/about/visit-us/how-to-find-us/">How to find us</a></li>
            	<li><a href="/about/visit-us/whats-on/">What's on</a></li>
	            <li><a href="/about/visit-us/researching-here/">Researching here</a></li>
            	<li><a href="/about/visit-us/information-for-disabled-visitors/">Information for disabled visitors</a></li>
            	<li><a href="/about/visit-us/group-visits/">Group visits</a></li>
            	<li><a href="/about/visit-us/facilities/">Facilities</a></li>
            </ul>
          </div>       
       
  </div>
</div>

 
 
 <div class="row">
  <div class="col starts-at-full ends-at-one-third clr box">
    <a href="/about/visit-us/whats-on/events/"><div class="heading-holding-banner">
      <h2> <span> <span> Talks and events </span> </span> </h2>
    </div></a>
    <div class="breather">
   <?php 
   if (have_rows('about-talks-events')){
     $format = '<p><span class="statistic">Next: %1$s</span> <a href="%2$s">%3$s</a> <span class="important">%4$s</span></p>';
     $rows = get_field( 'about-talks-events' );

     $content = $rows[0];

      echo sprintf( $format, 
          $content[ 'about-event-date' ], 
          $content[ 'about-event-url' ], 
          $content[ 'about-event-title' ],
          $content[ 'about-event-cost' ]
        );
    }

   ?>
    </div>
  </div>
  <div class="col starts-at-full ends-at-one-third clr box">
   <a href="/about/news/"> <div class="heading-holding-banner">
      <h2> <span> <span> News </span> </span> </h2>
    </div></a>
    <div class="breather">
      <ul class="full">
<?php 

if (have_rows('about-news')){
  $format = '<li><a href="%1$s">%2$s</a></li>';
    $rows = get_field( 'about-news' );
    foreach( $rows as $row ) {
      echo sprintf( $format, 
          $row[ 'about-news-url' ], 
          $row[ 'about-news-title' ]
        );
    }
}
?>
        <li><a href="http://blog.nationalarchives.gov.uk/blog/category/behind-the-scenes/">Blog - Behind the scenes</a></li>
        <li><a href="/about/get-involved/newsletters/the-national-archives-newsletter/">Sign up to our free enewsletter</a></li>
      </ul>
     </div>
  </div>
  <div class="col starts-at-full ends-at-one-third clr box">
      <div class="heading-holding-banner">
      <h2> <span> <span> Facts and figures </span> </span> </h2>
    </div>
    <div class="breather">
     <?php the_field('facts-and-figures'); ?>
       </div>
  </div>
</div>
 
 
 <div class="row">
  <div class="col starts-at-full ends-at-half box clr level1majbox ">
	<a title="Get involved" href="/about/get-involved/"><div class="image-container box-getinvolved">

      <h2> <span> <span> Get involved </span> </span> </h2>
    </div></a>
    <div class="breather">
     <?php the_field('get-involved'); ?>
    </div>
  </div>
  <div class="col starts-at-full ends-at-half box clr level1majbox ">
   <a title="Jobs and opportunities" href="/about/jobs/"><div class="image-container box-jobs">




      <h2> <span> <span>Jobs and opportunities</span> </span> </h2>
    </div></a>
    <div class="breather">
    <?php the_field('jobs-and-opportunities'); ?>
    </div>
  </div>
</div>
 
 
 
 
 <div class="row">
  <div class="col starts-at-full ends-at-one-third clr box">
    <a href="/about/press-room/"><div class="heading-holding-banner">
      <h2> <span> <span> Press room</span> </span> </h2>
    </div></a> 
    <div class="breather">
         <?php the_field('press-room'); ?>
    </div>
  </div>
  <div class="col starts-at-full ends-at-one-third clr box">
    <a href="/about/commercial-opportunities/"><div class="heading-holding-banner">
      <h2> <span> <span> Commercial opportunities </span> </span> </h2>
    </div></a>
    <div class="breather">
  <?php the_field('commercial-opportunities'); ?>
    </div>
  </div>
  <div class="col starts-at-full ends-at-one-third clr box">
    <a href="/about/freedom-of-information/"><div class="heading-holding-banner">
      <h2> <span> <span> Freedom of Information </span> </span> </h2>
    </div></a>
    <div class="breather">
  <?php the_field('freedom-of-information'); ?>
    </div>
  </div>
</div>
 
 
 
 
 
 <!-- closing wrapper tag -->

</div>
<!-- End of About Us layout -->


<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
