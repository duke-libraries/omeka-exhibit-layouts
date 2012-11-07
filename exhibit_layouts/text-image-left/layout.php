<?php 
	//Name: Text Image Left;
	//Description: A full page of text, with a full-size image floated left;
	//Author: Jeremy Boggs; 
?>

<!-- <div id="page-column-left" class="grid_12 alpha"> -->
	<div class="text-image-left">
		<div class="secondary">
			<div class="exhibit-text">
				<?php echo exhibit_builder_page_text(1); ?>
			</div>
		</div>
		<div class="primary">
			<?php if(exhibit_builder_use_exhibit_page_item(1)):?>
			<div class="exhibit-item">
				<?php echo exhibit_builder_exhibit_display_item(array('imageSize'=>'fullsize'), array('class'=>'permalink')); ?>
				<div class="exhibit-item-caption">
				<h3><?php echo item('Dublin Core', 'Title'); ?></h3>
				<?php echo item('Dublin Core', 'Description'); ?>
				<?php echo exhibit_builder_link_to_exhibit_item('Item Link'); ?>
				</div>
			</div>
			<?php endif; ?>	
		</div>
	</div>
<!-- </div> --><!--end page-column-left-->