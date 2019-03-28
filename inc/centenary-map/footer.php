<div class="footercontainer" id="footer">
  <div class="footer">
    <div class="logo"><a href="https://www.nationalarchives.gov.uk" title="Visit The National Archives' website" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/centenary-map/tna-centenary-the-national-archives-logo.png" alt="The National Archives logo" /></a>
 <a href="https://www.nationalarchives.gov.uk/first-world-war/" title="Visit The National Archives' First World War 100 website" target="_blank"> <div class="hide-text ww100">First World War 100</div></a>
    </div>
    <div id="fleft" class="margin-top-large"> <a href="https://www.nationalarchives.gov.uk/doc/open-government-licence/" target="_blank"><img src="https://www.nationalarchives.gov.uk/images/global/logo-ogl.png" alt="Open Government License logo" border="0" /></a>
      <p>All content is available under the <a href="https://www.nationalarchives.gov.uk/doc/open-government-licence/" target="_blank">Open Government Licence v3.0</a>, except where otherwise stated</p>
    </div>
    <div class="clear20px"></div>
  </div>
</div>
</div>
<?php wp_footer(); ?>

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
</body>