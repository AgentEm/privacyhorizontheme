<?php get_header(); ?>

	<div id="primary" class="content-area about-page">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php// get_template_part( 'template-parts/content', 'page' ); ?>
        <section class="top-section site-intro">
					<div class="page-content-container">
						<h2>About Privacy Horizon</h2>
						<h3>Privacy Horizon (“PHI”) is a global resource for start-ups, small, and medium sized organizations. While focusing on local regulatory requirements, it taps into privacy and cybersecurity best practices from around the world.</h3>
						<p>Privacy Horizon’s “Virtual Privacy Officer” provides:</p>
						<ul class="about-list">
							<li><strong>Training</strong> for you and your organization on a variety of privacy and cybersecurity topics.</li>
							<li><strong>Tools</strong> to help you assess privacy risk and manage your privacy program.</li>
							<li><strong>Resources</strong> to help you research and handle your unique privacy challenges.</li>
							<li><strong>Coaching and professional services</strong> for those situations where you need some objective outside help.</li>
						</ul>
						<p>
							The Virtual Privacy Officer is supported by IAPP and ISC2 certified privacy and security specialists.<br>
							You can preview some of our prototype work by clicking on the library, toolkit and training icons on the menu bar.  To learn more about the Virtual Privacy Officer, please contact us for more information.
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

        <section class="team-bios" id="bio">
					<div class="page-content-container">
						<h3 class="bio-header">Leadership Team</h3>

						<div class="team-member mark">
							<img src="<?php echo get_bloginfo('template_url') ?>/images/about/mark.jpg">
							<h4 class="team-name">Mark Kohler</h4>
							<p class="team-title">
								Chairman, Privacy Horizon Inc.
							</p>
							<p>
								Mark Kohler is Chairman of Privacy Horizon Inc., where he provides strategic guidance and operational and governance advice to the leadership team.  He is also Chairman & CEO of EXELERATE Capital (Toronto), a private advisory group that provides strategy, corporate development, M&A, and governance/risk/compliance (GRC) services to healthcare technology organizations and private equity funds in Canada, New York and California. He also leads the group’s growth capital investing activities focused on healthcare IT at EXELERATE Health.
							</p>
							<p>
									Mark has over 29 years of senior executive, and operational experience leading public and private organizations in North America in the roles of CEO, CFO, CRO, and CIO. He has also served as a Chairman, and Corporate Director, and Advisory Board member for some of Canada’s leading healthcare technology and financial services companies. He is also an Adjunct Professor at York University (Toronto), where he has lectured at the Faculty of Liberal Arts and Professional Studies since 2007.
							</p>
							<p>
									Mark is a Chartered Professional Accountant and Chartered Accountant, and is a Certified Corporate Director, having obtained his ICD.D designation from the Rotman School of Management at the University of Toronto.
							</p>
						</div>

						<div class="team-member patrick">
							<img src="<?php echo get_bloginfo('template_url') ?>/images/about/patrick.png">
							<h4 class="team-name">Patrick Lo</h4>
							<p class="team-title">
								CEO, Privacy Horizon Inc.
							</p>
							<p>
								Patrick Lo is the CEO of Privacy Horizon Inc.  He has more than 20 years of experience in the field of information privacy. He has held a number of executive positions in the public and private sectors focused on the development and implementation of privacy and data protection programs.
							</p>
							<p>
								Prior to joining Privacy Horizon, Patrick was Senior Program Director for the Identity, Access and Privacy Portfolio at eHealth Ontario, where he was responsible for strategy and planning, product management and adoption of provincial identity management technologies designed to control access to personal health information. Prior to that, he led the privacy office at eHealth Ontario, and built the Province’s first “eHealth Privacy Centre of Excellence” – establishing eHealth Ontario as a leader in the development and implementation of privacy best practices.
							</p>
							<p>
								Patrick is a Certified Information Systems Security Professional (CISSP) and Certified Information Privacy Professional/Canada (CIPP/C).
							</p>
						</div>


						<div class="team-member brendan">
							<img src="<?php echo get_bloginfo('template_url') ?>/images/about/brendan.jpg">
							<h4 class="team-name">Brendan Seaton</h4>
							<p class="team-title">
								Founder and Chief Creative Officer, Privacy Horizon Inc.
							</p>
							<p>
								Brendan Seaton is the Founder and Chief Creative Officer for Privacy Horizon Inc. where he is responsible for product vision and development, and customer support.  He is one of Canada’s leading experts in the management of eHealth privacy, security, and safety. Brendan has more than 30 years’ experience in health service administration, information system project management and information privacy and security in both the public and private sectors.
							</p>
							<p>
								Since 2000, Brendan has trained more than 1000 privacy officers and specialists from across Canada. In 2013 he was designated as a Privacy by Design Ambassador by former Information and Privacy Commissioner for Ontario, Dr. Ann Cavoukian.
							</p>
							<p>
								Brendan is a Certified Information Systems Security Professional (CISSP), a Certified Information Privacy Professional/Canada (CIPP/C), and is Certified in Risk and Information Systems Control (CRISC).
							</p>
						</div>
					</div>
        </section>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
