<?php /* Template Name: Unterstützung */ 


get_header();

?>

<div class="unterstuetzung">

  <?php get_template_part( 'template-parts/content', 'page' ); ?>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?> 
  <?php endwhile; // End of the loop. ?>

</div>



<?php   get_footer();   ?>