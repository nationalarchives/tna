<?php
/*
Template Name: Centenary map glossary
*/
 ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="glossary-content">
<p class="btn primary float-right" onclick="doFadeOut('glossary-container')">Close</p>
      <h1>
        <?php the_title(); ?>
      </h1>     
       <?php the_content(); ?>
    
    <?php endwhile; endif; ?>
</div>