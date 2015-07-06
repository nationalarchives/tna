<div class="row">
<!-- Column 2 : Picture box #7  -->
<div class="col starts-at-full ends-at-one-third box no-bg">
	<?php $pictureboxrow = $pictureboxes[6];?>
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

  
<!-- Column 2 : Picture box #8  -->
<div class="col starts-at-full ends-at-one-third box no-bg">
	<?php $pictureboxrow = $pictureboxes[7];?>
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


<!-- Column 2 : Picture box #9  -->
<div class="col starts-at-full ends-at-one-third box no-bg">
	<?php $pictureboxrow = $pictureboxes[8];?>
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