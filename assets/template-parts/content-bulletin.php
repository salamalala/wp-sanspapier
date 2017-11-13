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
          <h3 class="boldcircle">Nr. <?php the_sub_field('nummer'); ?></h3>
          <h4><?php the_sub_field('datum'); ?></h4>
          <h2 class="italic">Bulletin Thema: </h2>
          <h1><?php the_sub_field('thema'); ?></h1>
        </div>



          <?php if( get_sub_field('file') ): ?>
            <a class="bulletin-link mainlink" href="<?php the_sub_field('file'); ?>" >
              <p class="bulletin-link__text">Download Bulletin</p>
              
              <svg class="bulletin-link__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0" y="0" width="403.2px" height="403.2px" viewBox="278.4 78.4 403.2 403.2"  xml:space="preserve">
                
                <polygon class="pot" fill="#ffffff" points="631.2 330.4 631.2 431.2 328.8 431.2 328.8 330.4 278.4 330.4 278.4 481.6 681.6 481.6 681.6 330.4 "/>
              
                <g class="arrow">
                  <polygon fill="#ffffff" points="580.8 229.6 530.4 229.6 530.4 78.4 429.6 78.4 429.6 229.6 379.2 229.6 480 380.8 "/>
                </g>

              </svg>
            
            </a>
          <?php endif; ?>

     
      </div>

      <?php endwhile; ?>
    <?php endif; ?> 

</div> 

<?php   get_footer();   ?>