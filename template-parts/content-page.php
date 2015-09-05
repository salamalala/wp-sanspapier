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
			          	             
			             	<div class="full-width-box box border-left">
			                <h1><?php the_sub_field('titel'); ?></h1>
			           			<p><?php the_sub_field('text'); ?></p>
											
											<?php if( !empty(get_sub_field('link:_mehr')) && empty(get_sub_field('link:_weiterlesen')) ): ?>
												<a href="<?php the_sub_field('link:_mehr'); ?>" class="minorlink" target="_blank">Mehr Informationen</a>
											<?php endif; ?>

											<?php if( !empty(get_sub_field('link:_weiterlesen')) && empty(get_sub_field('link:_mehr')) ): ?>
												<a href="<?php the_sub_field('link:_weiterlesen'); ?>" class="minorlink">Weiterlesen</a>
											<?php endif; ?>

			              </div>

			          <?php elseif (get_row_layout() == 'text_volle_breite_dunkler_hintergrund' ):  ?>
			          	             
			             	<div class="full-width-box box dark-box">
			                <h1><?php the_sub_field('titel'); ?></h1>
			           			<p><?php the_sub_field('text'); ?></p> 
											
											<?php if( !empty(get_sub_field('link:_mehr_informationen')) && empty(get_sub_field('link:_weiterlesen')) ): ?>
												<a href="<?php the_sub_field('link:_mehr_informationen'); ?>" class="minorlink dark-link" target="_blank">Mehr Informationen</a>
											<?php endif; ?>

											<?php if( !empty(get_sub_field('link:_weiterlesen')) && empty(get_sub_field('link:_mehr')) ): ?>
												<a href="<?php the_sub_field('link:_weiterlesen'); ?>" class="minorlink dark-link">Weiterlesen</a>
											<?php endif; ?>

			              </div>

			         <?php elseif (get_row_layout() == 'text_halbe_breite' ):  ?>
									
				          <div class="half-width-box box">
				          	
				          	<?php $icon = get_sub_field('icon');

				          		if( !empty($icon) ):
				          		// variables
											$url = $icon['url'];
											$alt = $icon['alt']; ?>
											<div class="icon-wrapper">
			            			<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="icon-in-half-width-box"/>
			            		</div>
			            		
			            		<?php endif; ?>

			              <h2><?php the_sub_field('titel'); ?></h1>
			          		<p><?php the_sub_field('text'); ?></p>
			          		
			          		<?php if( !empty(get_sub_field('link_weiterlesen')) ): ?>
			          			<a href="<?php the_sub_field('link_weiterlesen'); ?>" class="minorlink">Weiterlesen</a>
			          		<?php endif; ?>

			            </div>
							
							 <?php elseif (get_row_layout() == 'text_3/4_breite' ):  ?>
		          	             
		             	<div class="box three-quarter-box">
		                <h1><?php the_sub_field('titel'); ?></h1>
		           			<p><?php the_sub_field('text'); ?></p>
		           			<?php if( !empty(the_sub_field('link')) ): ?>
		           			<a href="<?php the_sub_field('link'); ?>" class="minorlink"></a>
		           			<?php endif; ?> 
		              </div>
			          
			          <?php elseif (get_row_layout() == 'text_2/3_breite' ):  ?>
			          	             
			             	<div class="box two-third-box">
			                <h1><?php the_sub_field('titel'); ?></h1>
			           			<p><?php the_sub_field('text'); ?></p>
			           			<?php if( !empty(the_sub_field('link')) ): ?>
			           				<a href="<?php the_sub_field('link'); ?>" class="minorlink"></a>
			           			<?php endif; ?>  
			              </div>
								

								<?php elseif (get_row_layout() == 'text_1/3_breite' ):  ?>
									             
								   	<div class="box one-third-box">
								      <h2><?php the_sub_field('titel'); ?></h1>
								 			<p><?php the_sub_field('text'); ?></p>
								 			<?php if( !empty(the_sub_field('link')) ): ?>
								 			<a href="<?php the_sub_field('link'); ?>" class="minorlink"></a>
								 			<?php endif; ?>  
								    </div>


			          <?php elseif (get_row_layout() == 'bild_2/3_breite_links_text_1/3_breite_rechts' ):  ?>

			          		<?php $bild_links = get_sub_field('bild_links');

  		          		if( !empty($bild_links) ):
  		          		// variables
  									$url = $bild_links['url'];
  									$alt = $bild_links['alt']; ?>

										<div class="two-third-box image-box-wrapper">
		            			<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
										</div>
									<?php endif; ?>
			          	             
			             	<div class="box one-third-box box-omega">
                     <h2><?php the_sub_field('box_rechts_titel'); ?></h1>
                			<p><?php the_sub_field('box_rechts_text'); ?></p>
                			<?php if( !empty(the_sub_field('box_rechts_link')) ): ?>
                			<a href="<?php the_sub_field('box_rechts_link'); ?>" class="minorlink"></a>
                			<?php endif; ?>  
			              </div>

	              <?php elseif (get_row_layout() == 'bild_volle_breite' ):  ?>
              		<?php $bild_voll = get_sub_field('bild_volle_breite');

    	          		if( !empty($bild_voll) ):
    	          		// variables
    								$url = $bild_voll['url'];
    								$alt = $bild_voll['alt']; ?>
    									
    									<div class="full-width-box image-box-wrapper">
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

			          <?php elseif (get_row_layout() == 'bild_23_breite' ):  ?>
			          		<?php $bild_2_3 = get_sub_field('bild_23_breite');

				          		if( !empty($bild_2_3) ):
				          		// variables
											$url = $bild_2_3['url'];
											$alt = $bild_2_3['alt']; ?>
												
												<div class="two-third-box">
				            			<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
												</div>
											<?php endif; ?>

			          <?php elseif (get_row_layout() == 'bild_13_breite' ):  ?>
			          		<?php $bild_1_3 = get_sub_field('bild_13_breite');

				          		if( !empty($bild_1_3) ):
				          		// variables
											$url = $bild_1_3['url'];
											$alt = $bild_1_3['alt']; ?>
												
												<div class="half-width-box">
				            			<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
												</div>
											<?php endif; ?>

                <?php endif; ?>
			          
			         <?php endwhile; ?>
			      <?php endif; ?> 
	</div><!-- .entry-content -->

</article><!-- #post-## -->

