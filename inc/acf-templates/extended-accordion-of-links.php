
          <?php while(has_sub_field('extended-accordion-of-links')): ?>
            <div class="accordion">
              <h3 class="toggle"><?php echo(get_sub_field('heading-text')); ?></h3>
              <div class="accordion-content">
                <?php if(get_sub_field('preamble-paragraph')): ?>
                  <?php printf("<p>%s</p>", get_sub_field('preamble-paragraph')) ?>
                <?php endif; ?>
                <?php if(get_sub_field('link-data')): ?>
                  <?php while(has_sub_field('link-data')): ?>
                    <?php if(get_sub_field('link-information-paragraph')): ?>
                    <?php printf("<p>%s</p>", get_sub_field('link-information-paragraph')) ?>
                  <?php endif; ?>
                    <p> <?php printf("<a href='%s' target='_blank' title='PDF, opens in a new window'>%s</a> <span class='file-type-and-size'>%s</span>", get_sub_field('link-href'), get_sub_field('link-text'), get_sub_field('document-type-and-file-size')); ?> </p>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>