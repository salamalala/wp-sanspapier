<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wp-sanspapier
 */

?>

</div><!-- wrapper for content outside of footer-->
</div>

<footer class="footer" role="contentinfo">
  <div class="footer-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/logo_def.svg" alt="Logo Sans Papier Beratungsstelle">
    <h4>Verein Berner Beratungsstelle für Sans-Papiers | Eigerplatz 5 | 3007 Bern | +41 31 385 18 27</h4>
  </div>

  <div class="footer-secondary-links">
    <ul class="footer-social">
      <li><a href="javascript:void(0)">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/facebook-logo-circle.png" alt="Facebook">
      </a></li>
      <li><a href="javascript:void(0)">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/twitter-logo-circle.png" alt="Twitter">
      </a></li>
    </ul>
  </div>
</footer><!-- #colophon -->



<script  type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/main.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
