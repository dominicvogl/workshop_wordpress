<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<!-- Im Browser nicht sichtbare Inhalte -->
<head>

	<!-- Zeichensatz einstellen -->
	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Viewport für mobile konfigurieren -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php bloginfo('title'); ?></title>

	<?php
   // Gebe notwendige Scripte oder <meta> Tags an dieser Stelle aus
   wp_head(); ?>

</head>

<!-- Im Browser sichtbare Inhalte -->
<body>

<!-- Logo -->
<a href="<?php echo home_url(); ?>" class="logo">
	<span>DV</span>
</a>
<!-- Logo ENDE -->

<!-- Navigation -->
<nav class="mod--navigation">
	<ul class="list--reset main--navigation">
      <?php
      // Gebe die Hauptnavigation anhand der verschiedenen Parameter aus
      wp_nav_menu( array(
         'menu' => 'primary',
         'container' => '',
         'menu_class' => 'list--reset main--navigation'
      ) );
      ?>
	</ul>
</nav>
<!-- Navigation ENDE -->