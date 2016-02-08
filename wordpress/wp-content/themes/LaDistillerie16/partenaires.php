<?php
/*
Template Name: Partenaires
*/
?>
<?php get_header(); ?>



<?php while (have_posts()) : the_post(); ?>

	<section id="main-content" class='inner space-before-4'>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div id="resume" class='gutters-1'>
				<?php the_content(); ?>
			</div><!--#resume-->

 			<div class='float-container space-before-4'> 
				<div id="partenaires" class='L-1-3 M-1-2 S-1-1 gutters-1 space-after-4'>
					<h3 class='space-after-1'>Subventionneurs</h4>
					<?php the_field('subventionneurs'); ?>
				</div>
	
				<div id="collaborateurs" class='L-1-3 M-1-2 S-1-1 gutters-1 space-after-4'>
					<h3 class='space-after-1'>Collaborateurs</h4>
					<?php the_field('collaborateurs'); ?>
				</div>
				<div id="theatres" class='L-1-3 M-1-2 S-1-1 gutters-1 space-after-4'>
					<h3 class='space-after-1'>Théâtres</h4>
					<?php the_field('collaborateurs_2'); ?>
				</div>
			</div><!-- .float-container -->

			<div id="resume" class='gutters-1 space-after-4'>
				<?php the_field('bottom'); ?>
			</div><!--#resume-->

		</article>

	</section>
<?php endwhile; ?>

<?php get_footer(); ?>