<?php 
// Wordpress function provides access to the correct folder structure.
$templateDirectory = get_template_directory_uri();

?>

<?php  
// START OF WebTrends
// Copyright (c) 1996-2009 WebTrends Inc.  All rights reserved.
// Version: 8.6.2 
// Tag Builder Version: 3.0 
// Created: 8/4/2009 10:26:05 AM 
 ?>

<script src="<?php printf("%s/scripts/webtrends.js", $templateDirectory) ?>"></script> 

<?php 
// Warning: The two script blocks below must remain inline. Moving them to an external
// JavaScript include file can cause serious problems with cross-domain tracking.
?>

<script type="text/javascript">
	//<![CDATA[
	var _tag=new WebTrends();
	_tag.dcsGetId();
	//]]>>
</script> 
<script type="text/javascript">
	//<![CDATA[
	// Add custom parameters here.
	//_tag.DCSext.param_name=param_value;
	_tag.dcsCollect();
	//]]>>
</script>
<noscript>
	<div>
		<img id="DCSIMG" height="1" alt="DCSIMG" src="http://smartsource.nationalarchives.gov.uk/dcsdhhxq6000004rry7ab39or_9h9r/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=8.6.2" width=1 />
	</div>
</noscript>
<!-- END OF WebTrends --> 


<?php 
// START OF jQuery

// IE conditional comment to provide appropriate version of jQuery
// NOTE: despite jQuery 2.x being in an IE conditional comment, ALL non-IE browsers will download it
?>

<!--[if (gte IE 6)&(lte IE 8)]>
	<script src="<?php printf("%s/scripts/jquery-1.10.2.min.js", $templateDirectory) ?>"></script>
	<script src="<?php printf("%s/scripts/jquery-migrate-1.0.0.js", $templateDirectory) ?>"></script>
<![endif]--> 

<!--[if gte IE 9]><!--> 
<script src="<?php printf("%s/scripts/jquery-2.0.3.min.js", $templateDirectory) ?>"></script> 
<!--<![endif]--> 

<?php 
// END OF jQuery
?>

<?php
// START OF plugins
?>

<?php if (is_page_template( 'news-article.php' )): ?>
	<script src="<?php printf("%s/scripts/jquery.fitvids.js", $templateDirectory) ?>"></script>
	<script>
  $(document).ready(function(){

    $("#news-content").fitVids();
  });
</script> 	
<?php endif; ?>


<?php if (is_page_template( 'home.php' ) || is_page_template( 'level-1.php')): ?>
	<script src="<?php printf("%s/scripts/backstretch.js", $templateDirectory) ?>"></script> 	
<?php endif; ?>





<?php if (is_page_template( 'home.php' )): ?>
 <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>

<?php endif; ?>

<?php if (is_page_template( 'education-bundle.php' )): ?>
	<script src="<?php printf("%s/scripts/imagesloaded.pkgd.min.js", $templateDirectory) ?>"></script> 	
	<script src="<?php printf("%s/scripts/masonry.pkgd.min.js", $templateDirectory) ?>"></script> 	
	<script>
		var $container = $('#bundle-container');
		$container.imagesLoaded( function() {
			$container.masonry({
			  "isFitWidth": true,
			  itemSelector: '.bundle-tile',
			  transitionDuration: 0
			});
		}); 
	</script>
<?php endif; ?>

<?php if (is_page( 'information-management' ) ||
	is_page_template( 'index-page.php') ||
	is_page_template( 'index-page-hotfix.php') ||
	is_page_template( 'sub-page-with-children.php') ||
	is_page_template( 'resource-selector.php' ) ||
	is_page_template( 'tna-resource-filter.php' ) ||
	is_page_template( 'research-guide-video.php' ) ||
	is_page_template( 'news.php' ) ||
	is_page_template( 'keepers-gallery-template.php' ) ||
	( 'online-exhibitions' == get_post_type() ) ||
	is_page_template( 'resource-selector-form.php' )): ?>

	<script src="<?php printf("%s/scripts/jQuery.equalHeights.js", $templateDirectory) ?>"></script>
	<script>

		$('#index').fadeIn('slow');

		$(window).load(function() {
			equalheight('#index > div');
			equalheight('#online-exhibitions #index > div');
	 	 	equalheight('.pictorial-list > div');
		});


		$(window).resize(function(){
			equalheight('#index > div');
			equalheight('#online-exhibitions #index > div');
	  		equalheight('.pictorial-list > div');
		});
	</script>
<?php endif; ?>

<?php if (
		  is_page_template( 'research-guide-introductory.php') || 
		    is_page_template( 'research-guide-video.php' ) ||
		      is_page_template( 'research-guide-in-depth.php' ) ||
		       is_page_template( 'first-world-war-single.php' ) ||
		  is_page_template( 'resource-selector-form.php' ) ||
          in_category("Start here")

): ?>

	<script src="<?php printf("%s/scripts/jquery.fitvids.js", $templateDirectory) ?>"></script>

<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".breather").fitVids();
  });
</script>


<?php endif; ?>
<?php
// END OF plugins
?>

<?php 
// START OF TNA in-house libraries
?>
<script src="<?php printf("%s/scripts/tna-definitions.js", $templateDirectory) ?>"></script>
<script src="<?php printf("%s/scripts/tna-bindings.js", $templateDirectory) ?>"></script>
<script src="<?php printf("%s/scripts/tna-run-on-page-load.js", $templateDirectory) ?>"></script>

<?php 
// END OF TNA in-house libraries
?>

<?php 

if ( is_page_template('research-guide-filter.php')  || is_page_template('research-guide-filter-lh.php') || is_page_template('research-guide-in-depth.php') || is_page_template('research-guide-introductory.php') || is_page_template('research-guide-keywords.php')): ?>
		<script src="<?php printf("%s/scripts/research-guides-filter.js", $templateDirectory) ?>"></script>
<?php endif; ?>

<?php if ( is_page_template('business-plan.php' )): ?>
<script src="<?php printf("%s/scripts/tabify.js", $templateDirectory) ?>"></script>
<script src="<?php printf("%s/scripts/jquery.bxslider.min.js", $templateDirectory) ?>"></script>
<script>
	$( document ).ready(function() { // All content must be placed within this IIFE.
		// Apply the tabify() plugin
		$("ul[role='tablist'] li").tabify();
	}); // All content must be placed within this IIFE.
</script>
<script>
	$(document).ready(function(){
		$('.bp-slides').bxSlider({
			auto: false,
			nextText:'>',
			prevText:'<',
			speed: 3000,
			pause: 7000,
			autoHover: true,
			infiniteLoop: true,
			keyboardEnabled: true,
			boolean: true,
			preventDefaultSwipeX:true,
			adaptiveHeight: true,
			onSlideNext: function () {
				$('.bx-next').addClass('active');
				$('.bx-prev').removeClass('active');
			},
			onSlidePrev: function () {
				$('.bx-prev').addClass('active');
				$('.bx-next').removeClass('active');
			}
		});

	});
</script>
<?php endif; ?>

<script src="http://www.nationalarchives.gov.uk/scripts/footer-img.js" type="text/javascript"></script>

<?php if (is_page( '20-year-rule' )): ?>
	<script src="<?php bloginfo('template_url'); ?>/scripts/flexslider.min.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			// A crucial line of text to remove the id attribute from #left-nav-content. Set in base with an important that can't be overwritten
			$('div#left-nav-content').attr('id','right-hand-content');
			$('.flexslider').flexslider({
				animation: "slide",
				prevText: "Previous",
				nextText: "Next",
				slideshow: true,//change it to 'false' if you want stop auto start slideshow.
				manualControls: "#new-container-for-flexslider-controls li"
			});
		});

	</script>

<?php endif; ?>

<?php

if ( is_page_template('online-exhibition-viewer.php')): ?>

<script src="<?php bloginfo("stylesheet_directory");?>/scripts/jquery.bxslider.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_directory");?>/css/online-exhibition.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_directory");?>/css/jquery.bxslider.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<!--[if lte IE 9]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/online-exhibition-ie.css">
<![endif]-->


<script type="text/javascript">
    jQuery(document).ready(function($) {

        var dslider=  $('.bxslider').bxSlider({
            minSlides: 1,
            maxSlides: 4,
            slideWidth: 200,
            slideMargin: 10, pager: true,
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




</script>

<?php endif; ?>

<?php

if ( is_page_template('online-exhibition.php')): ?>


<script src="<?php bloginfo("stylesheet_directory");?>/scripts/masonry.pkgd.min.js"></script>
<script src="<?php bloginfo("stylesheet_directory");?>/scripts/imagesloaded.pkgd.min.js"></script>
<?php endif; ?>

<!-- Online Exhibitions -->
<?php if (( 'online-exhibitions' == get_post_type() )): ?>
	<script>
		$(function(){
			$('#formOnlineExhibitions').on('change', 'input',function(e){
				$form = $(e.delegateTarget);
				$form.submit();
				$form.find('input').prop('disabled', 'disabled');
			});
		});
	</script>
<?php endif; ?>
