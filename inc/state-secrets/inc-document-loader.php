<div style="background-image:url(<?php printf('%s', $image_url[0]); ?>); background-repeat: no-repeat;" class=" document-main" >
<div class="document-details grey-bg">
    <div class="document-thumb">
 <div class="document-thumb-view">
    	<a href="<?php printf('%s', $image_url[0]); ?>" target="_blank" title="Click to view document in a new window"><img src="<?php printf('%s', $image_url[0]); ?>"></a>

    </div>
<p><a href="<?php printf('%s', $image_url[0]); ?>" target="_blank" title="Click to view document in a new window">View full size</a></p>
    </div>
  <div class="document-description">
<b><?php the_title();?></b>
<p>
<?php the_content();?></p>

<p>
<a href="https://discovery.nationalarchives.gov.uk/results/r?_q=<?php the_title();?>" target="_blank">Find out more</a> about this document in Discovery - our catalogue.</p>
</div>
</div>
</div>