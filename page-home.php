<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="page-content-container">
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
					<?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(45);} ?>
				</div>

			<?php endwhile; // End of the loop. ?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
