<?php
/**
 * The template for displaying all single posts.
 *
 * @package wp-sanspapier
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="full-width-box box pink-box">
        <h1><?php the_title(); ?></h1>
        <p><?php the_field('kurzbeschreibung'); ?></p>
        <p></p>
      </div>

    

		<?php while ( have_posts() ) : the_post(); ?>
      
			<?php get_template_part( 'template-parts/content', 'single' ); ?>


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
