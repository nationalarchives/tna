          <?php while(has_sub_field('accordion-of-paragraphs')): ?>
            <div class="accordion">
              <h2 class="toggle"><?php echo(get_sub_field('heading-text')); ?></h2>
              <div class="accordion-content">
                  <?php echo(get_sub_field('paragraphs')); ?>
              </div>
            </div>
          <?php endwhile; ?>