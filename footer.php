<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Colorist
 */
?>
		</div> <!-- .container -->
	</div><!-- #content -->

	<?php do_action('colorist_before_footer'); ?>

	<footer id="colophon" class="site-footer footer-image" role="contentinfo">
	 <?php if ( get_theme_mod ('footer_overlay',false ) ) {
				   echo '<div class="overlay overlay-footer"></div>';
				}
		$footer_widgets = get_theme_mod( 'footer_widgets',true );
		if( $footer_widgets ) : ?>
		<div class="footer-widgets">
				<div class="container">
					<?php get_template_part('footer','widgets'); ?>
				</div>
			</div>
		<?php endif; ?>

		<div class="footer-bottom site-info copy">
			<div class="container">
				<div class="seven columns">
					<?php if( get_theme_mod('copyright') ) : ?>
						<p><?php echo do_shortcode(get_theme_mod('copyright')); ?></p>
					<?php else :
						do_action('colorist_credits');
					endif;  ?>
				</div>
				<div class="footer-right social nine columns">
					<?php dynamic_sidebar( 'footer-nav' ); ?>
				</div>
			</div>
		</div><!-- .site-info -->
     <div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->

	</footer><!-- #colophon -->

	<?php do_action('colorist_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-22110164-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

</body>
</html>
