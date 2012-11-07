<?php 
	//Name: Gallery Full Top;
	//Description: An image gallery, with a wider left column;
	//Author: Jeremy Boggs; 
?>
<?php echo js('jquery-1.4.2')?>

<!-- <div id="page-column-left" class="grid_12 alpha gallery-full-left"> -->
	<!-- <div class="primary" > -->
		
		
		<div class="exhibit-item">
			<div class="secondary gallery grid_12 alpha" style="padding-bottom:10px;">
				<?php echo exhibit_builder_display_exhibit_thumbnail_gallery(2, 10, array('class'=>'permalink grid_2 spacer', 'width'=>'100px')); ?>
			</div>
			<div class="clear"></div>
			<div class="grid_12 alpha" id="imageDiv" style="float:left;">
				<?php if(exhibit_builder_use_exhibit_page_item(1)):?>
				<?php echo exhibit_builder_exhibit_display_item(array('imageSize'=>'fullsize'), array('class'=>'permalink')); ?>
				<!-- <h3><?php //echo item('Dublin Core', 'Title'); ?></h3>
								<p><?php //echo item('Dublin Core', 'Description'); ?></p> -->
			</div>
			<?php //echo exhibit_builder_link_to_exhibit_item('Item Link'); ?>
			
		</div>
		<?php endif; ?>
		<div class="clear"></div>
	<!-- </div> -->
<!-- </div> --> <!-- end page-column-left -->

<?php if($text = exhibit_builder_page_text(1)):?>
	<div class="tertiary">
		<div class="exhibit-text"><?php echo exhibit_builder_page_text(1); ?></div>
	</div>
<?php endif; ?>
	
<script>
	var lrgImage = $('#imageDiv > a >img')
	if(lrgImage.width()>600){
		var aspect = lrgImage.height()/lrgImage.width()
		lrgImage.width(550);
		var newHeight = lrgImage.width() * aspect;
		lrgImage.height(newHeight);
	}
	
</script>
