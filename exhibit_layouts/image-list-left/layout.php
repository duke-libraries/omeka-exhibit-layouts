<?php 
	//Name: Image List Left;
	//Description: An image gallery, with a full-size image on the left;
	//Author: Jeremy Boggs; 
?>
<!-- <div id="page-column-left" class="grid_12 alpha"> -->
	<div class="image-list-left">
		<?php for ($i=3; $i <= 10; $i++): ?>
	   		<?php if(exhibit_builder_use_exhibit_page_item($i)):?>
	   		    <div class="exhibit-item">
					<h3><?php echo item('Dublin Core', 'Title'); ?></h3>
					<?php if ($text = exhibit_builder_page_text($i)): ?>
	   		        <div class="exhibit-text"><?php echo $text; ?></div>
					<?php echo exhibit_builder_exhibit_display_item(array('imageSize'=>'fullsize'), array('class'=>'permalink')); ?>
					
					<?php endif; ?>
	   		    </div>
	   		<?php endif; ?>
		<?php endfor;?>
	</div>
<!-- </div> --> <!-- end page-column-left -->
