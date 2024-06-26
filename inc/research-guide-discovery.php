
<?php

// Content for Discovery link area - fields taken from the Options page
$guide_discovery_link = get_field('guide-discovery-link', 'option');
$guide_discovery_heading = get_field('guide-discovery-heading', 'option');
$guide_discovery_description = get_field('guide-discovery-description', 'option');

?>
<a href="<?php echo $guide_discovery_link; ?>">
  <div class="heading-holding-banner">
    <h2 class="section-heading"> <span> <span><?php echo $guide_discovery_heading; ?></span> </span> </h2>
  </div><!-- end heading-holding-banner -->
</a>
<div class="breather <?php if (get_the_title( $post->post_parent ) == 'Discovery help') { echo 'separator';} ?> no-left-right-padding no-top-padding">
  <p class="margin-none"><?php echo $guide_discovery_description; ?></p>
</div><!-- end breather -->

