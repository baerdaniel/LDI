<?php get_header(); ?>

<section id="main-content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

		<div class="content">		
			<div id="resume">
				<h4>Photos</h4>
				<h1><?php the_title(); ?></h4>
				<?php the_content(''); ?>
			</div>
			<div id="dates">
				<h4>Spectacle</h4>
				<?php the_block('spectacle'); ?>
			</div>
		</div><!--.content-->
		
		<footer>
 		</footer>
	</article>
		
<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>