<!-- Video ACF -->


<?php if (is_page_template( 'education-bundle.php' )): ?>


  <?php while( have_rows('video') ): the_row(); ?>
  <?php 
    $title = get_sub_field('video_title');
    $image = "'" . get_sub_field('video_image') . "'";
    $videoFile = "'" . get_sub_field('video_file') . "'";
    $uniqueId = "'" . get_sub_field('unique_id') . "'";
    $width = "'100%'";
  ?>
  <div class="heading-holding-banner">
    <h2><span><span><?php echo($title); ?></span></span></h2>
  </div>
  <div class="breather">
      <div id=<?php echo($uniqueId); ?>>Loading the player...</div>
      <script type="text/javascript">
          <?php 
            $format = 'jwplayer(%s).setup({ file : %s, image : %s, width : %s});';
            $jw = sprintf($format, $uniqueId, $videoFile, $image, $width);
            echo($jw);
          ?>
      </script>
      </div>
    <?php endwhile; ?>

<div class="separator-illusion"></div>
<?php endif; ?>

<?php if (is_page_template( 'education-lesson-source-viewer.php' )): ?>


  <?php while( have_rows('video') ): the_row(); ?>
  <?php 
    $title = get_sub_field('video_title');
    $image = "'" . get_sub_field('video_image') . "'";
    $videoFile = "'" . get_sub_field('video_file') . "'";
    $uniqueId = "'" . get_sub_field('unique_id') . "'";
    $width = "'100%'";
  ?>

      <div id=<?php echo($uniqueId); ?>>Loading the player...</div>
      <script type="text/javascript">
          <?php 
            $format = 'jwplayer(%s).setup({ file : %s, image : %s, width : %s});';
            $jw = sprintf($format, $uniqueId, $videoFile, $image, $width);
            echo($jw);
          ?>
      </script>
  
    <?php endwhile; ?>


<?php endif; ?>

