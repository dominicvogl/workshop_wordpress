<!DOCTYPE html>
<html lang="de">

<!-- Im Browser nicht sichtbare Inhalte -->
<head>

	<!-- Zeichensatz einstellen -->
	<meta charset="utf-8">

	<!-- Viewport für mobile konfigurieren -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Wordpress Workshop</title>

	<link href="https://fonts.googleapis.com/css?family=Abel|Roboto+Slab" rel="stylesheet">
	<link rel="stylesheet" href="dist/css/app.css" type="text/css" media="all" />

	<?php wp_head(); ?>

</head>

<!-- Im Browser sichtbare Inhalte -->
<body>

<!-- Logo -->
<a href="#" class="logo">
	<span>DV</span>
</a>
<!-- Logo ENDE -->

<!-- Navigation -->
<nav class="mod--navigation">
	<ul class="list--reset main--navigation">
      <?php
      wp_nav_menu( array(
         'menu' => 'primary',
         'container' => '',
         'menu_class' => 'list--reset main--navigation'
      ) );
      ?>
	</ul>
</nav>
<!-- Navigation ENDE -->