<?php while(has_sub_field('accordion-of-links')): ?>
<details class="accordion">
  <summary><?php echo(get_sub_field('heading-text')); ?></summary>
  <div class="accordion-content">
    <?php if(get_sub_field('preamble-paragraph')): ?>
    <?php printf("<p>%s</p>", get_sub_field('preamble-paragraph')) ?>
    <?php endif; ?>
    <?php if(get_sub_field('link-data')): ?>
    <?php while(has_sub_field('link-data')): ?>
    <p> <?php printf("<a href='%s' target='_blank' title='PDF, opens in a new window'>%s</a> <span class='file-type-and-size'>%s</span>", get_sub_field('link-href'), get_sub_field('link-text'), get_sub_field('document-type-and-file-size')); ?> </p>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<?php endwhile; ?>