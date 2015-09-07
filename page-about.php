<?php get_header(); ?>

	<div id="primary" class="content-area about-page">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php// get_template_part( 'template-parts/content', 'page' ); ?>
        <section class="top-section site-intro">
					<div class="page-content-container">
						<h2>Hello and welcome!</h2>
						<h3>Thank you for visiting Privacy Horizon. I hope you find what you are looking for. This is a resource designed for young professionals, IT startups, and privacy officers to learn how to build privacy into their products and services.</h3>
						<p>Privacy Horizon aims to...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p class="navigate-down">
							How did Privacy Horizon start?
						</p>
						<a href="#bio"><div class="about-down-arrow">
								<img src="<?php echo get_bloginfo('template_url') ?>/images/about/downarrow.svg" class="animated bounce"/>
						</div>
						</a>
					</div>
        </section>

        <section class="brendan-bio" id="bio">
					<div class="page-content-container">
						<h3 class="bio-header">I'm Brendan Seaton, the creator of Privacy Horizon. I'm the President of ITAC Health, an instructor for eHealthRisk at NIHI, as well as a privacy, security, safety, and risk management consultant.</h3>
						<p>I created this site to lorem ipsum chages the way provacy is viewed. Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
						<div class="about-twitter-bird-container">
								<a href="http://twitter.com/brendanseaton" target="_blank"><img src="<?php echo get_bloginfo('template_url') ?>/images/about/twitterbird.svg"/></a>
						</div>
						<div class="contain-tweets">
							<?php
								echo do_shortcode("[rotatingtweets screen_name='brendanseaton' exclude_replies='1' timeout='7000' rotation_type='fade' show_tco_link='1' show_meta_timestamp='0' show_meta_screen_name='0' show_meta_via='0' show_meta_reply_retweet_favorite='1']");
							?>
						</div>
					</div>
        </section>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
