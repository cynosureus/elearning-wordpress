<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cynosure_elearning
 */

if ( ! is_active_sidebar( 'elearning-main-sidebar' ) ) {
	return;
}
?>

	</div><!-- end of elearning body -->
		<div class = "col-lg-3 pull-left elearning-charcoal elearning-aside" id="elearning-panel">
			<div id="secondary" class="widget-area" role="complementary">
				<img src="<?=get_header_image() ?>" class="center-block logo-desktop">
				<div class="elearning-widget-area">
					<?php dynamic_sidebar( 'elearning-main-sidebar' ); ?>
				</div>
			</div><!-- #secondary -->


		</div>
</div><!--end of container-main -->

