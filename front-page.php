<?php
	/*
		Template Name: Home Page
	*/

	get_header(); 
?>

	<!-- Hero -->
	<div class="hero-wrapper">
		
		<div class="video-overlay"></div>
		
		<div class="hero">

			<!-- Background video -->
			<div class="hero-video" data-vide-bg="<?php the_field('hero_video') ?>" data-vide-options="posterType: jpg,,position: 0% 50%"></div>

			<!-- Hero caption -->
			<div class="hero-content row">
				<div class="eight columns centered">
					<h1 class="hide-for-small"><img src="<?php echo THEME_DIR; ?>/images/layout/logo.svg" alt="Parkwood Creative" /></h1>
					<p><?php the_field('hero_caption') ?></p>
				</div>
			</div>
			<!-- end hero caption -->

		</div>
	</div>
	<!-- end hero -->

	<!-- container -->
	<div class="container">

		<!-- Intro -->
		<div class="intro section-wrapper">
			<div class="content row">
				<div class="twelve columns">
					<h1><?php echo get_the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<!-- end intro -->

		<!-- Reel -->
		<div id="reel" class="reel section-wrapper">
			
			<div class="video-container">
				<a href="#" class="play"></a>
				<video poster="<?php the_field('reel_image') ?>">
					<source src="<?php the_field('reel_url') ?>" type="video/mp4">
				</video>
			</div>
		</div>
		<!-- end reel -->

		<!-- Philosophy -->
		<div id="philosophy" class="philosophy section-wrapper">
			<div class="content row">

				<!-- Left column -->
				<div class="infographic five columns">
					<img src="<?php echo THEME_DIR; ?>/images/layout/philosophy.svg" alt="" />
				</div>
				<!-- end left column -->

				<!-- Right column -->
				<div class="gutter seven columns">
					<header>
						<h1><?php the_field('manifesto_header') ?></h1>
					</header>
					<?php the_field('manifesto_content') ?>
				</div>
				<!-- end right column -->

			</div>
		</div>
		<!-- end Philosophy -->

		<!-- Capabilities -->
		<div id="capabilities" class="capabilities section-wrapper">
			<div class="content row">
				<div class="gutter twelve columns">
					<header>
						<h1>Capabilities</h1>
					</header>

					<?php the_field('content_above'); ?>

					<!-- Services -->
					<div class="service-list">
						<!-- Pre-production -->
						<div class="service four columns">
							<h2>Pre-production</h2>
							<?php if(have_rows('pre_service')): ?>
								<?php while(have_rows('pre_service') ): the_row(); 
										$header = get_sub_field('service_header');
										$content = get_sub_field('service_content');
								?>
									<h3><?php echo $header ?></h3>
									<p><?php echo $content ?></p>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<!-- end -->
						
						<!-- Production -->
						<div class="service four columns">
							<h2>Production</h2>
							<?php if(have_rows('prod_service')): ?>
									<?php while(have_rows('prod_service') ): the_row(); 
										$header = get_sub_field('service_header');
										$content = get_sub_field('service_content');
									?>
										<h3><?php echo $header ?></h3>
										<p><?php echo $content ?></p>
									<?php endwhile; ?>
								<?php endif; ?>
						</div>
						<!-- end -->
						
						<!-- Post-production -->
						<div class="service four columns">
							<h2>Post-production</h2>
							<?php if(have_rows('post_service')): ?>
									<?php while(have_rows('post_service') ): the_row(); 
										$header = get_sub_field('service_header');
										$content = get_sub_field('service_content');
									?>
										<h3><?php echo $header ?></h3>
										<p><?php echo $content ?></p>
									<?php endwhile; ?>
								<?php endif; ?>
						</div>
						<!-- end -->

					</div>
					<!-- end services -->


				</div>
				<!-- end gutter -->
			</div>
			<!-- end content -->
		</div>
		<!-- end capabilities -->

		<!-- Contact -->
		<div id="contact" class="contact section-wrapper">
			<div class="content row">
				<div class="gutter twelve columns">

					<!-- Section header -->
					<header>
						<h1>Let's chat</h1>
					</header>

					<!-- Contact form -->
					<div class="contact-form six columns centered">
						<?php gravity_form(1, false, false, false, '', true); ?>
					</div>
					<!-- end contact form -->

				</div>
			</div>
		</div>
		<!-- end contact -->

	</div>
	<!-- end container -->

<?php get_footer(); ?>