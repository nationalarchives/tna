    <?php 
    /*
    Uses ACF to determine the correct opening times for a given day
    */
              $current_date   = date('Y-m-d');
              $day_of_week  = date('l');
              if ($day_of_week === 'Sunday' || $day_of_week === 'Monday') {
                $str_open_close = 'closed';
              } elseif ($day_of_week === 'Tuesday' || $day_of_week === 'Thursday') {
                $str_open_close = 'open';
                $str_opening_times = '09:00 - 19:00';
              } else {
                $str_open_close = 'open';
                $str_opening_times = '09:00 - 17:00';
              }

              if (have_rows('opening-time-changes', 'option')) {
                while(has_sub_field('opening-time-changes', 'option')){
                  if (get_sub_field('date') === $current_date && strtolower(get_sub_field('tna-open')) === 'closed') {
                     $str_open_close = 'closed';
                  } elseif (get_sub_field('date') === $current_date && strtolower(get_sub_field('tna-open')) === 'open') {
                     $str_open_close = "open";
                     $str_opening_times = get_sub_field('opening-times');
                  }
                }
              }
              if (have_rows('opening-times-override', get_option( 'page_on_front' ))) {
                $rows = get_field('opening-times-override', get_option( 'page_on_front' ));
                $row = $rows[0];
                if ($row[ 'override' ]) {
                  $str_open_close = strtolower($row['open-or-closed']);
                  if ($str_open_close === 'open') {
                    $str_opening_times = $row[ 'opening-times' ];
                  }
                }
              }

?>
                <div class="todayOpen">
                  <p><span>Today</span> we are <strong><?php echo strtolower($str_open_close);?></strong>
                    <br />
                    <?php if (strtolower($str_open_close) === 'open'):?>
                      <span class="bigTime"><?php echo $str_opening_times;?></span>
                     <?php else:?>
                      <a href="http://www.nationalarchives.gov.uk/visit/times.htm">Opening times</a>
                     <?php endif;?> 
                  </p>
                </div>
