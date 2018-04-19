<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer-container container footer hide-for-print" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
					<p class="show-for-medium">Copyright&copy; <?php echo date("Y"); ?> Northside Hospital Inc. All Rights Reserved.</p><p class="show-for-small-only">Copyright&copy; <?php echo date("Y"); ?> Northside Hospital Inc.<br />A Northside Hospital Physician Practice.<br />All Rights Reserved.<br /><a href="http://www.northside.com/NSH-Privacy-Policy" target="_blank"><u>Privacy Policy</u></a></p><br />
		      <div class="hide-for-small-only"><a href="http://browsehappy.com/" target="_blank" title="Update your Browser"><p><strong>Having trouble viewing this site?</strong><br />This site is compatible with Chrome, Firefox, Safari, Internet Explorer 9,10,11, &amp; Microsoft Edge</a><br /><a href="http://www.northside.com/NSH-Privacy-Policy" target="_blank"><u>Privacy Policy</u></a></p></div>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas content -->
</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
