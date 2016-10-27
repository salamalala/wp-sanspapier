<?php /* Template Name: Kontakt */


get_header();

?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>

<div class="fullwidth-box box pink-box contact">
  <div class="contact-information">
    <h1>Kontakt: </h1>
    <p> Verein Berner Beratungsstelle für Sans-Papiers </p>
    <p> Eigerplatz 5 </p>
    <p> 3007 Bern </p>
    <p> Tel: 031 385 18 27</p>
    <p> Email: beratung@sans-papiers-contact.ch <p>
  </div>

  <div class="contact-form">
    <?php echo do_shortcode( '[contact-form-7 id="4" title="Kontaktformular"]' ); ?>
  </div>

</div>




<?php   get_footer();   ?>
