<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>

<div class="col-md-4 widget-area" id="secondary" role="complementary">
	<?php dynamic_sidebar( 'right-sidebar' ); ?>
</div><!-- #secondary -->
