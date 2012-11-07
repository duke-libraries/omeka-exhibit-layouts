<fieldset>
	<div class="secondary">
	<?php
	    for($i=1; $i <= 15; $i++):
    	    echo exhibit_builder_layout_form_item($i);	    
	    endfor;
	?>
	</div>
	<?php 
	    echo "<div class='field'><h3>Left column text</h3>".exhibit_builder_layout_form_text(1)."</div>";
		echo "<div class='field'><h3>Right column text</h3>".exhibit_builder_layout_form_text(2)."</div>";
	?>
	
</fieldset>
