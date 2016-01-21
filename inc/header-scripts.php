
<!-- Scripts -->
<script src="/wp-content/themes/tna/scripts/modernizr.min.js"></script>

<?php // START OF JW Player scripts ?>
<?php if (is_page_template( 'education-bundle.php' ) || is_page_template( 'education-lesson-source-viewer.php' )): ?>
  <script src="/wp-content/themes/tna/jwplayer/jwplayer.js"></script>
  <script>jwplayer.key="smtZnTezigmcE2pqw2JCVo5QOEahucB6Sh9Epg==";</script>
<?php endif; ?>
<?php // END OF JW Player scripts ?>

<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="/wp-content/themes/tna/scripts/selectivizr-min.js"></script>
<script type="text/javascript" src="/wp-content/themes/tna/scripts/respond.min.js"></script>
<![endif]-->

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

<!-- iOS viewport fix -->
<script src="/wp-content/themes/tna/scripts/ios-viewport-fix.js"></script>