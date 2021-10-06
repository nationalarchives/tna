<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package tna-dev-test
 */
?>
<footer id="footer" role="contentinfo">
    <h2 class="sr-only">Footer</h2>
    <?php
    global $post;
    if (!has_category('hide-newsletter',$post->ID)) :
            get_template_part( 'inc/content/footer-newsletter' );
    endif;
    ?>
    </div>
    <div id="footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col starts-at-full ends-at-one-quarter footer-col clr">
                    <div class="footer-left">
                        <img src="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/tna-square-white-logo.png"
                            srcset="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/tna-square-white-logo.svg"
                            alt="The National Archives" id="logo">
                        <address>
                            The National Archives<br>
                            Kew, Richmond<br>
                            TW9 4DU
                        </address>
                    </div>
                </div>

                <div class="col starts-at-full ends-at-one-quarter clr">
                    <div class="footer-left">
                        <h3>Find out more</h3>
                        <ul>
                            <li><a href="/contact-us/">Contact us</a></li>
                            <li><a href="/about/press-room/">Press room</a></li>
                            <li><a href="/about/jobs/">Jobs and careers</a></li>
                            <li><a href="/about/get-involved/friends-of-the-national-archives/">Friends of The National
                                    Archives</a></li>
                        </ul>
                    </div>
                    <div class="footer-left">
                        <h3>Site help</h3>
                        <ul>
                            <li><a href="/help/">Help</a></li>
                            <li><a href="/help/a-to-z/">Website A-Z index</a></li>
                            <li><a href="/help/web-accessibility/">Accessibility</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col starts-at-full ends-at-one-quarter clr">
                    <div class="footer-left">
                        <h3>Websites</h3>
                        <ul>
                            <li><a href="https://blog.nationalarchives.gov.uk/">Blog</a></li>
                            <li><a href="https://media.nationalarchives.gov.uk/">Podcasts and videos</a></li>
                            <li><a href="https://shop.nationalarchives.gov.uk/">Shop</a></li>
                            <li><a href="https://images.nationalarchives.gov.uk/">Image library</a></li>
                            <li><a href="/webarchive/">UK Government Web Archive</a></li>
                            <li><a href="https://www.legislation.gov.uk/" target="_blank" title="Opens a new window"
                                    rel="noopener noreferrer">Legislation.gov.uk <span class="sr-only">Opens a new window</span></a></li>
                            <li><a href="https://www.thegazette.co.uk/" target="_blank" title="Opens a new window"
                                rel="noopener noreferrer">The Gazette <span class="sr-only">Opens a new window</span></a></li>
                        </ul>
                    </div>
                    <div class="footer-left">
                        <h3>Legal</h3>
                        <ul>
                            <li><a href="/legal/">Terms of use</a></li>
                            <li><a href="/legal/privacy-policy/">Privacy policy</a></li>
                            <li><a href="/legal/cookies/">Cookies</a></li>
                            <li><a href="/about/freedom-of-information/">Freedom of Information</a></li>
                            <li><a href="/about/our-role/transparency/">Transparency</a></li>
			    <li><a href="/legal/our-fees/">Our fees</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col starts-at-full ends-at-one-quarter clr">
                    <div class="footer-left">
                        <h3>Follow us</h3>
                        <div class="follow-us">
                            <a href="https://twitter.com/@UKNatArchives" title="Follow us on Twitter - Opens a new window" target="_blank">
                                <img src="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/social/twitter.png"
                                    alt="Twitter logo">
                                <span class="sr-only">Opens a new window</span>
                            </a>
                            <a href="https://www.youtube.com/c/TheNationalArchivesUK" title="Follow us on YouTube - Opens a new window"
                                target="_blank">
                                <img src="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/social/youtube-play.png"
                                    alt="YouTube logo">
                                <span class="sr-only">Opens a new window</span>
                            </a>
                            <a href="https://www.flickr.com/photos/nationalarchives" title="Follow us on Flickr - Opens a new window"
                                target="_blank">
                                <img src="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/social/flickr.png"
                                    alt="Flickr logo">
                                <span class="sr-only">Opens a new window</span>
                            </a>
                            <a href="https://www.facebook.com/TheNationalArchives" title="Follow us on Facebook - Opens a new window"
                                target="_blank">
                                <img src="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/social/facebook.png"
                                    alt="Facebook logo">
                                <span class="sr-only">Opens a new window</span>
                            </a>
                            <a href="https://www.instagram.com/nationalarchivesuk/" title="Follow us on Instagram - Opens a new window"
                                target="_blank">
                                <img src="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/social/instagram.png"
                                    alt="Instagram logo">
                                <span class="sr-only">Opens a new window</span>
                            </a>
                            <a href="https://www.nationalarchives.gov.uk/rss/" title="Follow us via RSS">
                                <img src="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/social/rss.png"
                                    alt="RSS logo"></a>
                        </div>
                    </div>
                    <div class="footer-left">
                    </div>
                </div>
            </div>

            <!-- end row -->
            <div class="row footer-base">
                <div class="left">
                    <img alt="Open Government License logo" src="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/global/logo-ogl.png" />
                    <p>All content is available under the <a
                            href="https://www.nationalarchives.gov.uk/doc/open-government-licence/">Open Government Licence
                            v3.0</a>, <br />except where otherwise stated </p>
                </div>
                <div class="right">
                    <a class="footer-base-external-branding-gov-logo-adjust"
                        title="External website - opens in a new window" href="https://gov.uk/" target="_blank"> <img
                            alt="GOV.UK logo" src="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/images/global/gov-uk.png" /> </a>
                </div>
            </div>
            <!-- end row external branding -->
        </div>
        <!-- end container -->
    </div>
    <!-- end footer-wrapper -->

    <?php require_once('inc/footer-scripts.php') ?>

    <?php wp_footer(); ?>
</footer>
</body>

</html>
