<!-- Footer -->
<footer class="mod mod--footer row">
	<hr>
	<!-- Kontaktdaten -->
	<div class="column col-4">
		<address>
			Dominic Vogl<br/>
			Sterntalerring 58<br/>
			95447 Bayreuth
		</address>
		<p>Mobil: <a href="tel:+491718387615">0171 8387615</a></p>
	</div>

	<!-- Navigation im Footer -->
	<nav class="column col-4">
		<ul class="list--reset">
         <?php
         /**
          * Liste alle Navigationspunkte für bestimmte Seiten auf
          * https://developer.wordpress.org/reference/functions/wp_list_pages/
          */
         wp_list_pages( array(
            'title_li' => '',
            'include' => '25, 27'
         ) );
         ?>
		</ul>
	</nav>

	<!-- Social Media Profile -->
	<div class="column col-4">
      <?php
      wp_nav_menu( array(
         'menu' => '8',
         'container' => '',
         'menu_class' => 'list--reset social-media'
      ) );
      ?>
	</div>

</footer>
<!-- Footer ENDE -->

<?php
// Binde notwendige Scripte im Footer ein
wp_footer();
?>

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