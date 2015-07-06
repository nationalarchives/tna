<div class="row">

<div class="col starts-at-full ends-at-half box no-bg">
<div class="image-container eventsbox"><h2> 
        <span><span>Events calendar</span></span> 
      </h2></div>


    <p>
<ul class="full white">

<?php

  $events_output = '<li><a href="%1$s">%2$s</a><br>%3$s</li>';
  $events_rows = get_field('events-calendar');

    if ($events_rows) {

      foreach($events_rows as $row) {

         
          echo sprintf(
                        $events_output, 
                        $row[ 'event-link' ],
                        $row[ 'event-title' ],
                        $row[ 'event-date' ]
                      );
        }
  
  }


?>





</ul></p>


    


  </div>
  
 <div class="col starts-at-full ends-at-half box no-bg">
 
 <div class="image-container activitybox"><h2> 
        <span><span>Nationwide centenary activity</span></span> 
      </h2></div>
 

    

   <?php the_field('nationwide-centenary-activity'); ?>



  </div>
  
  

</div>