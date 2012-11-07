<?php 
	//Name: 2-column-slideshow;
	//Description: Slideshow on left with text;
	//Author: Andy Hull; 
?>
<?php echo js('jquery-1.4.2')?>
<?php echo js('galleria'); ?>
<script>
    Galleria.loadTheme('http://exhibits.library.duke.edu/themes/main_library/javascripts/themes/classic/galleria.classic.js');
</script>

<script type="text/javascript">
$(document).ready(function() {
// window.onload =	function() {
	$('#gallery').show();
	$('#progress').hide();
	$('#gallery').galleria({
        image_crop: false,
		autoplay: 7000,
		transition: 'fade',
		popup_links: true,
		height: '500px',
		data_config: function(img) {
            // img is now the image element
            // the function should return an object with the new data
            return {
				title: $(img).attr('alt'),
                description: $(img).parent().attr('rel') // sets description to "My picture"
            };
        }
    });
});
</script>
<div id="progress">Loading</div>
	      <div id="gallery" style="display:none;">
			<?php for ($i=1; $i <= 50; $i++): ?>
		   		<?php if(exhibit_builder_use_exhibit_page_item($i)):?>
						<?php echo exhibit_builder_exhibit_display_item3(array('imageSize'=>'fullsize'), array('class'=>'full')); ?>
		   		<?php endif; ?>
			<?php endfor;?>
			</div>
	<div class="exhibit-text">
		<?php echo exhibit_builder_page_text(1); ?>
	</div>