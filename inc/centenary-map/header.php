<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<?php //wp_title( '|', true, 'right' ); ?>
<meta name="description" content=""/>
<meta name="keywords" content="<?php
	$posttags = get_the_tags();
	foreach((array)$posttags as $tag) {
		$show_tags .= $tag->name . ',';
	}{
		$rel_art .= rtrim($show_tags , ',');{
		}
		print $rel_art;
	}
	?>"/>
<meta name="author" content=""/>
<?php
	global $post;

$metadesc = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
$post_description = $metadesc;
   
if ($post_description == ""){
	$post = $wp_query->post;
    $post_object = get_post($post->ID); // retrieves post object
    $content = $post_object->post_content; // echoes post_content
    $content = apply_filters( 'the_content', $content );
	//$content = wp_trim_words( $content, $num_words = 55, $more = '...' );
	$post_description = substr($content, 0, 160);
	$post_description = $post_description."...";
	$post_description = preg_replace("/<.*?>/", "", $post_description);
}
   
	?>
<?php wp_head();?>
<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1">
<title>First World War: A global view</title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/centenary-map/style.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/centenary-map/tooltipster.css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/centenary-map/jquery.mCustomScrollbar.css" />
<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<link href='https//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico" />
<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico" />
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/centenary-map/style_ie8.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/centenary-map/style_ie7.css" />
<![endif]-->

<!-- Scripts -->
<script src="<?php bloginfo('template_url'); ?>/scripts/modernizr.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/scripts/centenary-map/jquery-1.10.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/centenary-map/jquery-ui-1.10.4.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/centenary-map/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/centenary-map/jquery.mousewheel.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/centenary-map/scripts.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/scripts/centenary-map/picturefill.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/centenary-map/jquery.zoomooz.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/centenary-map/jquery.tooltipster.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/centenary-map/jquery.mCustomScrollbar.concat.min.js"></script>
<script>

// Picture element HTML5 shiv
document.createElement( "picture" );
</script>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-2827241-1']);
_gaq.push(['_setDomainName', 'nationalarchives.gov.uk']);
_gaq.push(['_trackPageview']);
(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

</head>
<body>
<a id="top" name="top"></a>
<div class="wrapper">
<div class="header">
<a href="https://www.nationalarchives.gov.uk" title="Visit The National Archives' website" target="_blank"><div class="logo"><img src="<?php bloginfo('template_url'); ?>/images/centenary-map/tna-centenary-the-national-archives-logo.png" alt="The National Archives logo" border="0"/></div></a>
  <div class="hide-text title">First World War: A global view</div>
 <a href="https://www.nationalarchives.gov.uk/first-world-war/" title="Visit The National Archives' First World War 100 website" target="_blank"> <div class="hide-text ww100">First World War 100</div></a>
</div>
