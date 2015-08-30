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
			          	             
			             	<section class="full-width-box box border-left">
			                <h1><?php the_sub_field('titel'); ?></h1>
			           			<p><?php the_sub_field('text'); ?></p> 
			              </section>

			          <?php elseif (get_row_layout() == 'text_volle_breite_dunkler_hintergrund' ):  ?>
			          	             
			             	<section class="full-width-box box dark-box">
			                <h1><?php the_sub_field('titel'); ?></h1>
			           			<p><?php the_sub_field('text'); ?></p> 
			              </section>

			         <?php elseif (get_row_layout() == 'text_halbe_breite' ):  ?>
									
				          <section class="half-width-box box">
				          	
				          	<?php $icon = get_sub_field('icon');

				          		if( !empty($icon) ):
				          		// variables
											$url = $icon['url'];
											$alt = $icon['alt']; ?>

			            			<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="icon-in-half-width-box"/>
			            		
			            		<?php endif; ?>

			              <h2><?php the_sub_field('titel'); ?></h1>
			          		<p><?php the_sub_field('text'); ?></p>

			            </section>
							
							 <?php elseif (get_row_layout() == 'text_3/4_breite' ):  ?>
		          	             
		             	<section class="box three-quarter-box">
		                <h1><?php the_sub_field('titel'); ?></h1>
		           			<p><?php the_sub_field('text'); ?></p> 
		              </section>
			          
			          <?php elseif (get_row_layout() == 'text_2/3_breite' ):  ?>
			          	             
			             	<section class="box two-third-box">
			                <h1><?php the_sub_field('titel'); ?></h1>
			           			<p><?php the_sub_field('text'); ?></p> 
			              </section>
								

								<?php elseif (get_row_layout() == 'text_1/3_breite' ):  ?>
									             
								   	<section class="box one-third-box">
								      <h2><?php the_sub_field('titel'); ?></h1>
								 			<p><?php the_sub_field('text'); ?></p> 
								    </section>


			          

	              <?php elseif (get_row_layout() == 'bild_volle_breite' ):  ?>
              		<?php $bild_voll = get_sub_field('bild_volle_breite');

    	          		if( !empty($bild_voll) ):
    	          		// variables
    								$url = $bild_voll['url'];
    								$alt = $bild_voll['alt']; ?>
    									
    									<div class="full-width-box full-width-image">
    	            			<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
    									</div>
    								<?php endif; ?>

			          <?php elseif (get_row_layout() == 'bild_halbe_breite' ):  ?>
			          		<?php $bild_halb = get_sub_field('bild_halbe_breite');

				          		if( !empty($bild_halb) ):
				          		// variables
											$url = $bild_halb['url'];
											$alt = $bild_halb['alt']; ?>
												
												<div class="half-width-box">
				            			<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
												</div>
											<?php endif; ?>

                <?php endif; ?>
			          
			         <?php endwhile; ?>
			      <?php endif; ?> 
	</div><!-- .entry-content -->

</article><!-- #post-## -->

