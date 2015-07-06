    <?php if(!has_term( 'no-indicator', 'guidance' )) { ?>
      <div class="breather clr">
        <h2 class="indicator no-print">How can I view the records covered in this guide?</h2>
          <?php 

          // Order copies description variables
          $copies_unavailable = 'We do not provide copies of online records – please download to view';
          $copies_available = 'We can either <a href="https://apps.nationalarchives.gov.uk/recordcopying/">copy our records</a> onto paper or deliver them to you digitally';
          
          // On state variables
          $highlight_none = '<ul><li class="none-small">None</li><li>Some</li><li>All</li></ul>';
          $highlight_some = '<ul><li>None</li><li class="some-small">Some</li><li>All</li></ul>';
          $highlight_all = '<ul><li>None</li><li>Some</li><li class="all-small">All</li></ul>';
          
          // Icon style variables
          $icon_none = 'none';
          $icon_some = 'some';
          $icon_all = 'all';
          $icon_empty = '';

          // Code to format for access indicator
          $format = '<div class="indicator"> <div class="item"> <h3 class="toggle-heading no-print %s" id="view-online">View online</h3> <div class="indicator-description clr" aria-labelledby="view-online"> <div class="breather"> <p>How many are online?</p>%s</div></div></div><div class="item no-print"> <h3 class="toggle-heading %s" id="order-copies">Order copies</h3> <div class="indicator-description clr" aria-labelledby="order-copies"> <div class="breather"> <p>%s</p></div></div></div><div class="item no-print"> <h3 class="toggle-heading" id="pay-research">Pay for research</h3> <div class="indicator-description clr" aria-labelledby="pay-research"> <div class="breather"> <p>Use our paid <a href="http://www.nationalarchives.gov.uk/records/paid-search-service.htm">search service</a> or find an <a href="http://apps.nationalarchives.gov.uk/irlist/">independent researcher</a></p></div></div></div><div class="item no-print"> <h3 class="toggle-heading" id="visit-us">Visit us</h3> <div class="indicator-description clr" aria-labelledby="visit-us"> <div class="breather"> <p><a href="http://www.nationalarchives.gov.uk/visit/">Visit us in Kew</a> to see original documents or view online records for free</p></div></div></div></div>';              
         
          // If all are online...
          if (has_term( 'online', 'guidance' )) {
            printf ($format, $icon_all, $highlight_all, $icon_none, $copies_unavailable);
          }
          // If some are online...
          elseif (has_term( 'some-online', 'guidance' )) {
            printf ($format, $icon_some, $highlight_some, $icon_empty, $copies_available);
          }
          // Otherwise...
          else {
            printf ($format, $icon_none, $highlight_none, $icon_empty, $copies_available);
          }

          ?>
      </div><!-- end .breather -->
    <?php } ?>
