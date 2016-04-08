<?php get_header(); ?>


	<!-- Primary content -->
	<div class="primary-content section-wrapper">
		<div class="content row">
			<div class="gutter nine columns centered">
				<header>
					<h1><?php echo get_the_title(); ?></h1>
				</header>

				<?php if (have_posts()) : while (have_posts()) : the_post();?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
				
			</div>
		</div>
	</div>
	<!-- END primary content -->


<?php get_footer(); ?>