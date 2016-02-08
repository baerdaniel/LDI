<?php get_header(); ?>

<section id="main-content" class='inner'>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h4>Contact</h4>
		</header>
		<?php the_content(''); ?>
	</article>
	
<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>