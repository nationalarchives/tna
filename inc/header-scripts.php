
<!-- Scripts -->
<script src="/wp-content/themes/tna/scripts/modernizr.min.js"></script>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "http://www.nationalarchives.gov.uk/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "http://www.nationalarchives.gov.uk/search/results?_q={search_term}",
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

<?php
if (is_page_template('education-lesson.php')) {
    include 'education-lesson-at-a-glance.php';
}

?>

<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="/wp-content/themes/tna/scripts/selectivizr-min.js"></script>
<script type="text/javascript" src="/wp-content/themes/tna/scripts/respond.min.js"></script>
<![endif]-->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T8DSWV');</script>

<!-- Google Tag Manager -->
<!-- iOS viewport fix -->
<script src="/wp-content/themes/tna/scripts/ios-viewport-fix.js"></script>


