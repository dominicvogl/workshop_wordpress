<?php get_header(); ?>

   <div class="mod row">
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
                        <?php echo $post->post_title; ?>
                        <?php echo get_the_post_thumbnail( $post->ID, 'slider' ); ?>
                     </div>
                  <?php
						}
					}
				}
				wp_reset_postdata();
				?>

         </div>
      </div>
   </div>

   <!-- Fotografie -->
   <section class="mod mod--image-feed">

      <div class="row">
         <div class="column">

	         <?php
	         if ( have_posts() ) {
		         while ( have_posts() ) {
			         the_post();
			         the_title('<h1>', '</h1>');
			         echo "<div class='lead'>".get_the_content('')."</div>";
		         }
		         wp_reset_postdata();
	         }
	         ?>
            
            <ul id="image--feed" class="image--feed list--reset">

               <li class="feed--item">

                  <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/lost_place-09.jpg"
                       alt="Lost Place">

                  <div class="item--meta">
                     <span class="tag">Lost Place</span>
                  </div>

               </li>

               <li class="feed--item">

                  <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images-copyright/portrait-01.jpg"
                       alt="Portrait">

                  <div class="item--meta">
                     <span class="tag">Portrait</span>
                  </div>

               </li>

               <li class="feed--item">

                  <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images-copyright/portrait-03.jpg"
                       alt="Portrait">

                  <div class="item--meta">
                     <span class="tag">Portrait</span>
                  </div>

               </li>

               <li class="feed--item">

                  <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/lost_place-10.jpg"
                       alt="Lost Place">

                  <div class="item--meta">
                     <span class="tag">Lost Place</span>
                  </div>

               </li>

               <li class="feed--item">

                  <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images-copyright/portrait-05.jpg"
                       alt="Portrait">

                  <div class="item--meta">
                     <span class="tag">Portrait</span>
                  </div>

               </li>

            </ul>
         </div>
      </div>

   </section>
   <!-- Fotografie ENDE -->

   <section class="mod mod--blogroll">

      <ul class="list--reset blogroll row">

			<?php
         $count = 0;
         $loop_args = array(
            'post_type' => 'post'
         );

         $loop_posts = get_posts($loop_args);

			if ( is_array($loop_posts) ) {
				foreach($loop_posts as $post) {
					setup_postdata($post);

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

<?php get_footer(); ?>