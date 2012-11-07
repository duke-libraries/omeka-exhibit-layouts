<fieldset class="<?php echo $layout; ?>">
	<?php 
	    echo exhibit_builder_layout_form_item(1);
	    echo exhibit_builder_layout_form_text(1);
    ?>

	<div style="width:100%;float:left;">
		<h3>Right Column Text</h3>
		<?php
		echo exhibit_builder_layout_form_text(2);
		?>
	</div>
</fieldset>
