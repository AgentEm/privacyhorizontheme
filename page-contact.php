<?php get_header(); ?>

	<div id="primary" class="content-area about-page">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

        <section class="contact-form" id="form">
					<div class="page-content-container">
            <form class="" action="index.html" method="post">

            </form>
					</div>
        </section>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
