<?php get_header(); ?>

	<div id="primary" class="content-area about-page">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<section class="contact-blurb">
					<div class="page-content-container">
						<h2>Let's chat!</h2>
						<p>Do you have a burning question about privacy? Do you want to know more about Privacy Horizon? Do you have a suggestion to help us improve our website or services? Please get in touch below.</p>
					</div>
					<a href="#form"><div class="about-down-arrow">
							<img src="<?php echo get_bloginfo('template_url') ?>/images/about/downarrow.svg" class="animated bounce"/>
					</div>
					</a>
				</section>
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
