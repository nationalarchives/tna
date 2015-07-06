<?php
/*
Template Name: Centenary map
*/
 ?>
<!doctype html>
<html>
<?php include 'inc/centenary-map/header.php';?>
  <div class="clear"></div>
  <div class="container" id="container">
   <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            //
            // Post Content here
            //
        endwhile; // end while
    endif; // end if
?>

    <div class="full-height">
      <div class="map-container" id="map-container">
        <div class="country-list">
          <h2>Select a territory</h2>
          <ul>
            <li>Aden</li>
            <li>Anglo-Egyptian Sudan</li>
            <li>Ascension</li>
            <li>Barbados</li>
            <li>Bermuda</li>
            <li>British East Africa</li>
            <li>British Gold Coast</li>
            <li>British Honduras</li>
            <li>British Malaya</li>
            <li>Burma</li>
            <li>Canada</li>
            <li>Ceylon</li>
            <li>Cocos Islands</li>
            <li onclick="doSlide_in('slide-cyprus');scrollUpdate();">Cyprus</li>
            <li>Egypt</li>
            <li onclick="doSlide_in('slide-falkland-islands'); scrollUpdate();">Falkland Islands</li>
            <li>Gambia</li>
            <li>Gibraltar</li>
            <li>Hong Kong &amp; Weihaiwei</li>
            <li>India</li>
            <li>Jamaica</li>
            <li>Leeward Islands</li>
            <li>Maldives</li>
            <li>Malta</li>
            <li>Mauritius</li>
            <li>New Guinea</li>
            <li>Newfoundland</li>
            <li>Nigeria</li>
            <li>Northern Rhodesia</li>
            <li>Nyasaland</li>
            <li>Seychelles</li>
            <li>Sierra Leone</li>
            <li>Singapore &amp; Straits Settlement</li>
            <li>South Africa</li>
            <li>Southern Rhodesia</li>
            <li>St Helena</li>
            <li>Trinidad and Tobago</li>
            <li>Uganda and Zanzibar</li>
            <li>Windward Islands</li>
          </ul>
        </div>
        <div class="positioner">
          <picture id="map"> 
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source srcset="<?php bloginfo('template_url'); ?>/images/centenary-map/centenary-map-1914-final-01.png" media="(min-width: 1024px)">
            <source srcset="<?php bloginfo('template_url'); ?>/images/centenary-map/centenary-map-1914-final-01.png" media="(min-width: 768px)">
            <source srcset="<?php bloginfo('template_url'); ?>/images/centenary-map/centenary-map-1914-final-01.png" media="(min-width: 320px)">
            <!--[if IE 9]></video><![endif]--> 
            <img srcset="<?php bloginfo('template_url'); ?>/images/centenary-map/centenary-map-1914-final-01.jpg" alt="Map of the world"> </picture>
          <?php include 'inc/centenary-map/map-countries.php';?>
        </div>
      </div>
    </div>
  </div>
  <?php include 'inc/centenary-map/footer.php';?>
</html>