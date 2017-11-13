<?php
/**
 * Template part for displaying single posts.
 *
 * @package wp-sanspapier
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'template-parts/partial', 'flex-content' ); ?>

</article><!-- #post-## -->
