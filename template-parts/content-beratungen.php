<?php /* Template Name: Beratung */ 


get_header();

?>

<div class="modular-content">

<?php
  if( have_rows('beratung') ):
    
    $row = 1;
    
    while ( have_rows('beratung') ) : the_row();  ?>

      <?php if($row == 1): ?>

        <div class="two-third-box box">        
          <h3>Beratungen <?php the_sub_field('beratungsort'); ?></h3>
          <p><?php the_sub_field('beratungszeiten'); ?></p>
        </div>

        <div id="map-bern" class="one-third-box right-element-in-row">
        </div>

      <?php elseif($row == 2): ?>

          <div class="two-third-box box">
            <h3>Beratungen <?php the_sub_field('beratungsort'); ?></h3>
            <p><?php the_sub_field('beratungszeiten'); ?></p>
          </div>

          <div id="map-biel" class="one-third-box right-element-in-row">
          </div>
      
      <?php endif; ?>
        
    <?php ++ $row;  ?>

    <?php endwhile; ?>
  <?php endif; ?> 

</div>


<?php get_template_part( 'template-parts/content', 'page' ); ?>

<?php   get_footer();   ?>