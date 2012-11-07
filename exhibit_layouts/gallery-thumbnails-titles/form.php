<fieldset class="form-gallery-thumbs">
	<div class="primary">
		<h3>Left Column Text</h3>
	<?php 
	    echo exhibit_builder_layout_form_text(1);
	?>
	</div>
	<?php
	for($i=1; $i <= 75; $i++):
    	echo exhibit_builder_layout_form_item($i);	    
	endfor;
	?>
	<div style="width:100%;float:left;">
		<h3>Right Column Text</h3>
		<?php
		echo exhibit_builder_layout_form_text(2);
		?>
	</div>
</fieldset>
