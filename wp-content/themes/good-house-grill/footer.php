<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Good_House_Grill
 */

?>

		</div>
			 <!---End-content---->
			 <!---start-footer---->
			 <div class="footer">
			<div class="wrap">
				<?php dynamic_sidebar('footer-widgets'); ?>
				<div class="clear"> </div>
			</div> <!-- .wrap -->
			<div class="clear"> </div>
		</div> <!-- .footer -->
		<div class="copy-right">
			<div class="top-to-page">
							<a href="#top" class="scroll"> </a>
							<div class="clear"> </div>
						</div>
			<p>Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
		</div> <!-- .copy-right -->
			 <!---End-footer---->
		<?php wp_footer(); ?>
	</body>
</html>
