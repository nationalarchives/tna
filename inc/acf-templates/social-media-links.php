<!-- Social media ACF -->
 <div class="heading-holding-banner">
  <h2> <span> <span>Social media links</span> </span> </h2>
</div>
<div class="breather">
  <ul class="social-media-links">
    <?php while( have_rows('media_link') ): the_row(); ?>
      <?php 
        $linkText = get_sub_field('link_text');
        $linkHref = get_sub_field('link_href');
        $additionalText = get_sub_field('additional_text');
        $socialMediaSite = get_sub_field('social_media_site');

        switch ($socialMediaSite) {
          case 'Pinterest':
            $iconClass = 'icon-pinterest';
            break;
          case 'Flickr':
            $iconClass = 'icon-flickr';
            break;          
        }

        $format = '<a href="%s" title="External website: Opens in a new window" target="_blank"><span class="sprite %s"></span> <h3 class="sprite-text">%s</h3><p>%s</p></a>';
        $link = sprintf($format, $linkHref, $iconClass, $linkText, $additionalText);
        
      ?>

      <li><?php echo($link); ?></li>  

    <?php endwhile; ?>
  </ul>
</div>
