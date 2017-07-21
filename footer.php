<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package puiying-childcare
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'puiying-childcare' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'puiying-childcare' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'puiying-childcare' ), 'puiying-childcare', '<a href="https://automattic.com/">kelvin</a>' );
			?>
		</div> .site-info -->

		<div class = "footer-wrapper">
			<div class = "footer-wrapper-contact">
				<p>Contact: 604-821-1262</p>
			</div>
			<div class = "footer-wrapper-website">
				<p>Website: flyingeagle.ca</p>
			</div>
			<div class = "footer-wrapper-address">
				<p> Address: 3780 Sexsmith Road, Richmond, BC, Canada V6X 2H8</p>
			</div>
		</div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
