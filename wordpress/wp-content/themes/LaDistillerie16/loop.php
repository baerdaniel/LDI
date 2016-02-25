<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<li class='spectacle'>
		<article class='float-container' id="post-<?php the_ID(); ?>">
			<div class="image-container L-2-3 M-1-1 gutters-1">
				<a class='L-1-1' href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('large');?>
				</a>
			</div>
			<a class='title L-1-3 M-1-1' href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<header class='gutters-1'>
					<h1 class='smaller'>
						<?php the_title(); ?>
					</h1>
					<h2 class='L-1-1 '>
						<?php the_field('subtitle'); ?>
					</h2>

					<div class="saison">
						<?php the_field('saison'); ?>
					</div>
				</header>
			</a>
		</article>
	</li>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php if (show_posts_nav()) : ?>

<?php endif; ?>