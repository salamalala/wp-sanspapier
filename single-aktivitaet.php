<?php
/**
 * The template for displaying all single posts.
 *
 * @package wp-sanspapier
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="flex-content">

        <div class="full-width-box box pink-box">
          <h5><?php display_category_terms(); ?></h5>
          <h1><?php the_title(); ?></h1>
          <h4 class="italic"><?php the_field('datum'); ?></h4>
          <p><?php the_field('kurzbeschreibung'); ?></p>
          <p></p>
        </div>

      </div>

		<?php while ( have_posts() ) : the_post(); ?>
      
			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

 
<?php get_footer(); ?>
