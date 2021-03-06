<?php get_header(); ?>

   <!-- START: Slider im Kopfbereich der Startseite -->
   <section class="mod row">

      <div class="column">
         <div class="mod--slider">

				<?php
				$header_args = array(
					'post_type'      => 'post',
					'posts_per_page' => 3,
					'category__in'   => array( 6 )
				);

				$sliders = get_posts( $header_args );

				if ( is_array( $sliders ) ) {
					foreach ( $sliders as $post ) {
						setup_postdata( $post );
						if ( has_post_thumbnail( $post->ID ) ) { ?>
                     <div>
                        <header><?php echo $post->post_title; ?></header>
	                     <?php echo get_the_post_thumbnail( $post->ID, 'slider' ); ?>
                        <a href="<?php the_permalink($post->ID); ?>" class="button">weiterlesen</a>
                     </div>
                  <?php
						}
					}
				}
				wp_reset_postdata();
				?>

         </div>
      </div>

   </section>
   <!-- ENDE: Slider im Kopfbereich der Startseite -->

   <!-- START: Portfoliobereich / Bildergrid -->
   <section class="mod mod--image-feed">

      <div class="row">
         <div class="column">

	         <?php
	         /**
	          * Die Dokumentation für den Loop findest du hier:
             * URL: https://codex.wordpress.org/The_Loop
	          */
	         if ( have_posts() ) {
		         while ( have_posts() ) {
			         the_post(); ?>
                  <h1><?php the_title(); ?></h1>
                  <div class="lead"><?php the_content(''); ?></div>
                  <?php
		         } // end while
		         wp_reset_postdata();
	         } // end if
            else {
	            ?>
               <h1><?php _e('Sorry...'); ?></h1>
               <div class="lead"><?php _e('... leider wurden keine Posts gefunden');;?></div>
               <?php
            } // end else if
	         ?>

            <ul id="image--feed" class="image--feed list--reset">

	            <?php
	            $attachment_args = array(
		            'post_type' => 'attachment',
                  'posts_per_page' => 5,
                  'orderby' => 'rand'
	            );

	            $attachment_posts = get_posts($attachment_args);

	            if ( is_array($attachment_posts) ) {
		            foreach($attachment_posts as $post) {
			            setup_postdata($post); ?>
                     <!-- Blogpost -->
                     <li class="feed--item">
                        <?php echo wp_get_attachment_image($post->ID, 'large'); ?>
                        <div class="item--meta">
                           <span class="tag"><?php echo $post->post_title; ?></span>
                        </div>
                     </li>
                     <!-- Blogpost ENDE -->
			            <?php
		            }
		            wp_reset_postdata();
	            }
	            ?>

            </ul>

         </div>
      </div>

   </section>
   <!-- ENDE: Portfoliobereich / Bildergrid -->

   <!-- START Blogbereich mit aktuellen Beiträgen -->
   <section class="mod mod--blogroll">

      <h1>Blogbeiträge</h1>

      <ul class="list--reset blogroll row">

			<?php
         $count = 0;
         $loop_args = array(
            'post_type' => 'post'
         );

         $query_posts = new WP_Query($loop_args);

         if ( $query_posts -> have_posts() ) {
				while( $query_posts -> have_posts() ) {
					$query_posts -> the_post();

					$columns = 'column col-4';
					if ( $count < 2 ) {
						$columns = 'column col-6';
					}
					?>
               <!-- Blogpost -->
               <li class="<?php echo $columns; ?>">
                  <article>
                     <div class="inner-content">
                        <h3><?php the_title(); ?></h3>
                        <b><?php the_time( 'd. m. Y' ); ?></b> // Autor: <strong><?php the_author(); ?></strong>
                        <div class="content"><?php the_excerpt(); ?></div>
                        <a class="button" href="<?php the_permalink(); ?>">weiterlesen</a>
                     </div>
                  </article>
               </li>
               <!-- Blogpost ENDE -->
					<?php
					$count ++;
				}
				wp_reset_postdata();
			}
			?>

      </ul>

   </section>
   <!-- START Blogbereich mit aktuellen Beiträgen -->

<?php get_footer();