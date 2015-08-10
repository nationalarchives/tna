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
<html lang="en-gb">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Metadata -->
<meta charset="utf-8">
<?php wp_head(); ?>
<?php output_meta_keywords(); ?>
<?php output_meta_description(); ?>
<meta scheme="DCTERMS.URI" content="http://www.nationalarchives.gov.uk/default.htm" name="DC.identifier">
<meta content="The National Archives - Homepage" name="DC.title">
<meta content="http://www.nationalarchives.gov.uk/legal/copyright.htm" name="DC.rights">
<meta content="The National Archives" name="DC.publisher">
<meta content="The National Archives" name="DC.creator">
<meta content="en-GB" name="DC.language">
<meta scheme="DCTERMS.IMT" content="text/html name=DC.format">
<meta scheme="DCTERMS.DCMIType" content="Text name=DC.type">
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
<?php the_field('custom-css'); ?>
<?php require_once('inc/header-scripts.php') ?>
</head>

<body>
<?php banner_messages(); ?>
<div id="page-header" role="banner"><a id="skip-to-main-content" href="#breadcrumb-holder">Skip to Main Content</a>
    <section class="row container">
      <article class="col starts-at-full ends-at-half clr" id="logo-holder"> 
          <div id="mega-menu-mobile">
      <button aria-label="Toggle menu"></button>
    </div>
    <a href="http://www.nationalarchives.gov.uk" title="Go to The National Archives homepage"> <img src="<?php bloginfo('template_url'); ?>/images/global/logo-white.png" alt="The National Archives" id="logo"/> </a>
    </article>
      <article class="col starts-at-full ends-at-half clr">
        <form action="http://www.nationalarchives.gov.uk/search/quick_search.aspx" method="get" id="mobileGlobalSearch">
          <div id="mobile-search-outer-wrapper">
            <div id="mobile-search-wrapper">
              <input type="text" id="mobile-search-field" placeholder="Search our website..." name="search_text" required aria-required="true" >
              <input type="submit" value="">
            </div>
            <div id="changeDestination">
              <input checked type="radio" class="mobileSearchDestinationOption" name="searchDestination" id="websiteSearch" data-target="http://www.nationalarchives.gov.uk/search/quick_search.aspx" data-placeholder="Search our website..." data-fieldName="search_text"/>
              <label for="websiteSearch">Search our website</label>
              <input type="radio" class="mobileSearchDestinationOption" name="searchDestination" id="catalogueSearch" data-target="http://discovery.nationalarchives.gov.uk/SearchUI/s/res" data-placeholder="Search our records..." data-fieldName="_q" />
              <label for="catalogueSearch">Search our records</label>
            </div>
          </div>
        </form>

        <div id="search-field-wrapper">
          <form action="http://www.nationalarchives.gov.uk/search/quick_search.aspx" method="get" id="globalSearch">
            <span id="scope-selector">&nbsp;</span>
            <input type="text" class="search-field" placeholder="Search our website..." id="tnaSearch" name="search_text" required aria-required="true" >
            <input type="submit" class="search-button" id="search-button" value="">
          </form>
          <ul id="search-options">
            <li><a href="#" class="formDestinationChanger" data-target="http://www.nationalarchives.gov.uk/search/quick_search.aspx" data-placeholder="Search our website..." data-fieldName="search_text" role="button" aria-label="Change form destination to search the website">Search our website</a></li>
            <li><a href="#" class="formDestinationChanger" data-target="http://discovery.nationalarchives.gov.uk/SearchUI/s/res" data-placeholder="Search our records..." data-fieldName="_q" role="button" aria-label="Change form destination to search the catalogue">Search our records</a></li>
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
	<div class="mega-menu" role="navigation">
		<section class="row">
			<nav class="col mega-menu-group clr">
				<div>
					<h3><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/About us ','WT.ti','Menu - About us ');" href="/about">About us</a></h3>
					<ul>
						<li class="mobileOnly"><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/About us ','WT.ti','Menu - About us ');" href="/about/">About us home</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Our role ','WT.ti','Menu - Our role ');" href="/about/our-role.htm">Our role</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Visit us ','WT.ti','Menu - Visit us ');" href="/visit/">Visit us</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Opening times ','WT.ti','Menu - Opening times ');" href="/visit/times.htm">Opening times</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Jobs ','WT.ti','Menu - Jobs ');" href="/jobs/">Jobs</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Get involved ','WT.ti','Menu - Get involved ');" href="/get-involved/default.htm">Get involved</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/News ','WT.ti','Menu - News ');" href="/news/">News</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Press room ','WT.ti','Menu - Press room ');" href="/pressroom/">Press room</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Commercial opportunities ','WT.ti','Menu - Commercial opportunities ');" href="/about/commercial-opportunities.htm">Commercial opportunities</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Education ','WT.ti','Menu - Education ');" href="/education/">Education</a></h3>
					<ul>
						<li class="mobileOnly"><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Education ','WT.ti','Menu - Education ');" href="/education">Education home</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Topics ','WT.ti','Menu - Topics ');" href="/education/sessions-and-resources/?time-period=medieval,early-modern,empire-and-industry,victorians,early-20th-century,interwar,second-world-war,postwar">Time periods</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Lessons ','WT.ti','Menu - Lessons ');" href="/education/sessions-and-resources/?resource-type=lesson">Lessons</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Workshops ','WT.ti','Menu - Workshops ');" href="/education/sessions-and-resources/?resource-type=workshop">Workshops</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Videoconferences ','WT.ti','Menu - Videoconferences ');" href="/education/sessions-and-resources/?resource-type=video-conferences">Videoconferences</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Virtual classroom ','WT.ti','Menu - Virtual classroom ');" href="/education/sessions-and-resources/?resource-type=virtual-classroom">Virtual classroom</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Professional development ','WT.ti','Menu - Professional development ');" href="/education/teachers/professional-development/">Professional development</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/For teachers ','WT.ti','Menu - For teachers ');" href="/education/teachers/">For teachers</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/For students ','WT.ti','Menu - For students ');" href="/education/students/">For students</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/help-with-your-research ','WT.ti','Menu  Help with your research home ');" href="/help-with-your-research">Help with your research</a></h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/help-with-your-research ','WT.ti','Menu  Help with your research home ');" href="/help-with-your-research/">Help with your research home</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Search Discovery, our catalogue ','WT.ti','Menu - Search Discovery, our catalogue ');" href="http://discovery.nationalarchives.gov.uk/SearchUI/">Search Discovery, our catalogue</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Start your research here ','WT.ti','Menu - Start your research here ');" href="/help-with-your-research/start-here/">Start your research here</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/help-with-your-research/research-guides-keywords/ ','WT.ti','Menu - Research guides A-Z ');" href="/help-with-your-research/research-guides-keywords/">Research guides A-Z</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/online-collections ','WT.ti','Menu - Online collections ');" href="/help-with-your-research/research-guides/?research-category=online">Online collections</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Catalogues and online records ','WT.ti','Menu - Catalogues and online records ');" href="/records/catalogues-and-online-records.htm">Full list of catalogues and online records</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/UK Government Web Archive ','WT.ti','Menu - UK Government Web Archive ');" href="/webarchive/">UK Government Web Archive</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Certificates of British Citizenship ','WT.ti','Menu - Certificates of British Citizenship ');" href="/help-with-your-research/research-guides/certificates-of-british-citizenship-1949-1986/">Certificates of British Citizenship</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Record copying ','WT.ti','Menu - Record copying ');" href="/recordcopying/">Record copying</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3 class=hyphenate><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Information Management ','WT.ti','Menu - Information Management ');" href="/information-management/">Information management</a></h3>
					<ul>
						<li class="mobileOnly"><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Information Management ','WT.ti','Menu - Information Management ');" href="/information-management/">Information management home</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Guidance and standards A-Z ','WT.ti','Menu - Guidance and standards A-Z ');" href="/information-management/browse-guidance-standards/">Guidance and standards A-Z</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Crown copyright ','WT.ti','Menu - Crown copyright ');" href="/information-management/re-using-public-sector-information/copyright/">Copyright</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Re-using PSI ','WT.ti','Menu - Re-using PSI ');" href=" /information-management/manage-information/">How to manage your information</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Re-using PSI ','WT.ti','Menu - Re-using PSI ');" href="/information-management/re-using-public-sector-information/">Re-using PSI</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Official publishing ','WT.ti','Menu - Official publishing ');" href="/information-management/producing-official-publications/">Producing official publications</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Records selection and transfer ','WT.ti','Menu - Records selection and transfer ');" href="/information-management/legislation/">Legislation and regulations</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Training ','WT.ti','Menu - Training ');" href="/information-management/training/">Training</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Archives sector ','WT.ti','Menu - Archives sector ');" href="/archives-sector">Archives sector</a></h3>
					<ul>
						<li class="mobileOnly"><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Archives sector ','WT.ti','Menu - Archives sector ');" href="/archives-sector">Archives sector home</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Current initiatives ','WT.ti','Menu - Current initiatives ');" href="/archives-sector/current-initiatives.htm">Current initiatives</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Developing your archives ','WT.ti','Menu - Developing your archives ');" href="/archives-sector/developing-your-archives.htm">Developing your archives</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Finding funding ','WT.ti','Menu - Finding funding ');" href="/archives-sector/finding-funding.htm">Finding funding</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Share your expertise ','WT.ti','Menu - Share your expertise ');" href="/archives-sector/share-your-expertise.htm">Share your expertise</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Policies and strategies ','WT.ti','Menu - Policies and strategies ');" href="/archives-sector/policy-strategy.htm">Policies and strategies</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Statistics, studies and reports ','WT.ti','Menu - Statistics, studies and reports ');" href="/archives-sector/statistics-studies-reports.htm">Statistics, studies and reports</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Historical Manuscripts Commission ','WT.ti','Menu - Historical Manuscripts Commission ');" href="/archives-sector/hmc.htm">Historical Manuscripts Commission</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3>More...</h3>
					<ul>
						<li class="mobileOnly"><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/More? ','WT.ti','Menu - More? ');" href="/about/">More...</a></li>
						<li class="image"><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Bookshop ','WT.ti','Menu - Bookshop ');" href="/bookshop/">Bookshop</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Image library ','WT.ti','Menu - Image library ');" href="/imagelibrary/">Image library</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Blog ','WT.ti','Menu - Blog ');" href="/blog/">Blog</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Labs ','WT.ti','Menu - Labs ');" href="/labs/">Labs</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Community ','WT.ti','Menu - Community ');" href="https://community.nationalarchives.gov.uk/">Community</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Podcasts and videos ','WT.ti','Menu - Podcasts and videos ');" href="/media/">Podcasts and videos</a></li>
						<li><a onClick="dcsMultiTrack('DCS.dcsuri','/menu/Contact us ','WT.ti','Menu - Contact us ');" href="/contact/">Contact us</a></li>
						<li class="imgContent"><a href="/first-world-war/" title="First World War 100 - read about our centenary programme"><img src="http://www.nationalarchives.gov.uk/images/home/menu-first-world-war-b.jpg" alt="Explore First World War 100"></a></li>
					</ul>
				</div>
			</nav>
		</section>
	</div>
<!-- end mega-menu --> 


<!-- end page-header --> 
