<?php get_header(); ?>

	<div id="primary" class="content-area about-page">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php// get_template_part( 'template-parts/content', 'page' ); ?>
        <section class="top-section site-intro">
					<div class="page-content-container">
						<h2>Hello and welcome!</h2>
						<h3>Privacy Horizon is a global resource for start-ups, small, and medium sized organizations.  While focusing on local requirements, it taps into privacy and cybersecurity best practices from around the world.</h3>
						<p>Privacy Horizon’s “Virtual Privacy Officer” provides:</p>
						<ul class="about-list">
							<li><strong>Training</strong> for you and your organization on a variety of privacy and cybersecurity topics.</li>
							<li><strong>Tools</strong> to help you assess privacy risk and manage your privacy program.</li>
							<li><strong>Resources</strong> to help you research and handle your unique privacy challenges.</li>
							<li><strong>Coaching and professional services</strong> for those situations where you need some objective outside help.</li>
						</ul>
						<p>
							The Virtual Privacy Officer is supported by real live IAPP (International Association of Privacy Professionals) certified privacy specialists.
						</p>
						<p class="navigate-down">
							Who’s behind this operation?
						</p>
						<a href="#bio"><div class="about-down-arrow">
								<img src="<?php echo get_bloginfo('template_url') ?>/images/about/downarrow.svg" class="animated bounce"/>
						</div>
						</a>
					</div>
        </section>

        <section class="brendan-bio" id="bio">
					<div class="page-content-container">
						<h3 class="bio-header">I’m Brendan Seaton, founder of Privacy Horizon. I believe that privacy is a good thing...something that we want for ourselves, our families and our friends.</h3>
						<p>
							I live in Toronto and have worked across Canada from coast to coast to coast helping health care organizations to manage privacy. Through my business partner, that National Institutes for Health Informatics, I have trained more than 1000 privacy officers. In 2013, I was designated as a Privacy by Design Ambassador by Dr. Ann Cavoukian, former Information and Privacy Commissioner for Ontario.
						</p>
						<p>
							I work with a brilliant team of privacy, security, and IT risk specialists. We look forward to working with you as you make privacy real for your customers and clients.
						</p>
					</div>
        </section>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
