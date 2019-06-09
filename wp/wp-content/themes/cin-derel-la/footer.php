<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cin.derel.la
 */

?>

	</div><!-- #content -->

	<footer class="main-footer">
		<div class="wrapper">
            <h2>Powered by : </h2>
            <img src="<?php echo(get_template_directory_uri());?>/images/PoweredBy.png" alt="PoweredByLogos">
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
