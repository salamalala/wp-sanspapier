<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package wp-sanspapier
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
  <div class="modular-content">
    <?php
      if( have_rows('flexible_content') ):
        while ( have_rows('flexible_content') ) : the_row();
             
          if ( get_row_layout() == 'text_volle_breite' ):  ?>
                         
            <?php get_template_part( 'template-parts/partial', 'full-width-white' ); ?>

          <?php elseif (get_row_layout() == 'text_volle_breite_dunkler_hintergrund' ):  ?>
            
            <?php get_template_part( 'template-parts/partial', 'full-width-dark' ); ?>                         
          <?php elseif (get_row_layout() == 'text_volle_breite_pinker_hintergrund' ):  ?>
                         
            <?php get_template_part( 'template-parts/partial', 'full-width-pink' ); ?>

          <?php elseif (get_row_layout() == 'bild_volle_breite' ):  ?>
            
            <?php get_template_part( 'template-parts/partial', 'full-width-image' ); ?>      

          <?php elseif (get_row_layout() == 'text_halbe_breite' ):  ?>
            
            <?php get_template_part( 'template-parts/partial', 'half-width-white' ); ?>      

          <?php elseif (get_row_layout() == 'text_12_breite_dunkler_hintergrund' ):  ?>

            <?php get_template_part( 'template-parts/partial', 'half-width-dark' ); ?> 
          
          <?php elseif (get_row_layout() == 'text_12_breite_pinker_hintergrund' ):  ?>

            <?php get_template_part( 'template-parts/partial', 'half-width-pink' ); ?> 
                                   
          <?php elseif (get_row_layout() == 'text_3/4_breite' ):  ?>
                       
            <?php get_template_part( 'template-parts/partial', '3_4-width-white' ); ?> 
            
          <?php elseif (get_row_layout() == 'text_2/3_breite_links_bild_1/3_breite_rechts' ):  ?>                               
            <?php get_template_part( 'template-parts/partial', '2_3-text-1_3-image' ); ?> 

          <?php elseif (get_row_layout() == 'text_1/3_breite_links_bild_2/3_breite_rechts' ):  ?>                              
            <?php get_template_part( 'template-parts/partial', '1_3-text-2_3-image' ); ?>             

          <?php elseif (get_row_layout() == 'bild_2/3_breite_links_box_1/3_breite_rechts' ):  ?>
            
            <?php get_template_part( 'template-parts/partial', '2_3-image-1_3-text' ); ?>             
            
          <?php elseif (get_row_layout() == 'bild_1/3_breite_links_box_2/3_breite_rechts' ):  ?>
            
            <?php get_template_part( 'template-parts/partial', '1_3-image-2_3-text' ); ?>             
              
          <?php elseif (get_row_layout() == 'bild_halbe_breite' ):  ?>
            
            <?php get_template_part( 'template-parts/partial', 'half-width-image' ); ?>             

          <?php endif; ?>
            
        <?php endwhile; ?>
      <?php endif; ?> 

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

  </div><!-- .entry-content -->

</article><!-- #post-## -->

