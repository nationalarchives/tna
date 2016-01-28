<div class="row" id="breadcrumb-holder">
    <div class="col starts-at-full clr">
        <div id="breadcrumb">
            <span class="first"><a href="/">Home</a>&nbsp;&gt;&nbsp;</span>
            <?php
            	if ($GLOBALS['tnatheme']['ischildsite']) {
	            	if (!empty($GLOBALS['tnatheme']['subsitepatharr'])) {
						foreach ($GLOBALS['tnatheme']['subsitepatharr'] as $key => $value){
							echo '<a href="' . $value . '">' . $key . '</a>&nbsp;&gt;&nbsp;';
						}
	            	}
	            }
            ?>

            <?php if ( function_exists('yoast_breadcrumb') ) {
                $breadcrumbs = yoast_breadcrumb('','',false);
                echo make_urls_root_relative($breadcrumbs);
            } ?>
        </div>
    </div>
</div>

  