<fieldset class="<?php echo $layout; ?>">

<div class="primary">
	<h3>Left Column</h3>
	<?php 
	    echo exhibit_builder_layout_form_item(1);
	    echo exhibit_builder_layout_form_text(1); 
	?>
</div>
<h3>Right Column</h3>
<?php
echo exhibit_builder_layout_form_text(2);
?>
</fieldset>
