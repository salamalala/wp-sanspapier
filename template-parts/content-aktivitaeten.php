<?php 

/* Template Name: Aktivitäten */ 

get_header();

?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>

<?php 
  $loop = new WP_Query( array( 'post_type' => 'aktivitaet' ) );


  if( $loop->have_posts() ):
    while( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="half-width-box box">
        <h5>Fundraising</h5>
        <h2><?php the_field('titel'); ?></h2>
        <h4 class="italic">12.05.2014 | Karin Jenni</h4>
        <p><?php the_field('kurzbeschreibung'); ?></p>
        <a class="minorlink" href="#">Weiterlesen</a>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
  
  <?php wp_reset_query(); ?>

  <?php   get_footer();   ?>