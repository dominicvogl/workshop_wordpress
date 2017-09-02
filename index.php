<?php get_header(); ?>

<div class="mod row">
   <div class="column">

      <div class="mod--slider">
         <div>
            <img src="dist/assets/images/lost_place-09.jpg" alt="preview" />
         </div>
         <div>
            <img src="dist/assets/images/lost_place-10.jpg" alt="preview" />
         </div>
         <div>
            <img src="dist/assets/images/lost_place-13.jpg" alt="preview" />
         </div>
      </div>

   </div>
</div>

<!-- Fotografie -->
<section class="mod mod--image-feed">

   <div class="row">
      <div class="column">
         <h1>Fotografie</h1>

         <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quo modo autem philosophus loquitur? Quasi ego id curem,
            quid ille aiat aut neget. Si longus, levis dictata sunt. Restinguet citius, si ardentem acceperit. Sed potestne rerum
            maior esse dissensio? Habes, inquam, Cato, formam eorum, de quibus loquor, philosophorum.</p>

         <ul id="image--feed" class="image--feed list--reset">

            <li class="feed--item">

               <img src="dist/assets/images/lost_place-09.jpg" alt="Lost Place">

               <div class="item--meta">
                  <span class="tag">Lost Place</span>
               </div>

            </li>

            <li class="feed--item">

               <img src="dist/assets/images-copyright/portrait-01.jpg" alt="Portrait">

               <div class="item--meta">
                  <span class="tag">Portrait</span>
               </div>

            </li>

            <li class="feed--item">

               <img src="dist/assets/images-copyright/portrait-03.jpg" alt="Portrait">

               <div class="item--meta">
                  <span class="tag">Portrait</span>
               </div>

            </li>

            <li class="feed--item">

               <img src="dist/assets/images/lost_place-10.jpg" alt="Lost Place">

               <div class="item--meta">
                  <span class="tag">Lost Place</span>
               </div>

            </li>

            <li class="feed--item">

               <img src="dist/assets/images-copyright/portrait-05.jpg" alt="Portrait">

               <div class="item--meta">
                  <span class="tag">Portrait</span>
               </div>

            </li>

            <li class="feed--item">

               <img src="dist/assets/images/lost_place-11.jpg" alt="Lost Place">

               <div class="item--meta">
                  <span class="tag">Lost Place</span>
               </div>

            </li>

         </ul>
      </div>
   </div>

</section>
<!-- Fotografie ENDE -->

<section class="mod mod--blogroll">

   <ul class="list--reset blogroll row">

      <!-- Blogpost -->
      <li class="column col-6">
         <article>
            <div class="inner-content">
               <h3>Mein erster Blogpsot</h3>
               <b>03.04.2017</b> // Autor: <strong>Dominic Vogl</strong>
               <p>Das ist eine tolle Einleitung für meinen ersten Blogbeitrag... Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               <a class="button" href="#">weiterlesen</a>
            </div>
         </article>
      </li>
      <!-- Blogpost ENDE -->

      <!-- Blogpost -->
      <li class="column col-6">
         <article>
            <div class="inner-content">
               <h3>Mein erster Blogpsot</h3>
               <b>03.04.2017</b> // Autor: <strong>Dominic Vogl</strong>
               <p>Das ist eine tolle Einleitung für meinen ersten Blogbeitrag... Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               <a class="button" href="#">weiterlesen</a>
            </div>
         </article>
      </li>
      <!-- Blogpost ENDE -->

      <!-- Blogpost -->
      <li class="column col-4">
         <article>
            <div class="inner-content">
               <h3>Mein erster Blogpsot</h3>
               <b>03.04.2017</b> // Autor: <strong>Dominic Vogl</strong>
               <p>Das ist eine tolle Einleitung für meinen ersten Blogbeitrag... Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               <a class="button" href="#">weiterlesen</a>
            </div>
         </article>
      </li>
      <!-- Blogpost ENDE -->

      <!-- Blogpost -->
      <li class="column col-4">
         <article>
            <div class="inner-content">
               <h3>Mein erster Blogpsot</h3>
               <b>03.04.2017</b> // Autor: <strong>Dominic Vogl</strong>
               <p>Das ist eine tolle Einleitung für meinen ersten Blogbeitrag... Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               <a class="button" href="#">weiterlesen</a>
            </div>
         </article>
      </li>
      <!-- Blogpost ENDE -->

      <!-- Blogpost -->
      <li class="column col-4">
         <article>
            <div class="inner-content">
               <h3>Mein erster Blogpsot</h3>
               <b>03.04.2017</b> // Autor: <strong>Dominic Vogl</strong>
               <p>Das ist eine tolle Einleitung für meinen ersten Blogbeitrag... Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               <a class="button" href="#">weiterlesen</a>
            </div>
         </article>
      </li>
      <!-- Blogpost ENDE -->

   </ul>

</section>

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

<script src="dist/js/app.js" type="text/javascript"></script>

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

</body>

</html>