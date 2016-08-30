
<?php 

// Content for Discovery link area - fields taken from the Options page
$guide_discovery_link = get_field('guide-discovery-link', 'option');  
$guide_discovery_heading = get_field('guide-discovery-heading', 'option');
$guide_discovery_description = get_field('guide-discovery-description', 'option');

?>
<a href="<?php echo $guide_discovery_link; ?>">
  <div class="heading-holding-banner">
    <h2> <span> <span><?php echo $guide_discovery_heading; ?></span> </span> </h2>
  </div><!-- end heading-holding-banner -->
</a>
<div class="breather separator">
  <p class="margin-none"><?php echo $guide_discovery_description; ?></p>
</div><!-- end breather -->

