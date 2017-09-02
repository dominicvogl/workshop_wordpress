<!-- Footer -->
<footer class="mod mod--footer row">

	<hr>

	<!-- Kontaktdaten -->
	<div class="column col-4">
		<p>
			Dominic Vogl<br/>
			Sterntalerring 58<br/>
			95447 Bayreuth
		</p>
		<p>Mobil: 0171 8387615</p>
	</div>

	<!-- Navigation im Footer -->
	<nav class="column col-4">
		<ul class="list--reset">
			<li>
				<a href="#" title="Datenschutz">Datenschutz</a>
			</li>
			<li>
				<a href="#" title="Impressum">Impressum</a>
			</li>
		</ul>
	</nav>

	<!-- Social Media Profile -->
	<div class="column col-4">
		<ul class="list--reset social-media">
			<li>
				<a href="https://www.facebook.com/vogl.photography/" title="Facebook" target="_blank">Facebook</a>
			</li>
			<li>
				<a href="https://www.instagram.com/vogl_photography/" title="Instagram" target="_blank">Instagram</a>
			</li>
			<li>
				<a href="https://500px.com/vogl-photography" title="500px" target="_blank">500px</a>
			</li>
		</ul>
	</div>

</footer>
<!-- Footer ENDE -->

<?php wp_footer(); ?>

<script type="text/javascript">

   // Init Slider
   $('.mod--slider').each(function() {
      $(this).slick();
   });

   // Init Macy
   var macy  = Macy({
      container: '#image--feed',
      trueOrder: false,
      waitForImages: false,
      margin: 1,
      columns: 3,
      breakAt: {
         460: 2
      }
   });

</script>