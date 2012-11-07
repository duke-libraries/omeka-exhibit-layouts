<?php 
	//Name: Gallery Full Left;
	//Description: An image gallery, with a wider left column;
	//Author: Jeremy Boggs; 
?>

<!-- <div id="page-column-left" class="grid_12 alpha gallery-full-left"> -->
	<!-- <div class="primary" > -->
		<?php if($text = exhibit_builder_page_text(1)):?>
		<div class="tertiary">
			<div class="exhibit-text"><?php echo exhibit_builder_page_text(1); ?></div>
		</div>
		<?php endif; ?>
		<?php if(exhibit_builder_use_exhibit_page_item(1)):?>
		<div class="exhibit-item">
			<?php echo exhibit_builder_exhibit_display_item(array('imageSize'=>'fullsize'), array('class'=>'permalink')); ?>
			<h3><?php echo item('Dublin Core', 'Title'); ?></h3>
			<p><?php echo item('Dublin Core', 'Description'); ?></p>
			<?php //echo exhibit_builder_link_to_exhibit_item('Item Link'); ?>
		</div>
		<?php endif; ?>
	<!-- </div> -->
<!-- </div> --> <!-- end page-column-left -->
<div class="secondary gallery">
	<?php echo exhibit_builder_display_exhibit_thumbnail_gallery(2, 10, array('class'=>'permalink', 'width'=>'100px')); ?>
</div>
	
	

