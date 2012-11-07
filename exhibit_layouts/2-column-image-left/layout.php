<?php 
	//Name: 2 column image left
	//Description: Large image in left column -- navigation and text in right column;
	//Restricts the size of the large image to the width of page-left-column
	//Author: Andy Hull; 
?>
<!-- <div id="page-column-left" class="grid_12 alpha"> -->
	<?php if(exhibit_builder_use_exhibit_page_item(1)):?>
	<div class="exhibit-item" style="width:100%;overflow:hidden;">
		<?php echo exhibit_builder_exhibit_display_item(array('imageSize'=>'fullsize'), array('class'=>'permalink','style'=>'width:100%;')); ?>
		<?php echo exhibit_builder_page_text(1); ?>
		<?php //echo item('Dublin Core', 'Title'); ?>
		<?php //echo item('Dublin Core', 'Description'); ?>
	</div>
	<?php endif; ?>
<!-- </div> --><!--end page-column-left-->
	
<!-- <div id="page-column-right" class="grid_4 omega"> -->
	<!-- <div class="shadedBox"> -->
			<?php //echo exhibit_builder_nested_nav_with_intro(null, false); ?>
			<?php //echo exhibit_builder_page_text(2); ?>
		<!-- </div> -->
		<!-- <div class="previous"><?php //echo exhibit_builder_link_to_previous_exhibit_page_custom(); ?></div> -->
		<!-- <div class="next"><?php //echo exhibit_builder_link_to_next_exhibit_page_custom(); ?></div> -->
	<!-- </div> --> <!-- shadedBox -->
<!-- </div> --><!-- end page-column-right-->
<!-- <div class="clear"></div> -->