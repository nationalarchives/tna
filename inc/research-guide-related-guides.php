    <!-- START related research guides -->

    <div class="heading-holding-banner">
      <h2 class="section-heading"> <span> <span>Related research guides</span> </span> </h2>
    </div>
    <div class="breather separator no-left-right-padding no-top-padding">

      <?php
      // Check for a value in the related resources ACF, and if there is one...
      if (get_field('related-resources')){

        // ...get & store the content of the related video ACF
        $post_objects = get_field('related-resources');

        // If there is a value stored...
        if( $post_objects ):
      ?>

      <div class="grid-within-grid-one-item">

        <?php
          // ...loop over each item in the stored array, override the global post object and get & store the featured image URL
          foreach( $post_objects as $post): // variable must be called $post (IMPORTANT)
          setup_postdata($post);
          $image_url = wp_get_attachment_image_src( get_post_thumbnail_id());
        ?>

        <div class="resource-block pad-top-small pad-bottom-medium margin-none border-bottom">
          <a href="<?php the_permalink()?>" title="<?php the_title();?>">
              <h3 class="margin-small"><?php the_title();?></h3>
          </a>
        </div><!--end resource-block -->

        <?php
          // Close the $post_objects loop
          endforeach;
        ?>

      </div><!--end pictorial-list -->

      <?php
        // Reset the $post object so the rest of the page works correctly (IMPORTANT)
        wp_reset_postdata();

       // Close the $post_objects condition
        endif;
      }

      // If there's no value in the related resources ACF, then...
      else {

      // Get & store the ID of the current post
      $currentID = get_the_ID();

      // Get and store the list of tags for the current post in an array
      $currentTags = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );

      // Create an array template with specific parameters
      $args = array(
        'category_name' => 'research-guides',
        'tag__in' => wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) ),
        'posts_per_page' => 3,
        'post__not_in' => array($currentID));

      // Get and store the posts and their parameters
      $myposts = get_posts( $args );

      // Count the number of posts stored
      $postcount = count($myposts);

      // If there are posts...
      if ($postcount != 0){
        // ...loop over each item in the stored array, override the global post object and get & store the featured image URL
        foreach ( $myposts as $post ):
        setup_postdata( $post );
        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id());
      ?>
        <div class="grid-within-grid-one-item">
          <div class="resource-block pad-top-small pad-bottom-medium margin-none border-bottom">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <h3 class="margin-top-none">
                <?php the_title(); ?>
              </h3>
            </a>
            <p class="margin-bottom-large pad-bottom-medium">
            <?php
            // If the item has an excerpt...
            if (has_excerpt()){
              // Show the excerpt
              the_excerpt();
            }
            // If the item has no excerpt...
            else {

              // and if the post excerpt is empty...
              if ( empty( $post->post_excerpt ) ) {

                // Get and store the content
                $strcontent = get_the_content();

                // Format the content
                $strcontent =  strip_tags($strcontent);
                $strcontent = strip_shortcodes($strcontent);

                // Print the first 150 characters of the formatted content followed by and ellipsis
                echo substr($strcontent, 0, strpos($strcontent, ' ', 150));
                echo("...");

              }

              // if the post excerpt isn't empty...
              else {

                // ...store that excerpt
                $strcontent = the_excerpt();

                // Create an array with the tags you want to remove
                $tagstotrim = array("<p>", "</p>");

                // Search the stored excerpt and remove the tags
                $strcontent = str_replace($tagstotrim, "", $strcontent);
              }
          ?>
          </p>
        </div><!--end resource-block -->
      </div><!--end pictorial-list -->

      <?php
            }

          // Close the $myposts loop
          endforeach;

          // Reset the $post object so the rest of the page works correctly (IMPORTANT)
          wp_reset_postdata();

          }

        } // this closes the else if there are no Related Research Guides
      ?>

      </div><!-- end breather -->

      <!-- END related research guides -->
