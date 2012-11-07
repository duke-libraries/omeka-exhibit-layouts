<?php 
	//Name: Image List Left Thumbs;
	//Description: An image gallery, with the thumbnail image on the left;
	//Author: Jeremy Boggs; 
?>
<!-- <div id="page-column-left" class="grid_12 alpha"> -->
	<div class="image-list-left-thumbs">
		<?php for ($i=3; $i <= 20; $i++): ?>
			<?php if(exhibit_builder_use_exhibit_page_item($i)):?>
			    <div class="exhibit-item">
					<?php echo exhibit_builder_exhibit_display_item(array('imageSize'=>'thumbnail'), array('class'=>'permalink')); ?>
					<?php if($text = exhibit_builder_page_text($i)): ?>
			        <div class="exhibit-text"><?php echo $text; ?></div>
					<?php endif; ?>
			    </div>
			<?php endif; ?>
		<?php endfor;?>
	</div>
<!-- </div> --> <!-- end page-column-left -->