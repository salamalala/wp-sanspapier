<?php 

/* Template Name: Bulletin */ 

get_header();

?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>


<div class="flex-content">
  
  <?php

    if( have_rows('bulletin') ):
      while ( have_rows('bulletin') ) : the_row();  ?>

      <div class="box half-width-box">

        <div class="bulletin-info">
          <h3>Nr. <?php the_sub_field('nummer'); ?></h3>
          <h4><?php the_sub_field('datum'); ?></h4>
          <h2 class="italic">Bulletin Thema: </h2>
          <h1><?php the_sub_field('thema'); ?></h1>
        </div>

        <div class="bulletin-download mainlink">

          <?php if( get_sub_field('file') ): ?>
            <a href="<?php the_sub_field('file'); ?>" >Download Bulletin</a>
          <?php endif; ?>

        </div>
     
      </div>

      <?php endwhile; ?>
    <?php endif; ?> 

</div> 

<?php   get_footer();   ?>