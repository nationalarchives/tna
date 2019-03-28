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
<?php
global $post;

if (!has_category('hide-newsletter',$post->ID)) : ?>
	<div class="container">
		<?php get_template_part( 'inc/content/footer-newsletter' );?>
	</div>
<?php endif;
?>
</div>
<div id="footer-wrapper">
	<div class="container">
		<div class="row">
			<div class="col starts-at-full ends-at-one-quarter footer-col clr">
				<div class="footer-left">
					<address>
						The National Archives<br>
						Kew, Richmond, Surrey,<br>
						TW9 4DU
					</address>
					Tel: +44 (0) 20 8876 3444
				</div>
				<div class="footer-left">
                    <h4>Standard opening times</h4>
                    <div class="opening-times">
                        <div class="open_table">
                            <div class="open_tableBody">
                                <div class="open_tableRow">
                                    <div class="open_tableCell">Monday</div>
                                    <div class="open_tableCell">Closed</div>
                                </div>
                                <div class="open_tableRow">
                                    <div class="open_tableCell">Tuesday</div>
                                    <div class="open_tableCell">09:00 &ndash; 19:00</div>
                                </div>
                                <div class="open_tableRow">
                                    <div class="open_tableCell">Wednesday</div>
                                    <div class="open_tableCell">09:00 &ndash; 17:00</div>
                                </div>
                                <div class="open_tableRow">
                                    <div class="open_tableCell">Thursday</div>
                                    <div class="open_tableCell">09:00 &ndash; 19:00</div>
                                </div>
                                <div class="open_tableRow">
                                    <div class="open_tableCell">Friday</div>
                                    <div class="open_tableCell">09:00 &ndash; 17:00</div>
                                </div>
                                <div class="open_tableRow">
                                    <div class="open_tableCell">Saturday</div>
                                    <div class="open_tableCell">09:00 &ndash; 17:00</div>
                                </div>
                                <div class="open_tableRow">
                                    <div class="open_tableCell">Sunday</div>
                                    <div class="open_tableCell">Closed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/about/visit-us/opening-times/">Full opening times</a>
                </div>
			</div>

			<div class="col starts-at-full ends-at-one-quarter clr">
				<div class="footer-left">
					<h4>Find out more</h4>
					<ul>
						<li><a href="/contact-us/">Contact us</a></li>
							<li><a href="/about/press-room/">Press room</a></li>
							<li><a href="/about/jobs/">Jobs and careers</a></li>
						<li><a href="/about/get-involved/friends-of-the-national-archives/">Friends of The National Archives</a></li>
					</ul>
				</div>
				<div class="footer-left">
					<h4>Site help</h4>
                    <ul>
	                    <li><a href="/help/">Help</a></li>
	                    <li><a href="/help/a-to-z/">Website A-Z index</a></li>
	                    <li><a href="/help/web-accessibility/">Accessibility</a></li>
                    </ul>
				</div>
			</div>

			<div class="col starts-at-full ends-at-one-quarter clr">
				<div class="footer-left">
					<h4>Websites</h4>
                    <ul>
                        <li><a href="https://blog.nationalarchives.gov.uk/">Blog</a></li>
                        <li><a href="https://media.nationalarchives.gov.uk/">Podcasts and videos</a></li>
                        <li><a href="http://bookshop.nationalarchives.gov.uk/">Bookshop</a></li>
                        <li><a href="https://images.nationalarchives.gov.uk/">Image library</a></li>
                        <li><a href="/webarchive/">UK Government Web Archive</a></li>
                        <li><a href="https://www.legislation.gov.uk/" target="_blank" rel="noopener noreferrer">Legislation.gov.uk</a></li>
                        <li><a href="https://www.thegazette.co.uk/" target="_blank" rel="noopener noreferrer">The Gazette</a></li>
                    </ul>
				</div>
				<div class="footer-left">
					<h4>Legal</h4>
                    <ul>
                        <li><a href="/legal/">Terms of use</a></li>
                        <li><a href="/legal/privacy.htm">Privacy policy</a></li>
                        <li><a href="/legal/cookies.htm">Cookies</a></li>
                        <li><a href="/about/freedom-of-information/">Freedom of Information</a></li>
                        <li><a href="/about/our-role/transparency/">Transparency</a></li>
                        <li><a href="/legal/our-fees.htm">Our fees</a></li>
                    </ul>
				</div>
			</div>

			<div class="col starts-at-full ends-at-one-quarter clr">
				<div class="footer-left">
                    <h4>Follow us</h4>
                    <div class="follow-us">
                        <a href="https://twitter.com/@UKNatArchives" title="Follow us on Twitter" target="_blank">
                            <img src="https://www.nationalarchives.gov.uk/wp-content/themes/tna-base/img/social/twitter.png"
                                 alt="Twitter logo"></a>
                        <a href="https://www.youtube.com/c/TheNationalArchivesUK" title="Follow us on YouTube"
                           target="_blank">
                            <img src="https://www.nationalarchives.gov.uk/wp-content/themes/tna-base/img/social/youtube-play.png"
                                 alt="YouTube logo"></a>
                        <a href="https://www.flickr.com/photos/nationalarchives" title="Follow us on Flickr"
                           target="_blank">
                            <img src="https://www.nationalarchives.gov.uk/wp-content/themes/tna-base/img/social/flickr.png" alt="Flickr logo"></a>
                        <a href="https://www.facebook.com/TheNationalArchives" title="Follow us on Facebook"
                           target="_blank">
                            <img src="https://www.nationalarchives.gov.uk/wp-content/themes/tna-base/img/social/facebook.png"
                                 alt="Facebook logo"></a>
                        <a href="https://www.instagram.com/nationalarchivesuk/" title="Follow us on Instagram"
                           target="_blank">
                            <img src="https://nationalarchives.gov.uk/wp-content/themes/tna-base/img/social/instagram.png"
                                 alt="Instagram logo"></a>
                        <a href="https://www.nationalarchives.gov.uk/rss/" title="Follow us via RSS">
                            <img src="https://www.nationalarchives.gov.uk/wp-content/themes/tna-base/img/social/rss.png" alt="RSS logo"></a>
                    </div>
				</div>
				<div class="footer-left">
					<h4>Featured Flickr image</h4>
					<p id="flickr-caption" class="caption">Patented textile pattern by Christopher Dresser. <a target="_blank" title="External website - opens in a new window" href="http://www.flickr.com/photos/nationalarchives/3208858799/in/set-72157608416657334/">EXT 9/104</a></p>
					<p id="flickr-image"> <a target="_blank" title="External website - opens in a new window" href="http://www.flickr.com/photos/nationalarchives/3208858799/in/set-72157608416657334/"> <img src="https://www.nationalarchives.gov.uk/images/global/featured-flickr-ext-9-104.jpg" alt="Patented textile pattern by Christopher Dresser."></a> </p>
				</div>
			</div>
		</div>

<!-- end row -->
		<div class="row footer-base">
			<div class="left">
				<a href="https://www.nationalarchives.gov.uk/doc/open-government-licence/"> <img alt="Open Government License logo" src="https://www.nationalarchives.gov.uk/images/global/logo-ogl.png" /> </a>
				<p>All content is available under the <a href="https://www.nationalarchives.gov.uk/doc/open-government-licence/">Open Government Licence v3.0</a>, <br />except where otherwise stated </p>
			</div>
			<div class="right">
				<a class="footer-base-external-branding-gov-logo-adjust" title="External website - opens in a new window" href="https://gov.uk/" target="_blank"> <img alt="GOV.UK logo" src="https://www.nationalarchives.gov.uk/images/global/gov-uk.png" /> </a>
			</div>
		</div>
		<!-- end row external branding -->
	</div>
	<!-- end container -->
</div>
<!-- end footer-wrapper -->

<?php require_once('inc/footer-scripts.php') ?>

<?php wp_footer(); ?>
</body></html>
