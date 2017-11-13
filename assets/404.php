<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package wp-sanspapier
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				
				<div class="page-content">
					
					<h1>Oh what a shame: du bist im 404 Universum gelandet, geh zurück auf <a href="<?php echo get_home_url(); ?>" > die Homepage. </a> </h1>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
