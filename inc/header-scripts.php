
<!-- Scripts -->
<script src="/wp-content/themes/tna/scripts/modernizr.min.js"></script>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "https://www.nationalarchives.gov.uk/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.nationalarchives.gov.uk/search/results?_q={search_term}",
    "query-input": "required name=search_term"
  }
}
</script>



<?php // START OF JW Player scripts ?>
<?php if (is_page_template( 'education-bundle.php' ) || is_page_template( 'education-lesson-source-viewer.php' )): ?>
  <script src="/wp-content/themes/tna/jwplayer/jwplayer.js"></script>
  <script>jwplayer.key="QXMXbKME8X1tWpCl1xbScn2D5vVQjSDcHSMHZLVk7X8";</script>
<?php endif; ?>
<?php // END OF JW Player scripts ?>

<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="/wp-content/themes/tna/scripts/selectivizr-min.js"></script>
<script type="text/javascript" src="/wp-content/themes/tna/scripts/respond.min.js"></script>
<![endif]-->
<?php      
    if (function_exists('handle_GA_script')) {
        handle_GA_script('cookies_policy');
    }  
?>
<!-- iOS viewport fix -->
<script src="/wp-content/themes/tna/scripts/ios-viewport-fix.js"></script>


