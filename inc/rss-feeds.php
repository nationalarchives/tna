<?php
/**
 * Description: Displays first item from a RSS feed
 * Call function:
 * <?php tna_rss( $rssUrl, $url, $rssTitle, $image, $id ) ?>
 * eg:
 * <?php tna_rss( 'http://blog.nationalarchives.gov.uk/feed/', 'http://blog.nationalarchives.gov.uk/', 'Read our latest blog posts', '', 'home-1' ) ?>
 */

/**
 * @param $words
 * @param int $number
 *
 * @return string
 */
function tna_limit_words( $words, $number = 14 ) {
	if (str_word_count($words, 0) > $number) {
		$explode_words = explode( ' ', $words );
		$words = implode(' ', array_splice( $explode_words , 0, $number)) . '...';
	}
	return $words;
}

/**
 * @param $result
 *
 * @return bool
 */
function tna_check_result( $result ) {
    if ( is_wp_error( $result ) ) {
        $result = false;
    } elseif ( wp_remote_retrieve_response_code( $result ) == '404' ) {
        $result = false;
    } else {
        $result = true;
    }
    return $result;
}
/**
 * Gets the content of a URL via a HTTP request and returns the content.
 *
 * @since 1.0
 *
 * @param string $url
 *
 * @return string
 */
function tna_get_html_content( $url ) {
    if ( ! class_exists( 'WP_Http' ) ) {
        include_once( ABSPATH . WPINC . '/class-http.php' );
    }
    $request = new WP_Http;
    $result  = $request->request( $url );
    if ( tna_check_result( $result ) ) {
        $content = $result['body'];
    } else {
        $content = null;
    }
    return $content;
}

if (!function_exists('tna_rss')) :
	function tna_rss( $rssUrl, $url, $rssTitle, $image, $id ) {
		// Do we have this information in our transients already?
		$transient = get_transient( 'tna_rss_blog_transient' . $id );
		// Yep!  Just return it and we're done.
		if( ! empty( $transient ) ) {
			echo $transient ;
			// Nope!  We gotta make a call.
		} else {
			// Get feed source.
			$content = tna_get_html_content( $rssUrl );
			if ( $content !== false ) {
				$x = new SimpleXmlElement( $content );
				$n = 0;
				// Loop through each feed item and display each item as a hyperlink
				foreach ( $x->channel->item as $item ) :
					if ( $n == 1 ) {
						break;
					}
					$enclosure  = $item->enclosure['url'];
					$namespaces = $item->getNameSpaces( true );
					$dc         = $item->children( $namespaces['dc'] );
					$pubDate    = $item->pubDate;
					$pubDate    = date( "l d M Y", strtotime( $pubDate ) );
					$html       = '';
					if ( ! $image == 'no' ) {
						$html = '<a href="' . $url . '" title="' . $rssTitle . '"">';
						$html .= '<div class="image-container" style="background-image: url(' . $enclosure . ')">';
						$html .= '<h2><span><span>' . $rssTitle . '</span></span></h2>';
						$html .= '</div>';
						$html .= '</a>';
					}
					$html .= '<div class="breather"><h3 class="inline"><a href="' . $item->link . '">';
					$html .= $item->title;
					$html .= '</a></h3>';
					$html .= '<div class="entry-meta">' . $dc->creator . ' | ' . $pubDate . '</div>';
					$html .= '<p>' . tna_limit_words($item->description, 24) . '</p></div>';
					$n ++;
				endforeach;
				set_transient( 'tna_rss_blog_transient' . $id, $html, HOUR_IN_SECONDS );
				echo $html;
			}
			else {
				echo '<a href="' . $url . '" title="' . $rssTitle . '">';
				echo '<div class="image-container" style="background-image: url(https://blog.nationalarchives.gov.uk/wp-content/themes/Redesign/images/blog-banner-bg.jpg)">';
				echo '<h2><span><span>' . $rssTitle . '</span></span></h2>';
				echo '</div></a>';
				echo '<div class="tna-rss-entry"><a href="' . $url . '">';
				echo '<h3>Read more at: ' . $rssTitle . '</h3>';
				echo '</a></div>';
			}
		}
	}
endif;

if (!function_exists('add_featured_image_to_rss')) :
	function add_featured_image_to_rss() {
		if ( function_exists( 'has_post_thumbnail' ) and has_post_thumbnail() ) {
			$featured_image = str_replace( site_url(), 'https://www.nationalarchives.gov.uk', wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail' ));
			$mime_type = get_post_mime_type(get_post_thumbnail_id());
			$headers = get_headers($featured_image[0], 1);
			echo "\t" . '<enclosure url="' . $featured_image[0] . '" length="' . $headers["Content-Length"] . '" type="' . $mime_type . '" />' . "\n";
		}
	}
	add_action( 'rss2_item', 'add_featured_image_to_rss' );
endif;

