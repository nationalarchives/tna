          <?php while(has_sub_field('accordion-of-paragraphs')): ?>
            <details class="accordion">
              <summary><?php echo(get_sub_field('heading-text')); ?></summary>
              <div class="accordion-content">
                  <?php echo(get_sub_field('paragraphs')); ?>
              </div>
          </details>
          <?php endwhile; ?>