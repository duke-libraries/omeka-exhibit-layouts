<fieldset class="form-gallery-thumbs">
	<?php
	for($i=1; $i <= 12; $i++):
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
