<?php get_header(); ?>

	<div id="primary" class="content-area toolkit-page">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<section class="page-content-container">
					<h2>Privacy Toolkit</h2>
					<h3>Coming soon!<h3>
				</section>
			<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
