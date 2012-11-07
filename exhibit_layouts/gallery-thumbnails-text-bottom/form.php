<fieldset class="<?php echo html_escape($layout); ?>">
	<div class="primary">
    <?php
    for($i=1; $i <= 12; $i++):
	    echo exhibit_builder_layout_form_item($i);	    
    endfor;
    ?>
	</div>
	<div class="secondary">
		<h3>Left Column Text</h3>
	<?php
	    echo exhibit_builder_layout_form_text(1);
	?>
	
	</div>
		<h3>Right Column Text</h3>
	<?php
		echo exhibit_builder_layout_form_text(2);
	?>

</fieldset>
