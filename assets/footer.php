<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wp-sanspapier
 */

?>
        </main><!-- site content-->
      </div><!-- main-outer-container-->
    </div><!-- wrapper-for-content-outside-of-footer-->


    <footer class="footer" role="contentinfo">
      <div class="footer-content">
        
        <h4>Verein Berner Beratungsstelle für Sans-Papiers | Eigerplatz 5 | 3007 Bern | <a href="tel://+41 31 385 18 27">+41 31 385 18 27</a></h4>

        <ul>
          <li>
            <svg class="fb-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="960px" height="560px" viewBox="200 0 560 560" enable-background="new 0 0 960 560" xml:space="preserve">
               <a xlink:href="https://www.facebook.com/SansPapiersBern" target="_parent">
                <path fill="#fff" d="M480 0C325.36 0 200 125.36 200 280c0 154.65 125.36 280 280 280s280-125.35 280-280C760 125.36 634.64 0 480 0zM546.32 193.49h-42.1c-4.98 0-10.53 6.54-10.53 15.3v30.4h52.62v43.33H493.69v130.12h-49.7V282.52H398.94v-43.33h45.05v-25.5c0-36.57 25.39-66.31 60.22-66.31h42.1L546.32 193.49 546.32 193.49z"/>
                </a>
            </svg>
          </li>

          <li>
            <svg class="twitter-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="560px" height="560px" viewBox="200 0 560 560" enable-background="new 0 0 960 560" xml:space="preserve" >
              <a xlink:href="https://twitter.com/SansPapiersBern" target="_parent">
                <path fill="#fff" d="M480 0C325.35 0 200 125.36 200 280c0 154.65 125.35 280 280 280 154.64 0 280-125.35 280-280C760 125.36 634.64 0 480 0zM593.87 229.38c0.12 2.37 0.16 4.75 0.16 7.14 0 72.88-55.48 156.91-156.9 156.91 -31.14 0-60.12-9.13-84.52-24.78 4.31 0.52 8.69 0.78 13.15 0.78 25.84 0 49.62-8.81 68.5-23.61 -24.13-0.44-44.5-16.39-51.52-38.29 3.37 0.64 6.83 0.99 10.38 0.99 5.02 0 9.9-0.68 14.53-1.94 -25.22-5.07-44.24-27.35-44.24-54.08 0-0.23 0-0.46 0.01-0.69 7.43 4.13 15.94 6.61 24.97 6.9 -14.8-9.89-24.53-26.77-24.53-45.91 0-10.1 2.71-19.57 7.46-27.72 27.2 33.37 67.84 55.32 113.67 57.62 -0.94-4.04-1.42-8.25-1.42-12.57 0-30.46 24.69-55.14 55.14-55.14 15.86 0 30.19 6.7 40.25 17.41 12.56-2.47 24.37-7.06 35.02-13.38 -4.12 12.88-12.86 23.69-24.24 30.51 11.15-1.33 21.78-4.29 31.68-8.68C614.01 211.89 604.65 221.61 593.87 229.38z"/>
              </a>
            </svg>
          </li> 

        </ul>
      </div>

    </footer>


    <?php wp_footer(); ?>

    <script  type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/main.min.js"></script>

    <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDe7jBX-HMogImeuWCTG102lgLOI0YMqQc&callback=initMap">
    </script>

  </body>
</html>
