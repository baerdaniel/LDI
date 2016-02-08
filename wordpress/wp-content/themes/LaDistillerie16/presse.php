<?php
/*
Template Name: Presse
*/
?>
<?php get_header(); ?>



<?php while (have_posts()) : the_post(); ?>

	<section id="main-content">

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div id="resume">

				<h4>
					<?php the_title(); ?>
				</h4>
				<?php the_content(); ?>
			</div><!--#resume-->

			<div id="link-list">
				<div id="presse-tele">
					<h4>Télévision</h4>
					<?php the_block('télé'); ?>
				</div>
	
				<div id="presse-radio">
					<h4>Radio</h4>
					<?php the_block('radio'); ?>
				</div>
				<div id="presse-presse">
					<h4>Presse</h4>
					<?php the_block('presse'); ?>
				</div>
			</div><!--#link-list-->

		</article>

	</section>
<?php endwhile; ?>

<?php get_footer(); ?>