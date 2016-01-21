<?php
/*
Template Name: Home
*/

get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="container no-breadcrumb" id="page_wrap" role="main">
  <div class="row banner large" id="home-banner">
    <article class="col starts-at-full clr">
        <div class="sprite icon-img-desc position-top-right">
          <div class="image-description" id="home-img-desc" style="display: block;">
          </div>
      </div>
      <h1><span><span>
        <?php the_field('homepage-h1'); ?>
        </span></span></h1>
      <div class="overlay width-full">
        <?php the_field('homepage-banner'); ?>
      </div>
      </article>
    </div>
    

    <!--


    // Newsletter sign-up

  <div class="row">
    <div class="col starts-at-full ends-at-full box banner-newsletter">
            <span class="float-left pad-medium">
          <h2 class="margin-none pad-none">Sign up to our enewsletter for regular news and offers</h2>
        </span>
        <form name="signup" id="banner-form" class="pad-medium" action="http://dmtrk.co.uk/signup.ashx" method="post"><input type="hidden" name="addressbookid" value="281378"><input type="hidden" name="userid" value="28895"><input type="hidden" name="ReturnURL" value="http://nationalarchives.gov.uk/news/subscribe-confirmation.htm"><input type="email" id="Email" name="Email" required placeholder="Enter your email address"><input id="newsletterSignUp" type="submit" value="Sign up" class="button"></form>
    </div>
  </div>

  -->


<div class="row">
  <?php the_field('homepage-col-1'); ?>
  <?php the_field('homepage-col-2'); ?>
  <?php the_field('homepage-col-3'); ?>
</div>
<div class="row">


  <?php /*the_field('homepage-col-4'); */?>


<div class="col starts-at-full ends-at-half clr box">
  <div class="heading-holding-banner">
    <h2>
      <span><span>What's new?</span></span>
    </h2>
  </div>
  <div class="position-top-right">
    <a href="https://twitter.com/UkNatArchives" target="_blank" title="External website - link opens in a new window">
      <div class="sprite icon-twitter float-left"></div>
    </a>
    <a href="http://www.facebook.com/TheNationalArchives" target="_blank" title="External website - link opens in a new window">
      <div class="sprite icon-facebook float-left"></div></a><a href="/rss/"><div class="sprite icon-rss float-left"></div>
    </a>
  </div>
  <div class="breather float-left">
  <div class="grid-within-grid-two-item ">
      <div>
        <h3 class="margin-none">
          <a href="/about/news/">News</a>
        </h3>
        <ul class="no-bullet">


<?php


// New query to grab top 3 stories with the category 'News Featured Home'
 $newsquery = new WP_Query( 'category_name=news-featured-home&posts_per_page=3&orderby=menu_order date&order=ASC');

 $strpostcount =  $newsquery->found_posts;
if ($strpostcount == 0){
// If no stories found with category 'News Featured Home', show top 3 stories in 'News' as a back-up
   wp_reset_query();
    $newsquery = new WP_Query( 'category_name=news&posts_per_page=3&orderby=menu_order&order=DESC');
}

while ( $newsquery->have_posts() ) :  $newsquery->the_post();

  if (is_file(get_template_directory() . '/inc/news-timed-release.php')) {
    include 'inc/news-timed-release.php';
  }

  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id());

if($newsquery->current_post == 0 && !is_paged()) {
?>
<li><a href="<?php the_permalink();?>"><img src="<?php echo($image_url[0]);?>" alt="<?php the_title();?>" class="news-image no-border"><?php the_title();?></a><br /><span class="text-small"><?php the_time('l j F Y') ?></span></li>

<?php }else{ ?>
<li><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a><br><span class="text-small"><?php the_time('l j F Y') ?></span></li>

<?php
}
endwhile;
wp_reset_postdata();

?>


        </ul>
    </div>
      <div>
                <h3 class="margin-none">
<a href="/visit/events.htm">What's on</a></h3>
        <ul class="no-bullet ">

<?php
if (have_rows( 'homepage-event-items' )) {
	$event_rows = get_field('homepage-event-items');
	$i = 0;
	foreach($event_rows as $row) {
		$newwindow = ( $row['homepage-event-new-window'] )? ' target="_blank" title="External website - link opens in a new window"':'';
		$event_format_main = '<li><div id="newstitle"><a href="%1$s" ' . $newwindow . ' ><img src="%2$s" alt="%3$s" class="news-image no-border">%3$s</a> <span class="important">%4$s</span><br><span class="newsdate">%5$s</span></div></li>';
		$event_format_sub = '<li><a href="%1$s" ' . $newwindow . ' >%2$s</a> <span class="important">%3$s</span><br><span class="newsdate">%4$s</span></li>';
		if ($i === 0) {
			echo sprintf(
				$event_format_main,
				$row[ 'homepage-event-url' ],
				$row[ 'homepage-event-image-url' ],
				$row[ 'homepage-event-title' ],
				$row[ 'homepage-event-cost' ],
				$row[ 'homepage-event-date' ]
			);
		} else {
			echo sprintf(
				$event_format_sub,
				$row[ 'homepage-event-url' ],
				$row[ 'homepage-event-title' ],
				$row[ 'homepage-event-cost' ],
				$row[ 'homepage-event-date' ]
			);
		}
		$i++;
	}
}
?>

        </ul>
      </div>
  </div>
</div>

</div>






<div class="col starts-at-full ends-at-half box clr">
  <a href="/visit/default.htm" title="Visit Us">
    <div class="heading-holding-banner">
      <h2>
        <span><span>Visit us</span></span>
      </h2>
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
      <li><a href="/about/visit-us/researching-here/">Researching here</a></li>
      <li><a href="/about/visit-us/opening-times/">Opening times</a></li>
    </ul>
	<?php the_field('homepage-col-5'); ?>
    <address>The National Archives <br/> Kew, Richmond <br/> Surrey TW9 4DU </address>
  </div>
</div>





</div>
<div class="row">
 <!-- <div class="col starts-at-full ends-at-one-third box-blog">
    <a href="http://blog.nationalarchives.gov.uk/" title="Latest blog post"><div class="image-container">
      <h2><span><span>Read our latest blog posts</span></span></h2>
    </div>
    </a>
      <?php /*
// Latest blog post coming from TNA blog, complete automagic

$blog_url = 'http://blog.nationalarchives.gov.uk/feed/';

$rawFeed = file_get_contents($blog_url);
$xml = new SimpleXmlElement($rawFeed);

  $ns = array
(

    'dc' => 'http://purl.org/dc/elements/1.1/'
);

$channel = array();
$channel['title']       = $xml->channel->title;
$channel['link']        = $xml->channel->link;
$channel['description'] = $xml->channel->description;
$channel['pubDate']     = $xml->pubDate;
$channel['timestamp']   = strtotime($xml->pubDate);
$channel['generator']   = $xml->generator;
$channel['language']    = $xml->language;



 $i=0;
foreach ($xml->channel->item as $item)
{
        $article = array();
        $article['title'] = $item->title;
        $article['link'] = $item->link;
        $article['pubDate'] = $item->pubDate;
        $article['description'] = (string) trim($item->description);
         $dc      = $item->children($ns['dc']);

		 $article['creator'] = (string) $dc->creator;


        foreach ($dc->subject as $subject)
                $article['subject'][] = (string)$subject;
		$pubdate = $article['pubDate'];



	if ($i==0){


  $cleandate = date("l j F Y", strtotime($pubdate));
   $pubdate = $cleandate;
		?>
      <h3><a href="<?php echo  $article['link'];?>"><?php echo  $article['title'];?></a></h3>
      <p class="subtext"><?php echo  $pubdate;?> | <?php echo  $article['creator'];?></p> </div>
      <p><?php echo  $article['description'];?></p>
      <?php
	}else{

	}
		$i++;
}


*/ ?>
  </div> -->


<div class="col starts-at-full ends-at-one-third">
    <?php tna_rss( 'http://blog.nationalarchives.gov.uk/feed/', 'http://blog.nationalarchives.gov.uk/', 'Read our latest blog posts', '', 'home-1' ) ?>
</div>



<div class="col starts-at-full ends-at-one-third position-relative">

  <a href="http://media.nationalarchives.gov.uk/" title="Latest podcasts and videos"> <div class="sprite icon-play position-bottom-right-image"></div>
    <div class="image-container box-media">
      <h2>
        <span><span>Play podcasts and videos</span></span>
      </h2>
    </div>
  </a>


  <?php

if (have_rows( 'homepage-col-7-podcast' )){
    $podcast_format = '<h3><a href="%1$s" title="%2$s">%2$s</a></h3><p>%3$s</p>';
    $podcast_rows = get_field( 'homepage-col-7-podcast' );
    $podcast_content = $podcast_rows[0];

    echo sprintf( $podcast_format,
        $podcast_content[ 'homepage-podcast-url' ],
        $podcast_content[ 'homepage-podcast-title' ],
        $podcast_content[ 'homepage-podcast-description' ]
      );
}
  ?>

</div>

  <?php the_field('homepage-col-8'); ?>

</div>


<div class="row">

<div class="col starts-at-full ends-at-one-third">
	<a href="https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewHome" title="Image library - images available to download now" onClick="dcsMultiTrack('DCS.dcsuri','/imagelibrary/','WT.ti','Homepage - Image Library');">
	<div class="image-container box-image-library">
      <h2>
        <span><span>Image library</span></span>
      </h2>
    </div>
  </a>

  <?php

if (have_rows( 'homepage-col-9-imagelib' )){
    $str_format = '<h3><a href="%1$s" title="%2$s">%2$s</a></h3><p>%3$s</p>';
    $arr_rows = get_field( 'homepage-col-9-imagelib' );
    $arr_content = $arr_rows[0];

    echo sprintf( $str_format,
        $arr_content[ 'homepage-imagelib-url' ],
        $arr_content[ 'homepage-imagelib-title' ],
        $arr_content[ 'homepage-imagelib-description' ]
      );
}
  ?>


  <?php //the_field('homepage-col-9');?>
</div>



<div class="col starts-at-full ends-at-one-third">
	<a href="http://bookshop.nationalarchives.gov.uk/" title="Bookshop" onClick="dcsMultiTrack('DCS.dcsuri','/bookshop/','WT.ti','Homepage - Bookshop');">
	<div class="image-container box-bookshop">
      <h2>
        <span><span>Bookshop</span></span>
      </h2>
    </div>
  </a>

  <?php

if (have_rows( 'homepage-col-10-bookshop' )){
    $str_format = '<h3><a href="%1$s" title="%2$s">%2$s</a></h3><p>%3$s</p>';
    $arr_rows = get_field( 'homepage-col-10-bookshop' );
    $arr_content = $arr_rows[0];

    echo sprintf( $str_format,
        $arr_content[ 'homepage-bookshop-url' ],
        $arr_content[ 'homepage-bookshop-title' ],
        $arr_content[ 'homepage-bookshop-description' ]
      );
}
  ?>


  <?php //the_field('homepage-col-10'); ?>
</div>




<div class="col starts-at-full ends-at-one-third">
	<a href="http://www.nationalarchives.gov.uk/first-world-war/" title="Explore First World War 100" onClick="dcsMultiTrack('DCS.dcsuri','/bookshop/','WT.ti','Homepage - Bookshop');">
	<div class="image-container box-exhibition">
      <h2>
        <span><span>Explore First World War 100</span></span>
      </h2>
    </div>
  </a>

  <?php

if (have_rows( 'homepage-col-11-community' )){
    $str_format = '<h3><a href="%1$s" title="%2$s">%2$s</a></h3><p>%3$s</p>';
    $arr_rows = get_field( 'homepage-col-11-community' );
    $arr_content = $arr_rows[0];

    echo sprintf( $str_format,
        $arr_content[ 'homepage-community-url' ],
        $arr_content[ 'homepage-community-title' ],
        $arr_content[ 'homepage-community-description' ]
      );
}
  ?>

  <?php //the_field('homepage-col-11'); ?>
</div>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
