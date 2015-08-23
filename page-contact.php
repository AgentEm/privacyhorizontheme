<?php get_header(); ?>

	<div id="primary" class="content-area about-page">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

        <section class="contact-form" id="form">
					<div class="page-content-container">
            <?php
              if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); }
            ?>
					</div>
        </section>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
