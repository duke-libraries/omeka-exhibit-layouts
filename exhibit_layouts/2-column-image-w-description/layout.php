<?php 
	//Name: Text;
	//Description: A full page of text with sections;
	//Author: Andy Hull; 
?>
<!-- <div id="page-column-left" class="grid_12 alpha"> -->
	<?php for ($i=1; $i <= 50; $i++): ?>
   		<?php if(exhibit_builder_use_exhibit_page_item($i)):?>
			<div style="float:left;width:100%;margin-bottom:1em;">
				<?php echo exhibit_builder_exhibit_display_item_description(array('imageSize'=>'thumbnail'), array('class'=>'full','style'=>'float:left;margin-right:10px;'));?>
			</div><!--end divDottedRule-->
   		<?php endif; ?>
	<?php endfor;?>
	<div class="text-full">
		<div class="primary" style="float:left;">
			<div class="exhibit-text">
				<?php echo exhibit_builder_page_text(1); ?>
			</div>
		</div>
	</div>
<!-- </div> --><!--end page-column-left-->

<!-- <div id="page-column-right" class="grid_4 omega"> -->
	<!-- <div class="shadedBox"> -->
		<!-- <div id="exhibit-sections">	 -->
			<!-- <h2>Exhibit Sections</h2> -->
			<?php //echo exhibit_builder_nested_nav_with_intro(null, false); ?>
			<?php e//cho exhibit_builder_page_text(2);  ?>
		<!-- </div> -->
		<!-- <div class="previous"><?php echo exhibit_builder_link_to_previous_exhibit_page_custom(); ?></div> -->
		<!-- <div class="next"><?php echo exhibit_builder_link_to_next_exhibit_page_custom(); ?></div> -->
	<!-- </div> --> <!-- shadedBox -->
<!-- </div> --><!-- end page-column-right-->
<!-- <div class="clear"></div> -->
