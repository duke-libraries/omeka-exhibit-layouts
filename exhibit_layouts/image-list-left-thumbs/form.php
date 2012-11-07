<fieldset class="<?php echo html_escape($layout); ?>">
	<?php for($i=3; $i<=10; $i++): ?>
	    <div class="section">
    	<?php 
    	    echo exhibit_builder_layout_form_item($i);
    	    echo exhibit_builder_layout_form_text($i);
    	?>
    	</div>
	<?php endfor; ?>
	<h3>Right Column Text</h3>
	<?php
	echo exhibit_builder_layout_form_text(2);
	?>
</fieldset>
