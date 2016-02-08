<?php
/*
Template Name: Newsletter
*/
?>

<?php get_header(); ?>



<?php while (have_posts()) : the_post(); ?>

	<section id="main-content" class='inner'>

		<article class='space-before-4' id="post-<?php the_ID(); ?>">
				<h1>
					<?php the_title(); ?>
				</h1>
				<?php the_content(); ?>
				<?php echo do_shortcode( '[wysija_form id="1"]' ); ?>
			</div><!--#link-list-->
		</article>

	</section>
<?php endwhile; ?>

<?php get_footer(); ?>