<?php
/*
Template Name: Centenary Map Loader Test version 2
*/
 ?>
<!doctype html>
<html>
<?php include 'inc/centenary-map/header.php';?>


<div class="clear"></div>
<div id="intro"></div>
<div class="container" id="container">
  <div id="map-content"></div>


  <div class="country-toggle-container">
    <p>Country/Territory list<span class="btn" id="country-toggle">Show</span></p>
  </div>
  <div class="map-toggle" id="map-toggle">
    <div class="map-buttons">
      <p>Change map</p>
      <div class="btn btn-on" id="btn-1914">Wartime</div>
      <div class="btn" id="btn-modern">Now</div>
    </div>
  </div>
  <div class="full-height">


    <div class="map-container" id="map-container">
      <div class="country-list">
        <div id="scrollbar" class="scroller mCustomScrollbar">
          <ul>
            <li><a id="aden-button" data-root="#zc" data-preservescroll="true" href="/first-world-war/a-global-view/aden/" rel="Aden">Aden</a></li>
            <li class="identifier" id="aden-identifier">&nbsp;</li>
            <li><a id="anglo-egyptian-sudan-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/anglo-egyptian-sudan/" rel="Anglo-Egyptian Sudan">Anglo-Egyptian Sudan</a></li>
            <li class="identifier" id="anglo-egyptian-sudan-identifier">&nbsp;</li>
            <li><a id="ascension-island-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/ascension-island/" rel="Ascension Island">Ascension Island</a></li>
            <li class="identifier" id="ascension-island-identifier">&nbsp;</li>
            <li><a id="australia-button" data-root="#zc" data-preservescroll="true" href="/first-world-war/a-global-view/australia/" rel="Australia">Australia</a></li>
            <li class="identifier" id="australia-identifier">&nbsp;</li>
            <li><a id="barbados-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/barbados/" rel="Barbados">Barbados</a></li>
            <li class="identifier" id="barbados-identifier">&nbsp;</li>
            <li><a id="bermuda-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/bermuda/" rel="Bermuda">Bermuda</a></li>
            <li class="identifier" id="bermuda-identifier">&nbsp;</li>
            <li><a id="britain-button" data-root="#zv" data-preservescroll="true" href="#" rel="Britain">Britain</a></li>
            <li class="identifier" id="britain-identifier">&nbsp;</li>
            <li><a id="british-east-africa-button" data-root="#zc" data-preservescroll="true" href="/first-world-war/a-global-view/british-east-africa/" rel="British East Africa">British East Africa</a></li>
            <li class="identifier" id="british-east-africa-identifier">&nbsp;</li>
            
            
            <li><a id="british-gold-coast-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/british-gold-coast/" rel="British Gold Coast">British Gold Coast</a></li>
            <li class="identifier" id="british-gold-coast-identifier">&nbsp;</li>
            <li><a id="british-guiana-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/british-guiana/" rel="British Guiana">British Guiana</a></li>
            <li class="identifier" id="british-guiana-identifier">&nbsp;</li>
            <li><a id="british-honduras-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/british-honduras/" rel="British Honduras">British Honduras</a></li>
            <li class="identifier" id="british-honduras-identifier">&nbsp;</li>
            <li><a id="british-new-guinea-and-german-new-guinea-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/british-new-guinea-and-german-new-guinea/" rel="British New Guinea and German New Guinea">British New Guinea and German New Guinea</a></li>
            <li class="identifier" id="british-new-guinea-and-german-new-guinea-identifier">&nbsp;</li>
            <li><a id="british-north-borneo-and-sarawak-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/british-north-borneo-and-sarawak/" rel="British North Borneo and Sarawak">British North Borneo and Sarawak</a></li>
            <li class="identifier" id="british-north-borneo-and-sarawak-identifier">&nbsp;</li>
            <li><a id="british-somaliland-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/british-somaliland/" rel="British Somaliland">British Somaliland</a></li>
            <li class="identifier" id="british-somaliland-identifier">&nbsp;</li>
            <li><a id="burma-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/burma/" rel="Burma">Burma</a></li>
            <li class="identifier" id="burma-identifier">&nbsp;</li>
            <li><a id="canada-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/canada/" rel="Canada">Canada</a></li>
            <li class="identifier" id="canada-identifier">&nbsp;</li>
            <li><a id="ceylon-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/ceylon/" rel="Ceylon">Ceylon</a></li>
            <li class="identifier" id="ceylon-identifier">&nbsp;</li>
            <li><a id="cocos-keeling-islands-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/cocos-keeling-islands/" rel="Cocos (Keeling) Islands">Cocos (Keeling) Islands</a></li>
            <li class="identifier" id="cocos-keeling-islands-identifier">&nbsp;</li>
            <li><a id="cyprus-button" data-root="#zc" data-preservescroll="true" href="/first-world-war/a-global-view/cyprus/" rel="Cyprus">Cyprus</a></li>
            <li class="identifier" id="cyprus-identifier">&nbsp;</li>
            <li><a id="egypt-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/egypt/" rel="Egypt">Egypt</a></li>
            <li class="identifier" id="egypt-identifier">&nbsp;</li>
            <li><a id="falkland-islands-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/falkland-islands/" rel="Falkland Islands">Falkland Islands</a></li>
            <li class="identifier" id="falkland-islands-identifier">&nbsp;</li>
            <li><a id="gibraltar-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/gibraltar/" rel="Gibraltar">Gibraltar</a></li>
            <li class="identifier" id="gibraltar-identifier">&nbsp;</li>
          
            
            <li><a id="hong-kong-and-weihaiwei-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/hong-kong-and-weihaiwei/" rel="Hong Kong and Wei-Hai-Wei">Hong Kong and Wei-Hai-Wei</a></li>
            <li class="identifier" id="hong-kong-and-weihaiwei-identifier">&nbsp;</li>
            <li><a id="india-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/india/" rel="India">India</a></li>
            <li class="identifier" id="india-identifier">&nbsp;</li>
            <li class="hidden"><a id="bangladesh-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/india/" rel="Bangladesh">Bangladesh</a></li>
            <li class="identifier hidden" id="bangladesh-identifier">&nbsp;</li>
            <li class="hidden"><a id="pakistan-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/india/" rel="Pakistan">Pakistan</a></li>
            <li class="identifier hidden" id="pakistan-identifier">&nbsp;</li>
            <li><a id="jamaica-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/jamaica/" rel="Jamaica">Jamaica</a></li>
            <li class="identifier" id="jamaica-identifier">&nbsp;</li>
            <li><a id="leeward-islands-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/leeward-islands/" rel="Leeward Islands">Leeward Islands</a></li>
            <li class="identifier" id="leeward-islands-identifier">&nbsp;</li>
            <li><a id="malaya-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/malaya/" rel="Malaya">Malaya</a></li>
            <li class="identifier" id="malaya-identifier">&nbsp;</li>
            <li><a id="maldives-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/maldives/" rel="Maldives">Maldives</a></li>
            <li class="identifier" id="maldives-identifier">&nbsp;</li>
            <li><a id="malta-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/malta/" rel="Malta">Malta</a></li>
            <li class="identifier" id="malta-identifier">&nbsp;</li>
            <li><a id="mauritius-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/mauritius/" rel="Mauritius">Mauritius</a></li>
            <li class="identifier" id="mauritius-identifier">&nbsp;</li>
            <li><a id="new-zealand-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/new-zealand/" rel="New Zealand">New Zealand</a></li>
            <li class="identifier" id="new-zealand-identifier">&nbsp;</li>
            <li><a id="newfoundland-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/newfoundland/" rel="Newfoundland">Newfoundland</a></li>
            <li class="identifier" id="newfoundland-identifier">&nbsp;</li>
            <li><a id="nigeria-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/nigeria/" rel="Nigeria">Nigeria</a></li>
            <li class="identifier" id="nigeria-identifier">&nbsp;</li>
            <li><a id="northern-rhodesia-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/northern-rhodesia/" rel="Northern Rhodesia">Northern Rhodesia</a></li>
            <li class="identifier" id="northern-rhodesia-identifier">&nbsp;</li>
            <li><a id="nyasaland-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/nyasaland/" rel="Nyasaland">Nyasaland</a></li>
            <li class="identifier" id="nyasaland-identifier">&nbsp;</li>
            <li><a id="pacific-islands-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/pacific-islands/" rel="Pacific Islands">Pacific Islands</a></li>
            <li class="identifier" id="pacific-islands-identifier">&nbsp;</li>
            <li><a id="seychelles-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/seychelles/" rel="Seychelles">Seychelles</a></li>
            <li class="identifier" id="seychelles-identifier">&nbsp;</li>
            <li><a id="sierra-leone-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/sierra-leone/" rel="Sierra Leone">Sierra Leone</a></li>
            <li class="identifier" id="sierra-leone-identifier">&nbsp;</li>
            <li><a id="straits-settlements-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/straits-settlements/" rel="Straits Settlements">Straits Settlements</a></li>
            <li class="identifier" id="straits-settlements-identifier">&nbsp;</li>
            <li><a id="south-africa-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/south-africa/" rel="South Africa">South Africa</a></li>
            <li class="identifier" id="south-africa-identifier">&nbsp;</li>
            <li class="shown"><a id="south-african-high-commission-territories-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/south-african-high-commission-territories/" rel="South African High Commission Territories">South African High Commission Territories</a></li>
            <li class="identifier shown" id="south-african-high-commission-territories-identifier">&nbsp;</li>
            <li class="hidden"><a id="botswana-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/south-african-high-commission-territories/" rel="Botswana">Botswana</a></li>
            <li class="identifier hidden" id="botswana-identifier">&nbsp;</li>
            <li class="hidden"><a id="lesotho-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/south-african-high-commission-territories/" rel="Lesotho">Lesotho</a></li>
            <li class="identifier hidden" id="lesotho-identifier">&nbsp;</li>
            <li class="hidden"><a id="swaziland-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/south-african-high-commission-territories/" rel="Swaziland">Swaziland</a></li>
            <li class="identifier hidden" id="swaziland-identifier">&nbsp;</li>
            <li><a id="southern-rhodesia-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/southern-rhodesia/" rel="Southern Rhodesia">Southern Rhodesia</a></li>
            <li class="identifier" id="southern-rhodesia-identifier">&nbsp;</li>
            <li><a id="st-helena-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/st-helena/" rel="St Helena">St Helena</a></li>
            <li class="identifier" id="st-helena-identifier">&nbsp;</li>
            <li><a id="the-bahamas-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/the-bahamas/" rel="The Bahamas">The Bahamas</a></li>
            <li class="identifier" id="the-bahamas-identifier">&nbsp;</li>
            <li><a id="the-gambia-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/the-gambia/" rel="The Gambia">The Gambia</a></li>
            <li class="identifier" id="the-gambia-identifier">&nbsp;</li>
            <li><a id="trinidad-and-tobago-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/trinidad-and-tobago/" rel="Trinidad and Tobago">Trinidad and Tobago</a></li>
            <li class="identifier" id="trinidad-and-tobago-identifier">&nbsp;</li>
            <li><a id="uganda-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/uganda/" rel="Uganda">Uganda</a></li>
            <li class="identifier" id="uganda-identifier">&nbsp;</li>
            <li><a id="windward-islands-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/windward-islands/" rel="Windward Islands">Windward Islands</a></li>
            <li class="identifier" id="windward-islands-identifier">&nbsp;</li>
            <li><a id="zanzibar-button" data-root="#zv" data-preservescroll="true" href="/first-world-war/a-global-view/zanzibar/" rel="Zanzibar">Zanzibar</a></li>
            <li class="identifier" id="zanzibar-identifier">&nbsp;</li>
          </ul>
        </div>
      </div>
      <div class="zoomViewport"  id="zv">
        <div class="zoomContainer" id="zc">
          <div class="positioner" id="positioner">
            <picture id="map"> 
              <!--[if IE 9]><video style="display: none;"><![endif]-->
              <source srcset="/wp-content/themes/tna/images/centenary-map/centenary-map-1914-final-05.jpg" media="(min-width: 1024px)">
              <source srcset="/wp-content/themes/tna/images/centenary-map/centenary-map-1914-final-05.jpg" media="(min-width: 768px)">
              <source srcset="/wp-content/themes/tna/images/centenary-map/centenary-map-1914-final-05.jpg" media="(min-width: 321px)">
                    <source srcset="/wp-content/themes/tna/images/centenary-map/centenary-map-1914-final-05-320.jpg" media="(max-width: 320px)">
              <!--[if IE 9]></video><![endif]--> 
              <img srcset="/wp-content/themes/tna/images/centenary-map/centenary-map-1914-final-05.jpg" alt="Map of the world"> </picture>
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="aden" href="/first-world-war/a-global-view/aden/" rel="Aden" title="Aden" data-modern="Adan, Yemen"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="anglo-egyptian-sudan" href="/first-world-war/a-global-view/anglo-egyptian-sudan/" rel="Anglo-Egyptian Sudan" title="Anglo-Egyptian Sudan" data-modern="Sudan/South Sudan"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="ascension-island" href="/first-world-war/a-global-view/ascension-island/" rel="Ascension Island" title="Ascension Island"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="australia" href="/first-world-war/a-global-view/australia/" rel="Australia" title="Australia"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="bangladesh" href="/first-world-war/a-global-view/india/" rel="Bangladesh" title="Bangladesh" data-modern="Bangladesh"></a>
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="barbados" href="/first-world-war/a-global-view/barbados/" rel="Barbados" title="Barbados"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="bermuda" href="/first-world-war/a-global-view/bermuda/" rel="Bermuda" title="Bermuda"></a>  
            <a class="map-marker zoomTarget hasTooltip-no-link" data-targetsize="0.08" data-closeclick="true" id="united-kingdom" href="/first-world-war/a-global-view/britain/" rel="Britain" title="Britain" data-modern="United Kingdom"></a>
          
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="british-north-borneo-and-sarawak" href="/first-world-war/a-global-view/british-north-borneo-and-sarawak/" rel="British North Borneo and Sarawak" title="British North Borneo and Sarawak" data-modern="Sabah and Sarawak, Malaysia"></a>           
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="british-somaliland" href="/first-world-war/a-global-view/british-somaliland/" rel="British Somaliland" title="British Somaliland" data-modern="Somalia"></a>
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="british-east-africa" href="/first-world-war/a-global-view/british-east-africa/" rel="British East Africa" title="British East Africa" data-modern="Kenya"></a>  
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="british-guiana" href="/first-world-war/a-global-view/british-guiana/" rel="British Guiana" title="British Guiana" data-modern="Guyana"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="british-honduras" href="/first-world-war/a-global-view/british-honduras/" rel="British Honduras" title="British Honduras" data-modern="Belize"></a>  
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="burma" href="/first-world-war/a-global-view/burma/" rel="Burma" title="Burma" ></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="canada" href="/first-world-war/a-global-view/canada/" rel="Canada"  title="Canada"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="ceylon" href="/first-world-war/a-global-view/ceylon/" rel="Ceylon" title="Ceylon" data-modern="Sri Lanka"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="cocos-keeling-islands" href="/first-world-war/a-global-view/cocos-keeling-islands/" rel="Cocos (Keeling) Islands"  title="Cocos (Keeling) Islands"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="cyprus" href="/first-world-war/a-global-view/cyprus/" rel="Cyprus" title="Cyprus"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="egypt" href="/first-world-war/a-global-view/egypt/" rel="Egypt" title="Egypt"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="falkland-islands" href="/first-world-war/a-global-view/falkland-islands/" rel="Falkland Islands" title="Falkland Islands"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="the-bahamas" href="/first-world-war/a-global-view/the-bahamas/" rel="The Bahamas" title="The Bahamas"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="the-gambia" href="/first-world-war/a-global-view/the-gambia/" rel="The Gambia" title="The Gambia"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="gibraltar" href="/first-world-war/a-global-view/gibraltar/" rel="Gibraltar" title="Gibraltar"></a> 
            

              
            
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="british-gold-coast" href="/first-world-war/a-global-view/british-gold-coast/" rel="British Gold Coast" title="British Gold Coast" data-modern="Ghana"></a>
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="hong-kong-and-weihaiwei" href="/first-world-war/a-global-view/hong-kong-and-weihaiwei/" rel="Hong Kong and Wei-Hai-Wei" title="Hong Kong and Wei-Hai-Wei" data-modern="Hong Kong and Weihai, People's Republic of China"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="india" href="/first-world-war/a-global-view/india/" rel="India" title="India"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="jamaica" href="/first-world-war/a-global-view/jamaica/" rel="Jamaica" title="Jamaica"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="leeward-islands" href="/first-world-war/a-global-view/leeward-islands/" rel="Leeward Islands" title="Leeward Islands" data-modern="Anguilla, Antigua and Barbuda, St Kitts and Nevis, Montserrat, Dominica and the British Virgin Islands"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="malaya" href="/first-world-war/a-global-view/malaya/" rel="Malaya" title="Malaya" data-modern="Malaysia"></a>
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="maldives" href="/first-world-war/a-global-view/maldives/" rel="Maldives" title="Maldives"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="malta" href="/first-world-war/a-global-view/malta/" rel="Malta" title="Malta"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="mauritius" href="/first-world-war/a-global-view/mauritius/" rel="Mauritius" title="Mauritius"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="british-new-guinea-and-german-new-guinea" href="/first-world-war/a-global-view/british-new-guinea-and-german-new-guinea/" rel="British New Guinea and German New Guinea" title="British New Guinea and German New Guinea" data-modern="Papua New Guinea"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="new-zealand" href="/first-world-war/a-global-view/new-zealand/" rel="New Zealand" title="New Zealand"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="newfoundland" href="/first-world-war/a-global-view/newfoundland/" rel="Newfoundland" title="Newfoundland" data-modern="Newfoundland, Canada"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="nigeria" href="/first-world-war/a-global-view/nigeria/" rel="Nigeria" title="Nigeria"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="northern-rhodesia" href="/first-world-war/a-global-view/northern-rhodesia/" rel="Northern Rhodesia" title="Northern Rhodesia" data-modern="Zambia"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="nyasaland" href="/first-world-war/a-global-view/nyasaland/" rel="Nyasaland" title="Nyasaland" data-modern="Malawi"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="pacific-islands" href="/first-world-war/a-global-view/pacific-islands/" rel="Pacific islands" title="Pacific Islands" data-modern="Fiji, Tonga, Vanuata, Kiribati, Tuvalu and Solomon Islands"></a>
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="pakistan" href="/first-world-war/a-global-view/india/" rel="Pakistan" title="Pakistan" data-modern="Pakistan"></a>            
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="seychelles" href="/first-world-war/a-global-view/seychelles/" rel="Seychelles" title="Seychelles"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="sierra-leone" href="/first-world-war/a-global-view/sierra-leone/" rel="Sierra Leone" title="Sierra Leone"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="straits-settlements" href="/first-world-war/a-global-view/straits-settlements/" rel="Straits Settlements" title="Straits Settlements" data-modern="Singapore and parts of Malaysia"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="south-africa" href="/first-world-war/a-global-view/south-africa/" rel="South Africa" title="South Africa"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="botswana" href="/first-world-war/a-global-view/south-african-high-commission-territories/" rel="South African High Commission Territories" title="South African High Commission Territories" data-modern="Botswana"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="lesotho" href="/first-world-war/a-global-view/south-african-high-commission-territories/" rel="South African High Commission Territories" title="South African High Commission Territories" data-modern="Lesotho"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="swaziland" href="/first-world-war/a-global-view/south-african-high-commission-territories/" rel="South African High Commission Territories" title="South African High Commission Territories" data-modern="Swaziland"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="southern-rhodesia" href="/first-world-war/a-global-view/southern-rhodesia/" rel="Southern Rhodesia" title="Southern Rhodesia" data-modern="Zimbabwe"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="st-helena" href="/first-world-war/a-global-view/st-helena/" rel="St Helena" title="St Helena"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="trinidad-and-tobago" href="/first-world-war/a-global-view/trinidad-and-tobago/" rel="Trinidad and Tobago" title="Trinidad and Tobago"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="uganda" href="/first-world-war/a-global-view/uganda/" rel="Uganda" title="Uganda"></a> 
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="windward-islands" href="/first-world-war/a-global-view/windward-islands/" rel="Windward Islands" title="Windward Islands" data-modern="Grenada, St Vincent and the Grenadines and St Lucia"></a>
            <a class="map-marker zoomTarget hasTooltip" data-targetsize="0.08" data-closeclick="true" id="zanzibar" href="/first-world-war/a-global-view/zanzibar/" rel="Zanzibar" title="Zanzibar" data-modern="Zanzibar, Tanzania"></a>
			
			<h3 id="mobile-only">Country/Territory list</h3>
            <select id="country-menu">
              <option>--Select a country/territory--</option>
              <option id="aden-menu" value="aden">Aden</option>
              <option id="anglo-egyptian-sudan-menu" value="anglo-egyptian-sudan">Anglo-Egyptian Sudan</option>
              <option value="ascension-island">Ascension Island</option>
              <option value="australia">Australia</option>
              <option value="barbados">Barbados</option>
              <option value="bermuda">Bermuda</option>    
              <option id="britain-menu" value="britain">Britain</option>    
              <option id="british-east-africa-menu" value="british-east-africa">British East Africa</option>
              <option id="british-gold-coast-menu" value="british-gold-coast">British Gold Coast</option>
              <option id="british-guiana-menu" value="british-guiana">British Guiana</option>
              <option id="british-honduras-menu" value="british-honduras">British Honduras</option>
              <option id="british-new-guinea-and-german-new-guinea-menu" value="british-new-guinea-and-german-new-guinea">British New Guinea and German New Guinea</option>
              <option id="british-north-borneo-and-sarawak-menu" value="british-north-borneo-and-sarawak">British North Borneo and Sarawak</option> 
              <option id="british-somaliland-menu" value="british-somaliland">British Somaliland</option> 
              <option id="burma-menu" value="burma">Burma</option>
              <option value="canada">Canada</option>
              <option id="ceylon-menu" value="ceylon">Ceylon</option>
              <option value="cocos-keeling-islands">Cocos (Keeling) Islands</option>
              <option value="cyprus">Cyprus</option>
              <option value="egypt">Egypt</option>
              <option value="falkland-islands">Falkland Islands</option>             
              <option value="gibraltar">Gibraltar</option>
              <option id="hong-kong-and-weihaiwei-menu" value="hong-kong-and-weihaiwei">Hong Kong &amp; Wei-Hai-Wei</option>
              <option value="india">India</option>
              <option value="jamaica">Jamaica</option>
              <option id="leeward-islands-menu" value="leeward-islands">Leeward Islands</option>
              <option id="malaya-menu" value="malaya">Malaya</option>
              <option value="maldives">Maldives</option>
              <option value="malta">Malta</option>
              <option value="mauritius">Mauritius</option>              
              <option value="new-zealand">New Zealand</option>
              <option id="newfoundland-menu" value="newfoundland">Newfoundland</option>
              <option value="nigeria">Nigeria</option>
              <option id="northern-rhodesia-menu" value="northern-rhodesia">Northern Rhodesia</option>
              <option id="nyasaland-menu" value="nyasaland">Nyasaland</option>
              <option id="pacific-islands-menu" value="pacific-islands">Pacific Islands</option>
              <option value="seychelles">Seychelles</option>
              <option value="sierra-leone">Sierra Leone</option>
              <option id="straits-settlements-menu" value="straits-settlements">Straits Settlements</option>
              <option value="south-africa">South Africa</option>
              <option id="south-african-high-commission-territories-menu" value="south-african-high-commission-territories">South African High Commission Territories</option>
              <option id="southern-rhodesia-menu" value="southern-rhodesia">Southern Rhodesia</option>
              <option value="st-helena">St Helena</option>
              <option value="the-bahamas">The Bahamas</option>
              <option value="the-gambia">The Gambia</option>
              <option value="trinidad-and-tobago">Trinidad and Tobago</option>
              <option value="uganda">Uganda</option>
              <option id="windward-islands-menu" value="windward-islands">Windward Islands</option>
              <option id="zanzibar-menu" value="zanzibar">Zanzibar</option>
            </select>
          </div>
    <div id="key" class="key-container">
    <div class="key">
  	<div class="breather">
    <h3 id="key-title">Key to empires in the First World War</h3>
    <div id="key-copy">This map is designed to provide an outline of countries and borders during wartime rather than a precise location of places, borders or features.</div>
    <div class="marker-container">
   <img src="/wp-content/themes/tna/images/centenary-map/map-marker-small.png" alt="Map maker icon" id="key-marker"> <span>Countries and territories marked with a pin were part of the British Empire in 1914.</span>
   </div>
    	<ul id="key-li">
        	<li id="austria"><span class="austro-hungarian"></span>Austria-Hungary</li>
            <li><span class="belgian"></span>Belgium</li>
       	 	<li id="britain"><span class="british"></span>Britain</li>
            <li><span class="danish"></span>Denmark</li>
            <li><span class="french"></span>France</li>
        	<li><span class="german"></span>Germany</li>
            <li><span class="italian"></span>Italy</li>
            <li><span class="dutch"></span>Netherlands</li>
            <li id="ottoman"><span class="ottoman"></span>Ottoman Empire</li>
            <li><span class="portugese"></span>Portugal</li>
            <li><span class="spanish"></span>Spain</li>
            <li><span class="soviet"></span>Russia</li>
            <li><span class="japan"></span>Japan</li>
            <li id="independent"><span class="independent"></span>Independent</li>
        </ul>
        
    </div>
    </div>
  </div>
        </div>
      </div>
    </div>
    <div class="clear10px"></div>
  </div>
  <div class="help"><a href="#top" id="help">About this map</a></div>
  </div>

  <?php include 'inc/centenary-map/footer.php';?>
</html>