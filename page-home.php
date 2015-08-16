<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package privacyhorisontheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
        <div class="home-badge">
        	<img src="<?php echo get_bloginfo('template_url') ?>/images/homepage/people.svg"/>
        </div>
				<div class="home-badge">
					<img src="<?php echo get_bloginfo('template_url') ?>/images/homepage/light.svg"/>
				</div>
				<div class="home-badge">
						<img src="<?php echo get_bloginfo('template_url') ?>/images/homepage/badge.svg"/>
				</div>

			<?php endwhile; // End of the loop. ?>

<?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(45);} ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
