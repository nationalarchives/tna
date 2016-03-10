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
					global $html;
					$enclosure  = $item->enclosure['url'];
					$namespaces = $item->getNameSpaces( true );
					$dc         = $item->children( $namespaces['dc'] );
					$pubDate    = $item->pubDate;
					$pubDate    = date( "l d M Y", strtotime( $pubDate ) );
					if ( ! $image == 'no' ) {
						$html .= '<a href="' . $url . '" title="' . $rssTitle . '"">';
						$html .= '<div class="image-container" style="background-image: url(' . $enclosure . ')">';
						$html .= '<h2><span><span>' . $rssTitle . '</span></span></h2>';
						$html .= '</div>';
						$html .= '</a>';
					}
					$html .= '<h3 class="inline"><a href="' . $item->link . '">';
					$html .= $item->title;
					$html .= '</a></h3>';
					$html .= '<div class="entry-meta">' . $dc->creator . ' | ' . $pubDate . '</div>';
					$html .= '<p>' . $item->description . '</p>';
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

?>