<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package tna-dev
 */

get_header(); ?>

<div id="page_wrap" class="container" role="main">
  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
  <div class="row">
    <div class="col starts-at-full ends-at-two-thirds box clr">
      <div class="heading-holding-banner">
        <h1><span><span>Sorry, page not found</span></span></h1>
      </div>
      <div class="breather">
        <p class="standfirst margin-bottom-medium">This page is not on The National Archives' website or in the UK Government Web Archive.</p>
        <ul>
          <li>The page may have been moved, updated or deleted. We may have a missing page or an incorrect link. Please contact us to let us know, and we will correct our mistake.</li>
          <li> We recommend you start again from our <a href="http://www.nationalarchives.gov.uk">home page</a> or try our <a href="/help/atoz.htm">A-Z index</a> to find what you were looking for.</li>
        </ul>
       <!--  <hr />

        <div class="feature-box margin-bottom-large">
<div class="breather">
           <?php get_search_form(); ?>  
          </div> 
        </div>-->
      </div>

      <!-- content goes here -->
    </div>
    <div class="col starts-at-full ends-at-one-third clr box">
      <div class="heading-holding-banner">
        <h2> <span> <span>Popular pages</span> </span> </h2>
      </div>
      <div class="breather">
        <ul class="sibling">
          <li><a href="/records/looking-for-person/" title="">Looking for a person?</a></li>
          <li><a href="/records/catalogues-and-online-records.htm" title="">Catalogues and online records</a></li>
          <li><a href="/records/birthmarriagedeathcertificates.htm" title="">Birth, marriage and death certificates</a></li>
          <li><a href="/records/census-records.htm" title="">Census</a></li>
          <li><a href="/records/looking-for-subject/ufos.htm" title="">UFOs</a></li>

        </ul>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
