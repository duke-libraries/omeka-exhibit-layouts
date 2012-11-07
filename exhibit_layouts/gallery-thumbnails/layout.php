<?php 
	//Name: Gallery Thumbnails;
	//Description: Displays a gallery of up to 12 items;
	//Author: Jeremy Boggs; 
?>
<!-- <div id="page-column-left" class="grid_12 alpha gallery-full-left"> -->
	<div class="gallery-thumbnails">
		<div class="primary">
			<?php echo exhibit_builder_display_exhibit_thumbnail_gallery(1, 12, array('class'=>'permalink')); ?>
		</div>
	</div>
<!-- </div> --> <!-- end page-column-left -->
