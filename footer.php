<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package privacyhorisontheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<img src="<?php echo get_bloginfo('template_url') ?>/images/socialmediaicons/twittericon.svg"/>
			<img src="<?php echo get_bloginfo('template_url') ?>/images/socialmediaicons/linkedinicon.svg"/>
			<img src="<?php echo get_bloginfo('template_url') ?>/images/socialmediaicons/youtubeicon.svg"/>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
