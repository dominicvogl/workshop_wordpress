<?php get_header(); ?>

   <section class="mod mod--blogroll">

      <ul class="list--reset blogroll row">

			<?php
         if ( have_posts() ) {
				while( have_posts() ) {
					the_post();
					$columns = 'column col-6';
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

<?php get_footer();