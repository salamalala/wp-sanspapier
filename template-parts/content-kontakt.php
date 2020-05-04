<?php /* Template Name: Kontakt */


get_header();

?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>

<div class="fullwidth-box box pink-box contact">
  <div class="contact-information">
    <h1>Kontakt: </h1>
    <p>
      Verein Berner Beratungsstelle für Sans-Papiers
      <br>
      Effingerstrasse 35
      <br>
      3008 Bern
      <br>
      Tel: 031 382 00 15
      <br>
      <a href="mailto:beratung@sanspapiersbern.ch">Email: beratung@sanspapiersbern.ch </a>
      <br>
      Fax: 031 382 00 18
    <p>
  </div>

  <div class="contact-form">
    <?php echo do_shortcode( '[contact-form-7 id="4" title="Kontaktformular"]' ); ?>
  </div>

</div>




<?php   get_footer();   ?>
