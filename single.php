<?php get_header(); ?>

   <!-- Fotografie -->
   <section class="mod mod--image-feed">

      <div class="row">
         <div class="column">

	         <?php
	         if ( have_posts() ) {
		         while ( have_posts() ) {
			         the_post(); ?>
                  <h1><?php the_title(); ?></h1>
			         <?php
			         if( has_post_thumbnail() ) {
				         the_post_thumbnail('large');
			         }
			         ?>
                  <div class="lead"><?php the_content(''); ?></div>
                  <?php
		         }
		         wp_reset_postdata();
	         }
	         ?>

         </div>
      </div>

   </section>
   <!-- Fotografie ENDE -->

<?php get_footer();