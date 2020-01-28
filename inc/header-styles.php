<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/base-sass.css.min?20170411">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/images.css">

<?php if (is_page_template( 'education-bundle.php' ) || is_page_template( 'education-bundle-document-viewer.php' )): ?>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/education-bundles-temp.css">
<?php endif; ?>

<?php if (is_page_template( 'news.php' )): ?>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/news/news.css">
<?php endif; ?>

<?php if (is_page_template( 'research-guide-filter.php' ) || is_page_template( 'research-guide-filter-lh.php' ) || is_page_template( 'research-guide-keywords.php' )): ?>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/research-guides/research-guide-filter.css">
<?php endif; ?>

<?php if ( is_page_template( 'research-guide-filter-lh.php' ) || is_page_template( 'research-guide-keywords.php' )): ?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/research-guides/research-guide-filter-new.css">
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/research-guides/research-guide-filter-ie.css">
<![endif]-->
<?php endif; ?>

<?php if (is_page_template( 'research-guide-video.php') || is_page_template( 'level-1.php' )): ?>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/research-guides/research-guide-video.css">
<?php endif; ?>

<?php if (is_page_template( 'centenary-map-world.php') || is_page_template( 'centenary-map-region.php') || is_page_template( 'centenary-map-glossary.php') || is_page_template( 'centenary-map-entry.php')): ?>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/centenary-map/map.css">
	<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/centenary-map/map-ie8.css">
	<![endif]-->
	<!--[if IE 9]>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/centenary-map/map-ie9.css">
	<![endif]-->
<?php endif; ?>

<?php if ( is_404() ):?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/404.css">
<?php endif;?>

<?php
if (is_page_template('education-lessons.php')) {
	include 'education-lesson-at-a-glance.php';
	?> <link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/education-resources.css"> <?php
}

?>

<link rel='stylesheet' id='tna-google-fonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400i%2C700%2C700i%7CRoboto+Mono%3A400%2C700&#038;display=swap&#038;ver=5.0.6' type='text/css' media='all' />
<!-- Fav icon -->
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/favicon.png">
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/favicon.png">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/ie7.css">
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/ie8.css">
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/ie9.css">
<![endif]-->


<?php if (is_page('20-year-rule')): ?>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/20-year-rule-flex.css">
<?php endif; ?>
