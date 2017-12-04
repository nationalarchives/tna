<?php
/**
 * Description: Displays first item from a RSS feed
 * Call function:
 * <?php tna_rss( $rssUrl, $url, $rssTitle, $image, $id ) ?>
 * eg:
 * <?php tna_rss( 'http://blog.nationalarchives.gov.uk/feed/', 'http://blog.nationalarchives.gov.uk/', 'Read our latest blog posts', '', 'home-1' ) ?>
 */

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
			$content = file_get_contents( $rssUrl );
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
					$html .= '<p>' . $item->description . '</p></div>';
					$n ++;
				endforeach;
				set_transient( 'tna_rss_blog_transient' . $id, $html, HOUR_IN_SECONDS );
				echo $html;
			}
			else {
				echo '<a href="' . $url . '" title="' . $rssTitle . '">';
				echo '<div class="image-container" style="background-image: url(http://blog.nationalarchives.gov.uk/wp-content/themes/Redesign/images/blog-banner-bg.jpg)">';
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
			$featured_image = str_replace( site_url(), 'http://www.nationalarchives.gov.uk', wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail' ));
			$mime_type = get_post_mime_type(get_post_thumbnail_id());
			$headers = get_headers($featured_image[0], 1);
			echo "\t" . '<enclosure url="' . $featured_image[0] . '" length="' . $headers["Content-Length"] . '" type="' . $mime_type . '" />' . "\n";
		}
	}
	add_action( 'rss2_item', 'add_featured_image_to_rss' );
endif;

