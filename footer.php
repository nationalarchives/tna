<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package tna-dev-test
 */
?>

<a id="goTop"></a>
<div id="footer-wrapper">
	<div class="container">
		<div class="row">
			<div class="col starts-at-full ends-at-one-quarter clr">
				<div class="footer-left">
					<address>
						The National Archives<br>
						Kew, Richmond, Surrey,<br>
						TW9 4DU
					</address>
					Tel: +44 (0) 20 8876 3444
				</div>
				<div class="footer-left"> </div>
			</div>

			<div class="col starts-at-full ends-at-one-quarter clr">
				<div class="footer-left">
					<h4>Find out more</h4>
					<ul>
						<li><a href="/contact/">Contact us</a></li>
						<li><a href="/pressroom/">Press room</a></li>
						<li><a href="/jobs/default.htm">Jobs and careers</a></li>
						<li><a href="/get-involved/friends.htm">Friends of The National Archives</a></li>
					</ul>
				</div>
				<div class="footer-left">
					<h4>Site help</h4>
					<ul>
						<li><a href="/help/">Help</a></li>
						<li><a href="/help/faqs.htm">FAQs</a></li>
						<li><a href="/help/atoz.htm">Website A-Z index</a></li>
						<li><a href="/help/accessibility.htm">Accessibility</a></li>
						<li><a href="/help/sitemap.htm">Site map</a></li>
					</ul>
				</div>
			</div>

			<div class="col starts-at-full ends-at-one-quarter clr">
				<div class="footer-left">
					<h4>Websites</h4>
					<ul>
						<li><a href="http://blog.nationalarchives.gov.uk/">Blog</a></li>
						<li><a href="http://media.nationalarchives.gov.uk/">Podcasts and videos</a></li>
						<li><a href="http://labs.nationalarchives.gov.uk/">Labs</a></li>
						<li><a href="http://community.nationalarchives.gov.uk/">Community</a></li>
						<li><a href="/webarchive/">UK Government Web Archive</a></li>
						<li><a href="http://www.legislation.gov.uk/"target="_blank" title="External website - link opens in a new window">Legislation.gov.uk</a></li>
						<li><a href="https://www.thegazette.co.uk/"target="_blank" title="External website - link opens in a new window">The Gazette</a></li>
					</ul>
				</div>
				<div class="footer-left">
					<h4>Legal</h4>
					<ul>
						<li><a href="/legal/">Terms of use</a> </li>
						<li><a href="/legal/privacy.htm">Privacy policy</a></li>
						<li><a href="/legal/cookies.htm">Cookies</a></li>
						<li><a href="/foi/default.htm">Freedom of Information</a></li>
						<li><a href="/about/transparency.htm">Transparency</a></li>
						<li><a href="/legal/our-fees.htm">Our fees</a></li>
					</ul>
				</div>
			</div>

			<div class="col starts-at-full ends-at-one-quarter clr">
				<div class="footer-left">
					<h4>Follow us</h4>
					<ul>
						<li><a href="https://twitter.com/@UKNatArchives"target="_blank" title="External website - link opens in a new window">Twitter</a></li>
						<li><a href="https://www.youtube.com/user/NationalArchives08"target="_blank" title="External website - link opens in a new window">YouTube</a></li>
						<li><a href="http://flickr.com/photos/nationalarchives"target="_blank" title="External website - link opens in a new window">Flickr</a></li>
						<li><a href="http://facebook.com/TheNationalArchives"target="_blank" title="External website - link opens in a new window">Facebook</a></li>
						<li><a href="http://commons.wikimedia.org/wiki/Commons:The_National_Archives_(United_Kingdom)" target="_blank" title="External website - link opens in a new window">Wikimedia Commons</a></li>
						<li><a href="/rss/">RSS</a></li>
					</ul>
				</div>
				<div class="footer-left">
					<h4>Featured Flickr image</h4>
					<p id="flickr-caption" class="caption">Patented textile pattern by Christopher Dresser. <a target="_blank" title="External website - opens in a new window" href="http://www.flickr.com/photos/nationalarchives/3208858799/in/set-72157608416657334/">EXT 9/104</a></p>
					<p id="flickr-image"> <a target="_blank" title="External website - opens in a new window" href="http://www.flickr.com/photos/nationalarchives/3208858799/in/set-72157608416657334/"> <img src="http://www.nationalarchives.gov.uk/images/global/featured-flickr-ext-9-104.jpg" alt="Patented textile pattern by Christopher Dresser."></a> </p>
				</div>
			</div>
		</div>

<!-- end row -->
		<div class="row footer-base">
			<div class="left">
				<a href="http://www.nationalarchives.gov.uk/doc/open-government-licence/"> <img alt="Open Government License logo" src="http://www.nationalarchives.gov.uk/images/global/logo-ogl.png" /> </a>
				<p>All content is available under the <a href="http://www.nationalarchives.gov.uk/doc/open-government-licence/">Open Government Licence v3.0</a>, <br />except where otherwise stated </p>
			</div>
			<div class="right">
				<a class="footer-base-external-branding-gov-logo-adjust" title="External website - opens in a new window" href="http://gov.uk/" target="_blank"> <img alt="GOV.UK logo" src="http://www.nationalarchives.gov.uk/images/global/gov-uk.png" /> </a>
			</div>
		</div>
		<!-- end row external branding -->
	</div>
	<!-- end container -->
</div>
<!-- end footer-wrapper -->

<?php require_once('inc/footer-scripts.php') ?>

<script src="wp-content/themes/tna/scripts/tabify.js"></script>
<script src="wp-content/themes/tna/scripts/jquery.bxslider.min.js"></script>

<script>
	$( document ).ready(function() { // All content must be placed within this IIFE.
		// Apply the tabify() plugin
		$("ul[role='tablist'] li").tabify();
	}); // All content must be placed within this IIFE.
	</script>

	<script>
	$('.bpTestimonials').bxSlider({
		auto: true,
		controls: false,
		default: true,
		pager: true,
		speed: 3000,
		pause: 7000,
		autoHover: true,
		infiniteLoop: true
	});
</script>
<script>
	$('.bpSlider').bxSlider({
		auto: true,
		controls: false,
		default: true,
		pager: true,
		speed: 3000,
		pause: 10000,
		autoHover: true,
		infiniteLoop: true
	});
</script>

<?php wp_footer(); ?>
</body></html>
