<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until <div id="content">
 *
 * @package tna-dev
 */

redirect_if_404();

?>
<!DOCTYPE html>
<html lang="en-gb" class="no-js">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Metadata -->
<meta charset="utf-8">

<?php wp_head(); ?>

<?php output_meta_keywords(); ?>
<?php output_meta_description(); ?>
<meta scheme="DCTERMS.URI" content="https://www.nationalarchives.gov.uk/default.htm" name="DC.identifier">
<meta content="The National Archives - Homepage" name="DC.title">
<meta content="https://www.nationalarchives.gov.uk/legal/copyright.htm" name="DC.rights">
<meta content="The National Archives" name="DC.publisher">
<meta content="The National Archives" name="DC.creator">
<meta content="en-GB" name="DC.language">
<meta scheme="DCTERMS.IMT" content="text/html" name="DC.format">
<meta scheme="DCTERMS.DCMIType" content="text" name="DC.type">
<meta scheme="DCTERMS.W3CDTF" content="<?php echo get_the_date('Y-m-d'); ?>" name="DCTERMS.created">
<meta scheme="DCTERMS.W3CDTF" content="<?php echo the_modified_date('Y-m-d'); ?>" name="DCTERMS.modified">
<meta content="Public Records, National Archives, History, Government, Documents" name="DC.subject">
<meta content="1900-2000" name="DCTERMS.temporal">
<meta content="England,Wales,UnitedKingdom" name="DCTERMS.spatial">
<meta content="The National Archives is the UK government's official archive. Our main duties are to preserve Government records and to set standards in information management and re-use." name="DC.description">
<meta content="initial-scale = 1.0" name="viewport">
<meta content="MSHTML 6.00.6000.21352" name="GENERATOR">
<?php /* Feeds */ ?>
<link title="The National Archives - latest news" href="/rss/news.xml" type="application/rss+xml" rel="alternate">
<link title="The National Archives - new Freedom of Information releases" href="/rss/foireleasesnews.xml" type="application/rss+xml" rel="alternate">
<link title="The National Archives - podcast series" href="/rss/podcasts.xml" type="application/rss+xml" rel="alternate">

<?php require_once('inc/header-styles.php') ?>
<?php
if (function_exists('the_field')){
	the_field('custom-css'); 
}
?>
<?php require_once('inc/header-scripts.php') ?>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8DSWV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
if ( function_exists('tna_notification_banner') ){
	tna_notification_banner();
}
?>
<?php banner_messages(); ?>
<div id="page-header" role="banner"><a id="skip-to-main-content" href="#breadcrumb-holder">Skip to Main Content</a>
    <section class="row container">
      <article class="col starts-at-full ends-at-half clr" id="logo-holder"> 
          <div id="mega-menu-mobile">
      <button aria-label="Toggle menu"></button>
    </div>
    <a href="/" title="Go to The National Archives homepage"> 
    <img src="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/logo-white.png" srcset="<?php echo str_replace( home_url(), '', get_template_directory_uri()); ?>/images/tna-horizontal-white-logo.svg" alt="The National Archives"  id="logo">
    </a>
    </article>
      <article class="col starts-at-full ends-at-half clr">
        <form action="/search/results" method="get" id="mobileGlobalSearch">
          <div id="mobile-search-outer-wrapper">
            <div id="mobile-search-wrapper">
              <input type="text" id="mobile-search-field" placeholder="Search our website..." name="_q" required aria-required="true" >
              <input type="submit" value="">
            </div>
            <div id="changeDestination">
              <input checked type="radio" class="mobileSearchDestinationOption" name="searchDestination" id="websiteSearch" data-target="/search/results" data-placeholder="Search our website..." data-fieldName="_q"/>
              <label for="websiteSearch">Search our website</label>
              <input type="radio" class="mobileSearchDestinationOption" name="searchDestination" id="catalogueSearch" data-target="https://discovery.nationalarchives.gov.uk/results/r" data-placeholder="Search our records..." data-fieldName="_q" />
              <label for="catalogueSearch">Search our records</label>
            </div>
          </div>
        </form>

        <div id="search-field-wrapper">
          <form action="/search/results" method="get" id="globalSearch">
            <span id="scope-selector">&nbsp;</span>
            <input type="text" class="search-field" placeholder="Search our website..." id="tnaSearch" name="_q" required aria-required="true" >
            <input type="submit" class="search-button" id="search-button" value="">
          </form>
          <ul id="search-options">
            <li><a href="#" class="formDestinationChanger" data-target="/search/results" data-placeholder="Search our website..." data-fieldName="_q" role="button" aria-label="Change form destination to search the website">Search our website</a></li>
            <li><a href="#" class="formDestinationChanger" data-target="https://discovery.nationalarchives.gov.uk/SearchUI/s/res" data-placeholder="Search our records..." data-fieldName="_q" role="button" aria-label="Change form destination to search the catalogue">Search our records</a></li>
          </ul>
        </div>
      </article>
    </section>
    <section class="row pull-down">
      <article class="col starts-at-full clr">
        <div id="mega-menu-pull-down">
          <button aria-label="Toggle menu">Menu</button>
        </div>
      </article>
    </section>
  </div>
  <!-- end container --> 
  <!-- end logo and search --> 
  
	<!-- NORMAL mega menu -->
    <nav id="nav" role="navigation">
        <div class="mega-menu">
            <?php
                if (file_exists(PATH_TO_MEGA_MENU_HTML)) {
                    include PATH_TO_MEGA_MENU_HTML;
                } else {
                    get_template_part( 'inc/mega-menu' );
                }
            ?>
        </div>
    </nav>
<!-- end mega-menu --> 


<!-- end page-header --> 
