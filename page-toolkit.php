<?php get_header(); ?>

	<div id="primary" class="content-area toolkit-page">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="page-content-container">
					<h2>Toolkit!</h2>
					<p>Dblah</p>
				</div>
			<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
