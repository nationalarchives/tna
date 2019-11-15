    <?php if(!has_term( 'no-indicator', 'guidance' )) { ?>
      <div class="breather clr">
        <h2 class="indicator no-print">How can I view the records covered in this guide?</h2>
          <?php

          // Order copies description variables
          $copies_unavailable = 'We do not provide copies of online records – please download to view';
          $copies_available = 'We can either <a href="/help-with-your-research/record-copying/">copy our records</a> onto paper or deliver them to you digitally';

          // On state variables
          $highlight_none = '<ul role="presentation"><li class="none-small">None</li><li aria-hidden="true">Some</li><li aria-hidden="true">All</li></ul>';
          $highlight_some = '<ul role="presentation"><li aria-hidden="true">None</li><li class="some-small">Some</li><li aria-hidden="true">All</li></ul>';
          $highlight_all = '<ul role="presentation"><li aria-hidden="true">None</li><li aria-hidden="true">Some</li><li class="all-small">All</li></ul>';

          // Icon style variables
          $icon_none = 'none';
          $icon_some = 'some';
          $icon_all = 'all';
          $icon_empty = '';

          // Code to format for access indicator
          $format = <<<HTML
<div class="indicator" role="tablist" aria-label="How can I view the records review in this guide?" id="delivery-options-tablist">

    <div class="item">
        <button role="tab" aria-selected="true" aria-controls="delivery-options-tablist" id="view-online" class="toggle-heading no-print %s">
            View Online
        </button>
        <div class="indicator-description clr" aria-labelledby="view-online" role="tabpanel" tabindex="0">
            <div class="breather">
                <p>How many are online?</p> %s</div>
        </div>
    </div>

    <div class="item no-print">
        <button role="tab" aria-selected="false" aria-controls="delivery-options-tablist" class="toggle-heading %s" id="order-copies">
            Order copies
        </button>
        <div class="indicator-description clr" aria-labelledby="order-copies" role="tabpanel" tabindex="0">
            <div class="breather">
                <p>%s</p>
            </div>
        </div>
    </div>

    <div class="item no-print">
        <button role="tab" aria-selected="false" aria-controls="delivery-options-tablist" class="toggle-heading" id="visit-us">
            Visit us in Kew
        </button>
        <div class="indicator-description clr" aria-labelledby="visit-us" role="tabpanel" tabindex="0">
            <div class="breather">
                <p><a href="/about/visit-us/">Visit us in Kew</a> to see original documents or view online records for free</p>
            </div>
        </div>
    </div>

    <div class="item no-print">
        <button role="tab" aria-selected="false" aria-controls="delivery-options-tablist" id="pay-research" class="toggle-heading">
            Pay for research
        </button>

        <div class="indicator-description clr" aria-labelledby="pay-research" role="tabpanel"  tabindex="0">
            <div class="breather">
                <p>Consider <a href="/help-with-your-research/paying-for-research">paying for
                    research</a></p>
            </div>
        </div>
    </div>

</div>
HTML;

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
