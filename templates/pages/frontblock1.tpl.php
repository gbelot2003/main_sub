<?php 
global $language_content; 
if($language_content->language == "es"){
	$hotels = "/es/con-quien/hoteles";
	$rest = "/es/con-quien/restaurantes";
	$tour = "/es/con-quien/tour-operadores";
	$tran = "/es/con-quien/transportes";
} else {
	$hotels = "/en/with-whom/hotels";
	$rest = "/en/with-whom/restarants";
	$tour = "/en/with-whom/tour-operator";
	$tran = "/en/with-whom/transports";
}
?>
<div class="row">		
		<div class="large-6 small-12 columns">
			<div class="">
				<h2 class="front-title"><span class="guara"><?php print t("Explore") ?> <span>Honduras</span> </span></h2>
				<div>
					<h5 class="portal"><?php print t("the heart of Central America") ?></h5>
				</div>
				
					<div class="img-h h"><a title="#">Hotel</a></div>
					<div class="img-t h"><a title="#">Transportes</a></div>
					<div class="img-o h"><a title="#">Restaurantes</a></div>
					<div class="img-s h"><a title="#">Tour Operador</a></div>
			</div>
			
			<div id="slider-destiny">
				<?php print views_embed_view('views_front', $display_id = 'block') ?>
			</div>
		</div>
		
		<div class="large-6 small-12 columns">
			<div class="row">

				<?php print views_embed_view('taxonomias_frontpage', $display_id = 'block') ?>
				
				<div class="large-12 columns">
					<?php print views_embed_view('views_front', $display_id = 'block_1') ?>
				</div>
				
				<div class="large-5 columns">
				</div>
			</div><!-- end row -->
		</div>
		
	</div>
</div>

