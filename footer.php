<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cynosure_elearning
 */

?>

	<footer id="colophon" class="site-footer row" role="contentinfo">
		
		<div class="el-footer-pusher col-lg-3"></div>
		<div class="site-info col-lg-9  elearning-black">
			<div class="row">
				<div class="col-lg-9">
					Customer Support | Terms of Use | Copyright 2015 Cynosure Inc. All Rights Reserved
				</div>

				<?php $options = get_option( 'elearning_options' ); ?>
				<div class="col-lg-3 text-right">
					
					<?php if ( $options['el_pinterest'] ): ?>
						<a href="<?= $options['el_pinterest'] ?>"><i class="fa fa-pinterest"></i></a>
					<?php endif; ?>

					<?php if ( $options['el_youtube'] ): ?>
						<a href="<?= $options['el_youtube'] ?>"><i class="fa fa-youtube"></i></a>
					<?php endif; ?>
					
					<?php if ( $options['el_linkedin'] ): ?>
						<a href="<?= $options['el_linkedin'] ?>"><i class="fa fa-linkedin"></i></a>
					<?php endif; ?>
					
					<?php if ( $options['el_twitter'] ): ?>
						<a href="<?= $options['el_twitter'] ?>"><i class="fa fa-twitter"></i></a>
					<?php endif; ?>

					<?php if ( $options['el_facebook'] ): ?>
						<a href="<?= $options['el_twitter'] ?>"><i class="fa fa-facebook"></i></a>
					<?php endif; ?>

				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
