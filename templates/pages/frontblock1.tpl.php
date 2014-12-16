<div class="row">
		<div class="small-12 columns">
			<div class="large-12 columns">
				<!-- nota principal-->	
				<?php print views_embed_view('views_front', $display_id = 'block_2');  ?>
			</div>
		</div>

		<div class="large-6 small-12 columns">
			<div class="row">
				<?php print views_embed_view('views_front', $display_id = 'block_11') ?>
				
				<div class="large-12 columns">
					<?php print views_embed_view('views_front', $display_id = 'block_1') ?>
				</div>
				
			<div class="large-5 columns">
			
			</div>
		</div><!-- end row -->
	</div>	
</div>

<hr style="visibility: hidden" /> 

<div class="row">
	<div id="font-block-3" class="large-12 columns">
		<hr style="visibility: hidden" />   
		<div class="row">
			<div class="large-5 small-12 columns">
				<div class="large-12 columns video">
					<?php print views_embed_view('views_front', $display_id = 'block_9');  ?></div>

			<div class="large-12 columns">
				<div class="large-12 columns">
					<?php print views_embed_view('views_front', $display_id = 'block_6');  ?></div>
				</div>
				
				<div class="large-12 columns">
					<div class="hash">
						<div class="row">
							<div class="large-12 columns">
								<?php print render($page['hash']) ?></div>
							</div>
						</div>
					</div>
				</div>

				<div class="large-7 small-12 columns">

					<div class="large-12 columns blog-slide">
						<!-- blog-->	
						<?php print views_embed_view('views_front', $display_id = 'block_3');  ?></div>
				<div class="large-12 columns">
					<h5><?php print t("Event's Calendar") ?></h5>
					<?php print views_embed_view('eventos_y_festividades', $display_id = 'block');?></div>
			</div>
		</div>
	</div>
</div>