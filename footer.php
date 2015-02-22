<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Slate
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'slate' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'slate' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'slate' ), 'Slate', '<a href="http://tareq.weDevs.com" rel="designer">Tareq Hasan</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript">
    jQuery(function($) {
        //Calls the tocify method on your HTML div.
        $("#secondary").tocify({
            context: $('article.hentry .entry-content' )
        });
    });
</script>

<?php wp_footer(); ?>

</body>
</html>
