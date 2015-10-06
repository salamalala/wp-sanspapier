<?php 

/* Template Name: Aktivitäten */ 

get_header();

?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>

<?php 
  
  $args = array(
    'orderby' => 'modified',
    'order'   => 'ASC',
  );
  $query = new WP_Query( $args );

  $loop = new WP_Query( array( 'post_type' => 'aktivitaet' ) );


  if( $loop->have_posts() ):
    while( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="half-width-box box">
        <h5><?php display_category_terms(); ?></h5>
        <h2><?php the_title(); ?></h2>
        <h4></h4>
        <p><?php the_field('kurzbeschreibung'); ?></p>
        <a class="minorlink-dark" href="<?php the_permalink()?>">Weiterlesen</a>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
  
  <?php wp_reset_query(); ?>

  <?php get_footer();   ?>