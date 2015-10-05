<?php 

/* Template Name: Videogallery */ 

get_header();

?>


<?php get_template_part( 'template-parts/content', 'page' ); ?>

<?php

  if( have_rows('video_gallery') ):
    while ( have_rows('video_gallery') ) : the_row();  ?>

    <div class="gallery-card">

        <div class="video-wrapper">
          <div class="video"><?php the_sub_field('video'); ?></div>
        </div>
        <div class="gallery-text">
          <h2><?php the_sub_field('titel'); ?></h2>
          <h4 class="italic">Von: <?php the_sub_field('macherin'); ?></h4>
          <p><?php the_sub_field('beschreibung'); ?></p>
        </div>
    </div>

    <?php endwhile; ?>
  <?php endif; ?> 




<?php   get_footer();   ?>