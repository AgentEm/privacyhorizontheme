<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php// get_template_part( 'template-parts/content', 'page' ); ?>
        <h2>Hello and welcome!</h2>
        <h3>Thank you for visiting Privacy Horizon. I hope you find what you are looking for. This is a resource designed for young professionals, IT startups, and privacy offivers to learn how to build privacy into their products and services.</h3>
        <p>Privacy Horizon aims to...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p class="navigate-down">
          Where did Privacy Horizon start?
        </p>
        <!-- TODO: arrow goes here -->
        <h3 class="bio">I'm Brendan Seaton, the creator of Privacy Horizon. I'm the President of ITAC Health, an insturctor for eHealthRisk at NIHI, as well as a privacy, security, safety, and risk management consultant.</h3>
        <p>I crated this site to lorem ipsum chages the way provacy is viewed. Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
				<?php
					echo do_shortcode("[rotatingtweets screen_name='brendanseaton']");
				?>
				<!-- <a class="twitter-timeline" href="https://twitter.com/brendanseaton" data-widget-id="633080128382345216" data-chrome="noheader nofooter noborders noscrollbar transparent" data-tweet-limit="1">Tweets by @brendanseaton</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script> -->
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
