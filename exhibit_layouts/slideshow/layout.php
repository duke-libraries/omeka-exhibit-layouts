<?php 
	//Name: Text Image Left;
	//Description: A full page of text, with a full-size image floated left;
	//Author: Jeremy Boggs; 
?>
<?php echo js('mootools'); ?>
<?php echo js('jd-gallery'); ?>
<?php echo js('jd-gallery-set'); ?>
<?php echo js('jd-gallery-transitions'); ?>

<script type="text/javascript">

//Event.observe(window, 'load', startGallery);

function startGallery() {
var myGallery = new gallery($('myGallery'), {
timed: true,
delay: 7000,
showInfopane: true,
showCarousel: false,
textShowCarousel: 'Photographs'
});
}
//window.onDomReady(startGallery);
window.onload =startGallery;
</script>
<div class="text-image-left">
	<div class="primary">
		<div class="exhibit-text">
			<?php echo exhibit_builder_page_text(1); ?>
		</div>
	</div>
</div>
<div class="pageSection" id="blackBox">
	<div id="slideShow">
      <div id="myGallery">
	    <?php //echo exhibit_builder_exhibit_slideshow(1, 5, array('class'=>'permalink')); ?>
		<?php for ($i=1; $i <= 8; $i++): ?>
	   		<?php if(exhibit_builder_use_exhibit_page_item($i)):?>
					<div class="imageElement">
					<?php echo exhibit_builder_exhibit_display_item2(array('imageSize'=>'fullsize'), array('class'=>'full')); ?>
					<?php //echo item('Dublin Core', 'Title'); ?>
					</div>
	   		<?php endif; ?>
		<?php endfor;?>
		</div>
	</div>
</div>
