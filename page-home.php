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

					<h3 class="video-title"><a href="https://vimeo.com/154735390">Turning Privacy Into a Competitive Advantage: Four Hot Tips for Startups</a>.</h3>
					<iframe src="https://player.vimeo.com/video/154735390?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					<?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(45);} ?>
				</div>


			<?php endwhile; // End of the loop. ?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
