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

  <?php while ( have_posts() ) : the_post(); ?>
    <div class="contact-form">
      <?php the_content(); ?> 
    </div>
  <?php endwhile; // End of the loop. ?>

</div>




<?php   get_footer();   ?>