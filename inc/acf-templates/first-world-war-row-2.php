<div class="row">
  
<!-- Column 1 : Picture box #1 -->
<div class="col starts-at-full ends-at-one-third box no-bg">
	  
	<?php $pictureboxrow = $pictureboxes[0];?>
	       <a href="<?php echo $pictureboxrow['fww-box-link']; ?>" 
	       <?php if($pictureboxrow['fww-box-link-type']):?>
		       title="External website - link opens in a new window"
		       target="_blank"
	       <?php endif;?>       
	>
		<div class="image-container <?php echo $pictureboxrow['fww-picturebox-name']; ?>">
			<h2> 
		        <span><span><?php echo $pictureboxrow['fww-box-title']; ?></span></span> 
			</h2>
		</div>
	</a>
	<p>We've published more digitised <a href="/first-world-war/centenary-unit-war-diaries/" title="Find out more about unit war diaries">unit war diaries</a> on Discovery.</p>
	<form action="https://discovery.nationalarchives.gov.uk/SearchUI/s/res" id="dolSearch" method="get" name="searchform5532">
		<input name="discoveryCustomSearch" value="true" type="hidden"><label for="Regiment">Search now by regiment, battalion, brigade or division number:</label><input id="Regiment" class="width-half" type="text" required aria-required="true" name="_q"><!--<label for="Battalion, brigade or division (number)">Battalion, brigade or division (number)</label><input id="Battalion, brigade or division (number)" class="inlineSearch" name="_t2" /> --><input id="Hidden1" name="_ser" value="WO 95" type="hidden"><input id="Hidden2" name="_col" value="online" type="hidden"><input class="search-button" type="submit" value="Search">
	</form>
</div>
  
<!-- Column 2 : Picture box #2  -->
<div class="col starts-at-full ends-at-one-third box no-bg">
	<?php $pictureboxrow = $pictureboxes[1];?>
	<a href="<?php echo $pictureboxrow['fww-box-link']; ?>" 
		<?php if($pictureboxrow['fww-box-link-type']):?>
			title="External website - link opens in a new window"
			target="_blank"
		<?php endif;?>
	>
		<div class="image-container <?php echo $pictureboxrow['fww-picturebox-name']; ?>">
			<h2>
				<span><span><?php echo $pictureboxrow['fww-box-title']; ?></span></span>
			</h2>
		</div>
	</a>
	<?php if(trim($pictureboxrow['fww-box-subtitle']) != false):?> 
		<h3>
			<a href="<?php echo $pictureboxrow['fww-box-subtitle-link']; ?>">
				<?php echo $pictureboxrow['fww-box-subtitle']; ?>
			</a>
		</h3>
	<?php endif;?>  
	<?php echo $pictureboxrow['fww-box-content']; ?>
</div>
  
  
<!-- Column 3 : Picture box #3  -->
<div class="col starts-at-full ends-at-one-third box no-bg">
	<?php $pictureboxrow = $pictureboxes[2];?>
	<a href="<?php echo $pictureboxrow['fww-box-link']; ?>" 
		<?php if($pictureboxrow['fww-box-link-type']):?>
			title="External website - link opens in a new window"
			target="_blank"
		<?php endif;?>
	>
		<div class="image-container <?php echo $pictureboxrow['fww-picturebox-name']; ?>">
			<h2>
				<span><span><?php echo $pictureboxrow['fww-box-title']; ?></span></span>
			</h2>
		</div>
	</a>
	<?php if(trim($pictureboxrow['fww-box-subtitle']) != false):?> 
		<h3>
			<a href="<?php echo $pictureboxrow['fww-box-subtitle-link']; ?>">
				<?php echo $pictureboxrow['fww-box-subtitle']; ?>
			</a>
		</h3>
	<?php endif;?>  
	<?php echo $pictureboxrow['fww-box-content']; ?>
</div>
  
  
  
  
  </div>