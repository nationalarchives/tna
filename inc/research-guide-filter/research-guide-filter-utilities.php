      <div class="heading-holding-banner clr">
        <h1><span><span>Research guides</span></span></h1>
        <div class="utilities float-left-to-right pad-small hue-grey-lightest">
          <ul class="text-small">
            <li id="category-toggle" class="text-blue"><button class="mimic-link" role="link">Choose a different subject</button></li>
           <li><a href="/help-with-your-research/research-guides-keywords/" class="text-blue">Our A-Z index</a></li>
            <li id="search-toggle" class="text-blue"><button class="mimic-link" role="link">Search all guides</button></li>
          </ul>
        </div><!-- end utilities -->
      </div><!-- end heading-holding-banner -->
      <!-- Search -->


      <div id="utility-search" class="width-full float-left" <?php if ($ressearch){ echo("style='display:block !important;'"); } ?>>
        <div class="pad-medium margin-medium hue-grey-lighter clr no-left-right-margin">

<!-- search form -->

<form name="guide-search" id="guide-search" method="GET" action="/help-with-your-research/research-guides/">
              <label for="search" class="sr-only">Search all research guides</label>
              <input type="text" class="search-field input-extended" id="search" name="search" placeholder="<?php echo("Search all research guides...");?>" value="<?php if ($ressearch) {echo stripslashes(($ressearch));}?>">
              <input type="submit" class="js-show-spinner search-button-medium" value="Submit search">
              <input type="hidden" name="research-category" value="">

</form>

<!-- search form -->



        </div><!-- end pad-medium -->
      </div><!-- end width-full -->

      <!-- Subjects -->
      <div id="utility-category" class="margin-medium hue-grey-lighter float-left no-left-right-margin" <?php if (!$ressearch && $rescat =="0" && !is_page_template('research-guide-keywords.php')){ echo("style='display:block !important;'"); } ?>>
        <div class="pad-medium clr">
<div class="subject-links">
<a href="/help-with-your-research/research-guides/">All research guides</a>

 <a href="/help-with-your-research/research-guides/?research-category=family-history">Family history</a>

<a href="/help-with-your-research/research-guides/?research-category=first-world-war">First World War</a>

<a href="/help-with-your-research/research-guides/?research-category=second-world-war-research">Second World War</a>

<a href="/help-with-your-research/research-guides/?research-category=military-and-maritime">Military and maritime</a>

<a href="/help-with-your-research/research-guides/?research-category=social-and-cultural-history">Social and cultural history</a>

<a href="/help-with-your-research/research-guides/?research-category=criminals-courts-and-prisons">Criminals, courts and prisons</a>

<a href="/help-with-your-research/research-guides/?research-category=political-and-economic-history">Political and economic history</a>

<a href="/help-with-your-research/research-guides/?research-category=foreign-and-colonial-history">Foreign and colonial history</a>

<a href="/help-with-your-research/research-guides/?research-category=land-and-maps">Land and maps</a>

<a href="/help-with-your-research/research-guides/?research-category=medieval-early-modern-history">Medieval and early modern history</a>

<a href="/help-with-your-research/research-guides/?research-category=records-for-current-legal-purposes">Records for current legal purposes</a>

<a href="/help-with-your-research/research-guides/?research-category=online">Online collections</a>
</div>

        </div><!-- end pad-medium -->
      </div><!-- end width-full -->
