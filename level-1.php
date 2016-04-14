<?php
/*
Template Name: 1 Main section page
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
      <div class="strapline"> <span>
        <!-- <?php the_field('sub-heading'); ?> -->
        </span> </div>

        <?php //} elseif (is_page('help-with-your-research')) { ?>
        <?php if (is_page('help-with-your-research') || strpos(strtolower(get_the_title()), 'help with your research') !== false) { ?>
        <!-- Start of Help with your research layout -->
        
                 <div class="overlay width-full no-print">

<div class="grid-within-grid-two-item pad-large text-large">

          <div>Unfamiliar with archives? <a href="/help-with-your-research/start-here/" class="text-yellow">Start here</a> 
          </div>
 

          <div>Search our records with <a href="http://discovery.nationalarchives.gov.uk/" class="text-yellow">Discovery - our catalogue</a></div>
</div>

</div>

        <?php } ?>

      <div class="sprite icon-img-desc position-top-right">
        <div class="image-description" style="display: block;">
          <?php the_field('main-banner-image-description'); ?>
        </div>
      </div>
    </div>
  </div>
  


<?php //if (is_page('information-management')) { ?>
<?php if (is_page('information-management') || strpos(strtolower(get_the_title()), 'information') !== false) { ?>
  <!-- Start of Information management layout -->
  <div class="row">
    <div class="col starts-at-full clr box"> <a href="/information-management/browse-guidance-standards/">
      <div class="heading-holding-banner position-relative">
        <h2> <span> <span>
          <?php the_field('box-7-heading'); ?>
          </span> </span> </h2>
      </div>
      </a>
      <div class="breather">
        <div class="records-a-z clr">
          <?php the_field('guidance-and-standards-a-z'); ?>
        </div>
      </div>
    </div>
  </div>
  <div id="index" class="row">
    <div class="col starts-at-full ends-at-half clr box"> <a href="<?php the_field('box-1-link-destination'); ?>">
      <div class="heading-holding-banner">
        <h2> <span> <span>
          <?php the_field('box-1-heading'); ?>
          </span> </span> </h2>
      </div>
      </a>
      <div class="breather">
        <?php the_field('managing-records-and-information'); ?>
      </div>
    </div>
    <div class="col starts-at-full ends-at-half clr box"> <a href="<?php the_field('box-2-link-destination'); ?>">
      <div class="heading-holding-banner">
        <h2> <span> <span>
          <?php the_field('box-2-heading'); ?>
          </span> </span> </h2>
      </div>
      </a>
      <div class="breather">
        <?php the_field('re-using-public-sector-information'); ?>
      </div>
    </div>
    <div class="col starts-at-full ends-at-half clr box"> <a href="<?php the_field('box-3-link-destination'); ?>">
      <div class="image-container box-regulations">
        <h2> <span> <span>
          <?php the_field('box-3-heading'); ?>
          </span> </span> </h2>
      </div>
      </a>
      <div class="sprite icon-img-desc position-bottom-right-image">
        <div class="image-description" style="display: block;">
          <?php the_field('producing-official-publications-image-description'); ?>
        </div>
      </div>
      <div class="breather">
        <?php the_field('producing-official-publications'); ?>
      </div>
    </div>
    <div class="col starts-at-full ends-at-half clr box"> <a href="<?php the_field('box-4-link-destination'); ?>">
      <div class="image-container box-training">
        <h2> <span> <span class="">
          <?php the_field('box-4-heading'); ?>
          </span> </span> </h2>
      </div>
      </a>
      <div class="sprite icon-img-desc position-bottom-right-image">
        <div class="image-description" style="display: block;">
          <?php the_field('training-courses-and-events-image-description'); ?>
        </div>
      </div>
      <div class="breather">
        <?php the_field('training-courses-and-events'); ?>
      </div>
    </div>
    <div class="col starts-at-full ends-at-half box clr"> <a href="<?php the_field('box-5-link-destination'); ?>">
      <div class="heading-holding-banner">
        <h2> <span> <span>
          <?php the_field('box-5-heading'); ?>
          </span> </span> </h2>
      </div>
      </a>
      <div class="breather">
        <?php the_field('legislation-and-regulations'); ?>
      </div>
    </div>
    <div class="col starts-at-full ends-at-half box clr"> <a href="<?php the_field('box-6-link-destination'); ?>">
      <div class="heading-holding-banner">
        <h2> <span> <span>
          <?php the_field('box-6-heading'); ?>
          </span> </span> </h2>
      </div>
      </a>
      <div class="breather">
        <?php the_field('keeping-in-touch'); ?>
      </div>
    </div>
  </div>
</div>
<!-- end page wrap -->
<!-- End of Information management layout --> 
<?php //} elseif (is_page('education')) { ?>
<?php } elseif (is_page('education') || strpos(strtolower(get_the_title()), 'education') !== false) { ?>




<!-- Start of Education layout -->
<div class="row">
  <div class="col starts-at-full ends-at-full clr box">
    <div class="heading-holding-banner">
      <h2> <span> <span> <a href="/education/sessions-and-resources/?time-period=medieval,early-modern,empire-and-industry,victorians,early-20th-century,interwar,second-world-war,postwar">Time periods</a> </span> </span> </h2>
    </div>
    <div class="breather clr">
      <div class="pictorial-list clr grid-within-grid-eight-item">
        <?php if(get_field('periods')): ?>
        <?php while(has_sub_field('periods')): ?>
        <div class=<?php echo(get_sub_field('class-name')); ?>> <a href= <?php echo('"'.get_sub_field('link-href').'"'); ?>>
          <h3>
            <?php 
                    echo(get_sub_field('heading-text')); 
                  ?>
          </h3>
           </a></div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- magna carta banner -->


<div class="row margin-bottom-large pad-none" style="background: url(<?php bloginfo( 'stylesheet_directory'); ?>/images/education/tna-magna-carta-bg.jpg) no-repeat;background-size:cover;background-position:left;height:auto;width:auto">
<div class="col starts-at-full ends-at-full" style="margin:0px;background-color: rgba(0,0,0,0.4);">

<p align="center" class="margin-bottom-large margin-top-small">

<img src="<?php bloginfo( 'stylesheet_directory'); ?>/images/education/tna-magna-carta-title.png" alt="Magna Carta" style="width:100%;max-width:250px"><br>
<p align="center">
<a href="/education/medieval/magna-carta/" title="Visit the new Magna Carta resource" class="ghost-button" style="margin:0px;margin-bottom:5px !important;">Build your own chronicle</a></p>
<p align="center">
<img src="<?php bloginfo( 'stylesheet_directory'); ?>/images/education/bett-award-2016.png" height="55" border="0">
<img src="<?php bloginfo( 'stylesheet_directory'); ?>/images/education/medea-award-2016.png" height="55" border="0">
    </p>

</p>
<div class="clear-both"></div>

</div>


  </div>


<!-- magna carta banner -->
<div class="row">
  <div class="col starts-at-full ends-at-half box clr">
    <div class="heading-holding-banner">
      <h2> <span> <span> <a href="/education/teachers/">For teachers</a> </span> </span> </h2>
    </div>
    <?php the_field('for-teachers'); ?>
  </div>
  <div class="col starts-at-full ends-at-half box clr"> <a href="/education/students/">
    <div class="image-container education-imgBox-students">
      <h2> <span> <span> For students </span> </span> </h2>
    </div>
    </a>
    <?php the_field('for-students'); ?>
  </div>
</div>
<div class="row">
  <div class="col starts-at-full ends-at-one-third clr box"> <a href="http://media.nationalarchives.gov.uk/index.php/tag/education-film-of-the-month/">
    <div class="heading-holding-banner">
      <h2> <span> <span> Film of the month </span> </span> </h2>
    </div>
    </a>
    <div class="breather"> 
      <script language="JavaScript" type="text/javascript" src="http://www.nationalarchives.gov.uk/script/swfobject.js"></script> 


<?php if (have_rows('film-of-the-month')):?>
  <?php    
        $format  = '<script type="text/javascript">var flashvars={file:\'%1$s\',image:\'%2$s\',title:\'%3$s\',author:\'\',description:\'%4$s\',stretching:\'exactfit\'};';
        $format .= 'var params={allowfullscreen:\'true\',allowscriptaccess:\'always\',wmode:\'transparent\'};';
        $format .= 'var attributes={id:\'player\',name:\'player\'};';
        $format .= 'swfobject.embedSWF("http://www.nationalarchives.gov.uk/swf/player.swf", "player", "100%%", "240", "9.0.124", false, flashvars, params, attributes);</script>';
        $format .= '<object type="application/x-shockwave-flash" id="player" name="player" data="http://www.nationalarchives.gov.uk/swf/player.swf" width="100%%" height="240" style="visibility: visible;" align="center">';
        $format .= '<param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="wmode" value="transparent"><param name="flashvars" value="file=%1$s&amp;image=%2$s&amp;title=%3$s&amp;author=&amp;description=%4$s&amp;stretching=exactfit"></object><p><a href="%5$s" title="%3$s">%3$s</a></p>';
        $rows = get_field( 'film-of-the-month' );
        $row = $rows[0];?>
          <?php echo sprintf( $format,
                              $row[ 'film-of-the-month-video' ], 
                              $row[ 'film-of-the-month-image' ], 
                              $row[ 'film-of-the-month-title' ], 
                              $row[ 'film-of-the-month-description' ], 
                              $row[ 'film-of-the-month-amp' ]);
          ?>
<?php endif;?>




   <?php //include 'film-of-the-month.php'; ?>
    </div>
  </div>
  <?php # End of Film of the month code ?>

<div class="col starts-at-full ends-at-one-third clr box">
<?php if (have_rows('education-document')):?>
  <?php    $format = '<a title="External website - link opens in a new window" target="_blank" href="%1$s"><div class="image-container box-document"><h2><span><span> Document of the month</span></span></h2></div></a><div class="breather"><p>%2$s</p></div>';
    $rows = get_field( 'education-document' );
    $row = $rows[0];?>
          <?php echo sprintf( $format, $row[ 'document-url' ], $row[ 'document-description' ]);?>
<?php endif;?>
</div>

  <div class="col starts-at-full ends-at-one-third clr box"> <a href="/education/teachers/social-media.htm" title="Connect with us">
    <div class="image-container education-imgBox-connect">
      <h2> <span> <span> Connect with us </span> </span> </h2>
    </div>
    </a>
    <?php the_field('connect-with-us'); ?>
  </div>
</div>



<?php if (have_rows('education-home-featured-items')):?>
<?php    $format = '<a href="%1$s" title="%2$s"><div class="image-container education-imgBox-0%3$s"><h2><span><span>%2$s</span></span></h2></div></a><div class="breather"><p>%4$s</p></div>';
    $rows = get_field( 'education-home-featured-items' );
    $i=1;?>
    <div class="row">
    <?php foreach( $rows as $row ):?>
        <div class="col starts-at-full ends-at-one-third clr box">
          <?php echo sprintf( $format, $row[ 'featured-item-url' ], $row[ 'featured-item-title' ],$i++,$row[ 'featured-item-description' ]);?>
        </div>
    <?php endforeach;?>
    </div>
<?php endif;?>


</div>
<!-- End of Education layout --> 
<?php //} elseif (is_page('archives-sector')) { ?>
<?php } elseif (is_page('archives-sector') || strpos(strtolower(get_the_title()), 'archives') !== false) { ?>



<!-- Start of Archives Sector layout --> 
  <div class="row">
    <div class="col starts-at-full ends-at-full clr box">
      <div class="heading-holding-banner">
        <h2>
          <span><span>What's happening now</span></span>
        </h2>
      </div>
      <div class="breather">
        <div class="col starts-at-full ends-at-one-third clr subsection">
          <h3>Current initiatives</h3>

          <ul class="full">
<?php 

if (have_rows( 'archives-sector-current-initiatives' )){
  $current_rows = get_field('archives-sector-current-initiatives');
    if ( $current_rows ) {
      foreach( $current_rows as $row ) {

      $format = '<li><a href="%1$s"';
      if ( $row['current-initiatives-new-window'] ) {
        $format = $format . ' target="_blank" title="External website - link opens in a new window"';
        }
      $format = $format . '>%2$s</a></li>';
  
      echo sprintf(
                    $format, 
                    $row[ 'current-initiatives-url' ],
                    $row[ 'current-initiaives-link-text' ]
                  );
      }
  }
}
?>
        <li><a href="/archives-sector/current-initiatives.htm">View all</a></li>
        </ul>

        </div>
        <div class="col starts-at-full ends-at-one-third clr subsection">
          <h3>Events </h3>
         

          <ul class="full">
<?php 

if (have_rows( 'archives-sector-events' )){
  $events_rows = get_field('archives-sector-events');
    if ( $events_rows ) {
      foreach( $events_rows as $row ) {

      $format = '<li><a href="%1$s"';
      if ( $row['events-new-window'] ) {
        $format = $format . ' target="_blank" title="External website - link opens in a new window"';
        }
      $format = $format . '>%2$s</a></li>';
  
      echo sprintf(
                    $format, 
                    $row[ 'events-url' ],
                    $row[ 'events-link-text' ]
                  );
      }
  }
}
?>
          </ul>

        </div>
        <div class="col starts-at-full ends-at-one-third clr subsection">
          <h3>News</h3>
	
          <ul class="full">
<?php 

if (have_rows( 'archives-sector-news' )){
  $news_rows = get_field('archives-sector-news');
    if ( $news_rows ) {
      foreach( $news_rows as $row ) {

      $format = '<li><a href="%1$s"';
      if ( $row['news-new-window'] ) {
        $format = $format . ' target="_blank" title="External website - link opens in a new window"';
        }
      $format = $format . '>%2$s</a></li>';
  
      echo sprintf(
                    $format, 
                    $row[ 'news-url' ],
                    $row[ 'news-link-text' ]
                  );
      }
  }
}

?>
        </ul>

        </div>
      </div> <!-- closes breather 1-->
    </div>
  </div>
  
  <div class="row">
    <div class="col starts-at-full ends-at-half box clr ">
      <div class="image-container box-practical-guidance">
        <h2>
          <span><span>Practical guidance</span></span>
        </h2>
      </div>
      <div class="breather">

<?php the_field('practical-guidance'); 




?>
      </div>
    </div>

    <div class="col starts-at-full ends-at-half box clr level1majbox">
      <div class="image-container box-resources">
    		<h2>
          <span><span>Theoretical guidance</span></span>
		    </h2>
      </div>
      <div class="breather">
<?php the_field('theoretical-guidance'); 




?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col starts-at-full ends-at-half clr box">
      <a href="/records/catalogues-and-online-records.htm">
        <div class="heading-holding-banner">
      		<h2>
      			<span><span>Catalogues and online records</span></span>
          </h2>
        </div>
      </a>
		  <div class="breather">
<?php the_field('catalogues-and-online-records'); 




?>
      </div>
    </div>
  	<div class="col starts-at-full ends-at-half box clr level1majbox">
    	<div class="heading-holding-banner">
    		<h2>
    			<span><span><a href="/archives-sector/key-sector-statistics.htm">Sector statistics</a></span></span>
    		</h2>
      </div>
      <div class="breather">
<?php the_field('sector-statistics'); 




?>
     </div>
    </div>
  </div>

  <div class="row">
		<div class="col starts-at-full ends-at-one-third clr box">
    	<div class="heading-holding-banner">
        <h2>
    			<span><span><a href="/archives-sector/ask-question.htm">Contact the team</a></span></span>
    		</h2>
      </div>
      <div class="breather">
<?php the_field('contact-the-team'); 




?>
      </div>
    </div>
		<div class="col starts-at-full ends-at-one-third clr box">
    	<div class="heading-holding-banner">
    		<h2>
    			<span><span><a href="/archives-sector/share-your-expertise.htm">Share your expertise</a></span></span>
    		</h2>
      </div>
      <div class="breather">
<?php the_field('share-your-expertise'); 




?>
      </div>
    </div>
		<div class="col starts-at-full ends-at-one-third clr box">
    	<div class="heading-holding-banner">
    		<h2>
    			<span><span><a href="http://blog.nationalarchives.gov.uk/blog/tag/archives-sector/">From our blog</a></span></span>
        </h2>
      </div>
      <div class="breather">
<?php 

if (have_rows( 'archives-sector-blog' )){

    $blog_format = '<h3><a href="%1$s" title="%2$s">%2$s</a></h3><div class="entry-meta">%3$s | %4$s</div><p>%5$s</p>';
    $blog_rows = get_field( 'archives-sector-blog' );
    $blog_content = $blog_rows[0];

    echo sprintf( $blog_format, 
        $blog_content[ 'archives-sector-blog-url' ], 
        $blog_content[ 'archives-sector-blog-title' ], 
        $blog_content[ 'archives-sector-blog-author' ],
        $blog_content[ 'archives-sector-blog-published-date' ],
        $blog_content[ 'archives-sector-blog-description' ]
      );
}
?>
      </div>
    </div>
	</div>		
<!-- closing wrapper tag -->
</div>
<!-- End of Archives Sector layout -->
<?php //} elseif (is_page('about')) { ?>
<?php } elseif (is_page('about') || strpos(strtolower(get_the_title()), 'about') !== false) { ?>
<!-- Start of About Us layout --> 
 
 
 
 
 <div class="row">
  <div class="col starts-at-full ends-at-half clr box ">
  
   <a title="Our role" href="/about/our-role.htm">
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

            <a href="/visit/default.htm" title="Visit Us">
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
              <li><a  href="/visit/before-you-visit.htm">Before you visit</a></li>
              <li><a  href="/visit/times.htm">Opening times</a></li>
                  <li><a  href="/visit/when-you-arrive.htm">When you arrive</a></li>
                  <li><a  href="/visit/disabled.htm">Disabled access</a></li>
                  <li><a  href="/visit/groups.htm">Group visits</a></li>
                  <li><a  href="/contact/">Contact us</a></li>
                  <li><a  href="/visit/advance-orders.htm/">Advance document orders</a></li>
              </ul>
          </div>       
       
  </div>
</div>

 
 
 <div class="row">
  <div class="col starts-at-full ends-at-one-third clr box">
    <a href="/visit/events.htm"><div class="heading-holding-banner">
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
   <a href="/news/"> <div class="heading-holding-banner">
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
        <li><a href="/news/enewsletter.htm">Sign up to our free enewsletter</a></li>
      </ul>
     </div>
  </div>
  <div class="col starts-at-full ends-at-one-third clr box">
      <a  href="http://labs.nationalarchives.gov.uk/zeitgeist/"> <div class="heading-holding-banner">
      <h2> <span> <span> Facts and figures </span> </span> </h2>
    </div></a>
    <div class="breather">
     <?php the_field('facts-and-figures'); ?>
       </div>
  </div>
</div>
 
 
 <div class="row">
  <div class="col starts-at-full ends-at-half box clr level1majbox ">
	<a title="Get involved" href="/get-involved/default.htm"><div class="image-container box-getinvolved">

      <h2> <span> <span> Get involved </span> </span> </h2>
    </div></a>
    <div class="breather">
     <?php the_field('get-involved'); ?>
    </div>
  </div>
  <div class="col starts-at-full ends-at-half box clr level1majbox ">
   <a title="Jobs and opportunities" href="/jobs/"><div class="image-container box-jobs">




      <h2> <span> <span>Jobs and opportunities</span> </span> </h2>
    </div></a>
    <div class="breather">
    <?php the_field('jobs-and-opportunities'); ?>
    </div>
  </div>
</div>
 
 
 
 
 <div class="row">
  <div class="col starts-at-full ends-at-one-third clr box">
    <a href="/pressroom/"><div class="heading-holding-banner">
      <h2> <span> <span> Press room</span> </span> </h2>
    </div></a> 
    <div class="breather">
         <?php the_field('press-room'); ?>
    </div>
  </div>
  <div class="col starts-at-full ends-at-one-third clr box">
    <a href="/about/commercial-opportunities.htm"><div class="heading-holding-banner">
      <h2> <span> <span> Commercial opportunities </span> </span> </h2>
    </div></a>
    <div class="breather">
  <?php the_field('commercial-opportunities'); ?>
    </div>
  </div>
  <div class="col starts-at-full ends-at-one-third clr box">
    <a href="/foi/default.htm"><div class="heading-holding-banner">
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

<?php //} elseif (is_page('help-with-your-research')) { ?>
<?php } elseif (is_page('help-with-your-research') || strpos(strtolower(get_the_title()), 'help with your research') !== false) { ?>
<!-- Start of Help with your research layout -->

<div class="row" id="find-a-research-guide">
  <div class="col starts-at-full ends-at-full clr box">
    <div class="breather clr">
      <div class="float-left width-full-to-half margin-bottom-large">
        <h2 class="float-left margin-none pad-bottom-medium text-175pc width-full">Find a research guide</h2>
        <span class="no-print"><a href="/help-with-your-research/research-guides-keywords/" class="hue-yellow pad-small margin-right-small">Use our A-Z index</a> or select a subject below </span></div>
      <div class="float-left width-full-to-half margin-bottom-large no-print">
        <form method="get" action="/help-with-your-research/research-guides/" role="search" class="input-extended position-relative pad-small margin-medium hue-25-black">
          <label for="Search">Search all research guides</label>
          
          <input type="text" id="search" name="search" placeholder="Search all research guides" value="">
          <input type="submit" class="search-button-medium" alt="Submit search" value="">
        </form>
      </div>
      <div class="float-left pictorial-list grid-within-grid-six-item" id="index" style="display: block;"> 
        
        <!-- begin news loop -->
        
        <div class="resource-block"><a href="/help-with-your-research/research-guides/?research-category=family-history">
          <div class="has-background research-category-family"> </div>
          <h3 class="margin-bottom-small">Family history</h3>
          </a> </div>
        <div class="resource-block"><a href="/help-with-your-research/research-guides/?research-category=first-world-war">
          <div class="has-background research-category-firstworldwar"> </div>
          <h3 class="margin-bottom-small">First World War</h3>
          </a> </div>
        <div class="resource-block"><a href="/help-with-your-research/research-guides/?research-category=second-world-war-research">
          <div class="has-background research-category-secondworldwar"> </div>
          <h3 class="margin-bottom-small">Second World War</h3>
          </a> </div>
        <div class="resource-block"><a href="/help-with-your-research/research-guides/?research-category=military-and-maritime">
          <div class="has-background research-category-militarymaritime"> </div>
          <h3 class="margin-bottom-small">Military and maritime</h3>
          </a> </div>
        <div class="resource-block"><a href="/help-with-your-research/research-guides/?research-category=social-and-cultural-history">
          <div class="has-background research-category-socialcultural"> </div>
          <h3 class="margin-bottom-small">Social and cultural history</h3>
          </a> </div>
        <div class="resource-block"><a href="/help-with-your-research/research-guides/?research-category=criminals-courts-and-prisons">
          <div class="has-background research-category-criminalscourtsprisons"> </div>
          <h3 class="margin-bottom-small">Criminals, courts and prisons</h3>
          </a> </div>
        <div class="resource-block"><a href="/help-with-your-research/research-guides/?research-category=political-and-economic-history">
          <div class="has-background research-category-politicaleconomic"> </div>
          <h3 class="margin-bottom-small">Political and economic history</h3>
          </a> </div>
        <div class="resource-block"><a href="/help-with-your-research/research-guides/?research-category=foreign-and-colonial-history">
          <div class="has-background research-category-foreigncolonial"> </div>
          <h3 class="margin-bottom-small">Foreign and colonial history</h3>
          </a> </div>
        <div class="resource-block"><a href="/help-with-your-research/research-guides/?research-category=land-and-maps">
          <div class="has-background research-category-landmaps"> </div>
          <h3 class="margin-bottom-small">Land and maps</h3>
          </a> </div>
        <div class="resource-block"><a href="/help-with-your-research/research-guides/?research-category=medieval-early-modern-history">
          <div class="has-background research-category-medievalearlymodern"> </div>
          <h3 class="margin-bottom-small">Medieval and early modern history</h3>
          </a> </div>
        <div class="resource-block"><a href="/help-with-your-research/research-guides/?letter=&search=&research-category=records-for-current-legal-purposes">
          <div class="has-background research-category-currentlegal"> </div>
          <h3 class="margin-bottom-small">Records for current legal purposes</h3>
          </a> </div>
        <div class="resource-block"><a href="/help-with-your-research/research-guides/?letter=&search=&research-category=online">
          <div class="has-background research-category-onlinecollections"> </div>
          <h3 class="margin-bottom-small">Online collections</h3>
          </a> </div>
      </div>
    </div>
    <!-- end breather --> 
  </div>
  <!-- end col --> 
  
</div>
<!-- end row -->

<div class="row">
  <div class="col starts-at-full ends-at-two-thirds clr box">
    <?php the_field('how-to-view-our-records'); ?>
  </div>
  <!-- end col -->
  <div class="col starts-at-full ends-at-one-third clr box">
    <?php the_field('contact-us-for-advice'); ?>
  </div>
  <!-- end col --> 
</div>
<!-- end row -->

<div class="row">
  <div class="col starts-at-full ends-at-half clr box">
    <?php the_field('online-exhibitions'); ?>
    </div>
    <div class="col starts-at-full ends-at-half clr box">
    <?php the_field('other-research-tools'); ?>
    </div>
  </div>
<!-- end row -->

<div class="row">

<div class="col starts-at-full ends-at-one-third">
    <?php tna_rss( 'http://blog.nationalarchives.gov.uk/blog/category/records-research/feed/', 'http://blog.nationalarchives.gov.uk/', 'Read our latest blog posts', '', 'hwyr-1' ) ?>
</div>



  <div class="col starts-at-full ends-at-one-third clr box"> <a href="http://media.nationalarchives.gov.uk/" title="Play podcasts">
    <div class="image-container box-podcasts">
      <h2> <span> <span>Play podcasts</span> </span> </h2>
    </div>
    </a>
    <div class="breather">
      <?php
        if (have_rows( 'records-podcast-post' )){
          $podcast_format = '<h3><a href="%1$s" title="%2$s">%2$s</a></h3><p>%3$s</p>';
          $podcast_rows = get_field( 'records-podcast-post' );
          $podcast_content = $podcast_rows[0];

          echo sprintf( $podcast_format, 
              $podcast_content[ 'records-podcast-url' ], 
              $podcast_content[ 'records-podcast-title' ], 
              $podcast_content[ 'records-podcast-description' ]
          );
        }
      ?>
    </div>
  </div>
  <div class="col starts-at-full ends-at-one-third clr box"> <a href="http://media.nationalarchives.gov.uk/index.php/tag/webinars/" title="View webinars">
    <div class="image-container box-webinars">
      <h2> <span> <span>View webinars</span> </span> </h2>
    </div>
    </a>
    <div class="breather">
      <?php
      if (have_rows( 'records-landing-webinars' )){
          $webinar_format = '<h3><a href="%1$s" title="%2$s">%2$s</a></h3><p>%3$s</p>';
          $webinar_rows = get_field( 'records-landing-webinars' );
          $webinar_content = $webinar_rows[0];

          echo sprintf( $webinar_format,
              $webinar_content[ 'webinars-url' ],
              $webinar_content[ 'webinars-title' ],
              $webinar_content[ 'webinars-description' ]
          );
        }
      ?>
      <p class="margin-none"><a class="bullet-right" href="http://www.nationalarchives.gov.uk/whatson">See our upcoming webinars</a></p>
    </div>
  </div>
</div>

<div class="row">
  <div class="col starts-at-full ends-at-half clr box">
        <?php the_field('reading-old-documents'); ?>
    </div>
    <div class="col starts-at-full ends-at-half clr box">
        <?php the_field('start-here'); ?>
    </div>
</div>
<!-- end row -->

<div class="row">
  <div class="col starts-at-full ends-at-two-thirds box clr">
    <?php the_field('video-guides'); ?>
  </div>
  <div class="col starts-at-full ends-at-one-third clr box records-imgBox-citingDocs">
    <?php the_field('citing-documents'); ?>
  </div>
</div>
<!-- closing wrapper tag -->
</div>
<!-- End of Help with your research layout -->

 <?php }?>
      

<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
