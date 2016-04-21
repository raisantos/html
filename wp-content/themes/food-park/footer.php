<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package foodpark
 */
?>
		</div> <!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<?php 
		if( is_active_sidebar( 'footer' ) ) : ?>
		<div class="footer-widgets">
			<div class="container">
				<?php get_template_part('footer','widgets'); ?>
			</div>
		</div>
	<?php endif; ?>
		<div class="site-info">
			<div class="container">
				<div class=" copy-write eight columns">
					<?php do_action('foodpark_credits'); ?>
				</div>
				<div class="social eight columns">
					<?php dynamic_sidebar( 'footer-nav' ); ?>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
  
<?php wp_footer(); ?>

</body>
</html>
