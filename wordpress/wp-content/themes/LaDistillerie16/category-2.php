<!-- NEWS TEMPLATE -->

<?php get_header(); ?>

<ul id="main-content" class="inner relative">

	<?php if ( is_category() ) : ?>
	<?php while (have_posts()) : the_post(); ?>

	<li class='news space-after-6'>
		<article class='float-container relative' id="post-<?php the_ID(); ?>">
			<header class='L-1-3 M-1-1 sticky-column gutters-1 space-before-2'>
				<h1 class='smaller'>
					<?php the_title(); ?>
				</h1>
				<div class="date space-before-1 subtitle-font">
					<?php the_date(); ?>
				</div>
				<div class="saison space-after-2 ">
					<?php the_field('saison'); ?>
				</div>
			</header>
			<div class="L-2-3 M-1-1 sticky-column image-container gutters-1">
				<?php the_content();?>
			</div>
		</article>
	</li>

		<?php endwhile; ?>
	<?php endif; ?>

</ul>

<?php get_footer(); ?>