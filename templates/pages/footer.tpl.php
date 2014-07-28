 <!-- yo agrego variable $base <?php  Global $base_url;  ?>-->
  <footer class="l-footer panel" role="contentinfo">

    <div class="row">	
		<div class="large-12 columns logos-images">
			<div class="row">
				<div class="large-3 small-12 columns">
					<ul class="logos-li">
						<li class="premium"><a class="canaturh" href="#">Canaturh</a></li>
						<li class="premium"><a class="iht" href="#">IHT</a></li>
					</ul>
				</div>
				<div class="large-2 small-12 columns">
					<ul class="logos-li">
						<li class="sponser"><a class="usaid" href="#">usaid</a></li>
						<li class="sponser"><a class="nwt" href="#">New World Trips</a></li>
					</ul>
				</div>
				<div class="large-2 small-12 columns">
					<ul class="logos-li">
						<li class="sponser"><a class="patrocinador" href="#">patrocinador</a></li>
						<li class="sponser"><a class="patrocinador" href="#">patrocinador</a></li>
					</ul>
				</div>
				<div class="large-2 small-12 columns">
					<ul class="logos-li">
						<li class="sponser"><a class="patrocinador" href="#">patrocinador</a></li>
						<li class="sponser"><a class="patrocinador" href="#">patrocinador</a></li>
					</ul>
				</div>
				<div class="large-2 small-12 columns">
					<ul class="logos-li">
						<li class="sponser"><a class="patrocinador" href="#">patrocinador</a></li>
						<li class="sponser"><a class="patrocinador" href="#">patrocinador</a></li>
					</ul>
				</div>
				<div class="large-1 small-12 columns">
					
				</div>
			</div>

		<!--
			<div class="large-1 columns logos-divs">
		 		<ul class="row img-footer">
					<li class="large-12 small-4 columns"><img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos/canat_logo3.jpg" /></li>
			 	</ul>
		 	</div>
			<div class="large-1 columns logos-divs">
				<ul class="row img-footer">
					<li class="large-12 small-6 columns"><img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos/ith_logo1.jpg" /></li>

				</ul>
			</div>
			<div class="large-2 columns logos-divs bigs">
				<ul class="row img-footer">
				 	<li class="large-12 small-4 columns"><img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos/usai_logo2.png" /></li>
				 	<li class="large-12 small-4 columns"><img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos/nw_logo2.png" /></li>
			 	</ul>
		 	</div>
			<div class="large-1 columns logos-divs">
		 		<ul class="row img-footer">
					<li class="large-12 small-6 columns"><img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos/logo_hn_tips1.png" /></li>
					<li class="large-12 small-4 columns"><img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos/honduras_logo2.jpg" /></li>
			 	</ul>
		 	</div>
	
		 	<div class="large-1 columns logos-divs">
				<ul class="row img-footer">
					<li class="large-12 small-6 columns"><img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos/inter_logo.jpg" /></li>
					<li class="large-12 small-6 columns monop"><img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos/marriot_logo.png" /></li>
			 	</ul>
		 	</div>
			
			<div class="large-1 columns logos-divs">
				<ul class="row img-footer">
					<li class="large-12 small-6 columns"><img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos/taca.jpg" /></li>
					<li class="large-12 small-6 columns monop"><img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos/indura_logo.jpg" /></li>
			 	</ul>
		 	</div>
			
			<div class="large-1 columns logos-divs">
				<ul class="row img-footer">
					<li class="large-12 small-6 columns"><img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos/bac_bamer-logo.jpg" /></li>
					<li class="large-12 small-6 columns monop"><img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos/Hilton-Hotels-logo3.jpg" /></li>
			 	</ul>
		 	</div>
			
			<div class="large-4 columns logos-divs">
				<ul class="row img-footer">

			 	</ul>
			</div>   -->
		</div>
	</div>
    <div class="row">
	  <?php if (!empty($page['footermenu'])): ?>
		<div id="subfooter" class="large-12 columns">
			<?php print render($page['subfooter']); ?>
		</div>
	  <?php endif; ?>	
      
      <div class="copyright large-12 columns">
		<div class="large-2 small-6 columns copy">&copy; <?php print date('Y') . ' CANATURH '?></div>
		  
		<div class="large-8 small-6 columns">
			
		<?php if (!empty($page['footermenu'])): ?>
			<?php print render($page['footermenu']); ?>
		<?php endif; ?>
		
		</div>
		  
		<div class="large-2 small-12 columns">
			<img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos//marca1.png" />
		</div>
      </div>
		  
		  
		  
		
    </div>
  </footer>