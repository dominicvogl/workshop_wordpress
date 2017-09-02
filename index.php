<?php get_header(); ?>

   <div class="mod row">
      <div class="column">

         <div class="mod--slider">
            <div>
               <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/lost_place-09.jpg"
                    alt="preview"/>
            </div>
            <div>
               <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/lost_place-10.jpg"
                    alt="preview"/>
            </div>
            <div>
               <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/lost_place-13.jpg"
                    alt="preview"/>
            </div>
         </div>

      </div>
   </div>

   <!-- Fotografie -->
   <section class="mod mod--image-feed">

      <div class="row">
         <div class="column">
            <h1>Fotografie</h1>

            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quo modo autem philosophus
               loquitur? Quasi ego id curem,
               quid ille aiat aut neget. Si longus, levis dictata sunt. Restinguet citius, si ardentem acceperit. Sed
               potestne rerum
               maior esse dissensio? Habes, inquam, Cato, formam eorum, de quibus loquor, philosophorum.</p>

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
		  if ( have_posts() ) {
			  while ( have_posts() ) {
				  the_post();
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