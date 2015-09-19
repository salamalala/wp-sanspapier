<?php /* Template Name: Beratung */ 


get_header();

?>


<?php
  if( have_rows('beratung') ):
    while ( have_rows('beratung') ) : the_row();  ?>

    <div class="two-third-box box">
    
      <h3>Beratungen <?php the_sub_field('beratungsort'); ?></h3>
      <p><?php the_sub_field('beratungszeiten'); ?></p>
    
    </div>

    <div class="one-third-box box">
      Hello
    </div>

    <?php endwhile; ?>
  <?php endif; ?> 


<?php get_template_part( 'template-parts/content', 'page' ); ?>

<?php   get_footer();   ?>