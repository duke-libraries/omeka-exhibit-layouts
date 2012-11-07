<?php 
	//Name: Gallery Thumbnails Titles;
	//Description: Displays a gallery of up to 75 items with smaller thumbnails;
	//Author: Andy Hull; 
?>
<!-- <div id="page-column-left" class="grid_12 alpha gallery-full-left"> -->
	<div class="exhibit-text">
		<?php echo exhibit_builder_page_text(1); ?>
	</div>
	<div class="gallery-thumbnails">
		<div class="primary">
			<?php echo exhibit_builder_display_exhibit_thumbnail_gallery_custom(1, 75, array('class'=>'permalink', 'width'=>'100', 'height'=>'100')); ?>
		</div>
	</div>
<!-- </div> --> <!-- end page-column-left -->

<!-- <div id="page-column-right" class="grid_4 omega"> -->
	<!-- <div class="shadedBox">			 -->
			<?php //echo exhibit_builder_nested_nav_with_intro(null, false); ?>
			<?php //echo exhibit_builder_page_text(2); ?>
		<!-- <div class="previous"><?php echo exhibit_builder_link_to_previous_exhibit_page_custom(); ?></div> -->
		<!-- <div class="next"><?php echo exhibit_builder_link_to_next_exhibit_page_custom(); ?></div> -->
	<!-- </div> --> <!-- shadedBox -->
<!-- </div> --><!-- end page-column-right-->
<!-- <div class="clear"></div> -->