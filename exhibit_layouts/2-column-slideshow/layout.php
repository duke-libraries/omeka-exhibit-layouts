<?php 
	//Name: 2-column-slideshow;
	//Description: SLideshow on left with text;
	//Author: Andy Hull; 
?>
<?php echo js('mootools'); ?>
<?php echo js('jd-gallery'); ?>
<?php echo js('jd-gallery-set'); ?>
<?php echo js('jd-gallery-transitions'); ?>

<script type="text/javascript">
var myGallery;

window.onload =	function startGallery() {
	var myGallery = new gallery($('myGallery'), {
		timed: true,
		delay: 7000,
		showInfopane: true,
		showCarousel: false,
		textShowCarousel: 'Photographs'
	});
	var galleryDiv = $('myGallery');
	galleryDiv.addEvent('mouseover', function() {
		myGallery.clearTimer();
		myGallery.showInfoSlideShow();
	});

	galleryDiv.addEvent('mouseout', function() {
		myGallery.prepareTimer();
		myGallery.hideInfoSlideShow();
	});
	// $('#myGallery').show();
	myGallery.show;
}
</script>

<!-- <div id="page-column-left" class="grid_12 alpha"> -->
	<div class="pageSection" id="blackBox">
		<div id="slideShow">
	      <div id="myGallery" style="display:none;">
			<?php for ($i=1; $i <= 8; $i++): ?>
		   		<?php if(exhibit_builder_use_exhibit_page_item($i)):?>
					<div class="imageElement">
						<?php echo exhibit_builder_exhibit_display_item2(array('imageSize'=>'fullsize'), array('class'=>'full')); 
						?>
					</div>
						<?php //echo item('Dublin Core', 'Title'); ?>
		   		<?php endif; ?>
			<?php endfor;?>
			</div>
		</div>
	</div>
	<div class="exhibit-text">
		<?php echo exhibit_builder_page_text(1); ?>
	</div>
<!-- </div> --><!--end page-column-left-->