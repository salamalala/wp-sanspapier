<?php 

/* Template Name: Bulletin */ 

get_header();

?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>

<?php

  if( have_rows('bulletin') ):
    while ( have_rows('bulletin') ) : the_row();  ?>

    <div class="box bulletin-box">

      <div class="bulletin-info">
        <h4><?php the_sub_field('datum'); ?></h4>
        <h2>Nummer: <?php the_sub_field('nummer'); ?></h2>
        <h1><?php the_sub_field('thema'); ?></h1>
      </div>

      <div class="bulletin-download mainlink">

        <?php if( get_sub_field('file') ): ?>
          <a href="<?php the_sub_field('file'); ?>" >Download Bulletin</a>
        <?php endif; ?>

      </div>


 <!--      <?php $pdffile = get_field('file'); 
   
          $url = wp_get_attachment_url( $pdffile );
          
          ?><a href="<?php echo $url; ?>" >Download File</a> -->
   
    </div>

    <?php endwhile; ?>
  <?php endif; ?> 


  <?php   get_footer();   ?>