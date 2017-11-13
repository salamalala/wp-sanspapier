<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package wp-sanspapier
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

v<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
