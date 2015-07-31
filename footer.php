<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Story
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo" id="footer">
		<div class="site-info">
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'story' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<a href="http://github.com/pennlabs/blog">Theme</a> by <a href="http://pennlabs.org/">Penn Labs</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
