  <section class="row" id="breadcrumb-holder" tabindex="-1">
      <div class="col starts-at-full clr">
          <nav id="breadcrumb">
              <ul>
                  <li><span class="first"><a href="/">Home</a></span>
                      <?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('','</li>');
} ?>
              </ul>
          </nav>
      </div>
  </section>