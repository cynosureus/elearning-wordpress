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
				<a href="<?= home_url() ?>"><img src="<?=get_header_image() ?>" class="center-block logo-desktop"></a>

				<div class="elearning-widget-area">

					<?php 

						global $pagenow;

					?>

					<?php if ( !get_the_ID() ): ?>

						<?php dynamic_sidebar( 'elearning-blank-sidebar'); ?>

					<?php else: ?>

						<?php $sidebar = get_post_meta( get_the_ID(), 'elearning_page_sidebar', true ); ?>

						<?php 

						if ( $sidebar ) {
							
							dynamic_sidebar( $sidebar ); 

						} else {

							dynamic_sidebar( 'elearning-default-sidebar');
						}

						?>

					<?php endif; ?>


				</div>
			</div><!-- #secondary -->


		</div>
</div><!--end of container-main -->

