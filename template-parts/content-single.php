<?php
/**
 * Template part for displaying single posts.
 *
 * @package wp-sanspapier
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="modular-content">
		
		<?php
	    if( have_rows('flexible_content') ):
 					while ( have_rows('flexible_content') ) : the_row();
	           
	          if ( get_row_layout() == 'full_width_text' ):  ?>
	          	             
	             	<section class="full-width-box box">
	                <h1><?php the_sub_field('titel'); ?></h1>
	           			<p><?php the_sub_field('text'); ?></p> 
	              </section>

	          <?php elseif (get_row_layout() == 'half_width_text' ):  ?>

	            	<section class="half-width-box box">
	               <h2><?php the_sub_field('titel'); ?></h1>
	          			<p><?php the_sub_field('text'); ?></p>
	             </section>
						          
	          <?php endif; ?>
	          
	         <?php endwhile; ?>
	      <?php endif; ?> 
	
	</div><!-- .entry-content -->
</article><!-- #post-## -->

