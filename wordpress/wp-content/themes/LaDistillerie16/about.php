<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>



<?php while (have_posts()) : the_post(); ?>

	<section id="main-content" class='inner space-before-4'>

 		<h1 class='L-2-3 ML-1-1 gutters-1 space-after-1'><?php the_title(); ?></h1>
 		<div class='float-container'> 

	 		<div class='L-2-3 ML-1-1'>
	 			<div class='space-before-1 space-after-4 gutters-1'>
					<?php the_content(); ?>
				</div>
				<div class=''>
					<div class="bio float-container">
						<img class='L-1-4 S-1-2 gutters-1 space-after-2' src='<?php the_field('image1'); ?>'>
						<div class='L-3-4 S-1-1 gutters-1 small-text'>
							<?php the_field('bio1'); ?>
						</div>
					</div>
				</div>
			</div>

			<div class='blocker L-1-12'></div>

			<div class='L-1-4 ML-1-1 float-container sidebar'>
				<div class='fix-it L-1-1 ML-1-2 M-1-1 gutters-1 space-before-1 space-after-2'>
					<h3 class='space-after-1'>
						Contact
					</h3>
					<div class=''>
						<?php the_field('contact'); ?>
					</div>
				</div>

<!-- 				<div class='L-1-1 ML-1-2 M-1-1 gutters-1'>
					<div class='subtitle-font space-after-1'>
						Newsletter
					</div>
					<div class='small-text newsletter'>
						<?php the_field('newsletter'); ?>
						<?php echo do_shortcode( '[wysija_form id="1"]' ); ?>
					</div>
				</div> -->
			</div>
		</div> <!-- .float-container -->


	</section>
<?php endwhile; ?>

<?php get_footer(); ?>