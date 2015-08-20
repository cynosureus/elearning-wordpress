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
		<div class="site-info col-lg-9 pull-right elearning-black">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cynosure_elearning' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'cynosure_elearning' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'cynosure_elearning' ), 'cynosure_elearning', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
