<!-- PHOTOGRAPHY TEMPLATE -->

<?php get_header(); ?>

<section id="main-content" class="inner">

	<?php if ( is_category() ) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article class='gallery float-container space-after-4' id="post-<?php the_ID(); ?>">
				<div class="image-container L-3-4 M-1-1 gutters-1 float-right space-after-2 M-space-after-0" id="photos">
					<?php 
						if ( has_post_thumbnail()) {
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
						$gallery_id = get_the_ID();
						echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" rel="lightbox[' . $gallery_id . ']" >';
						the_post_thumbnail('large');
						echo '</a>';
					}?>
						<div class='no-display'>
							<?php the_content(); ?>
						</div>
				</div>
				<header class="photos L-1-4 M-3-4 S-1-1 gutters-1 space-before-1 M-space-left">
					<h2 class=''>
						<?php the_title(); ?>
					</h2>
					<?php $post_id = get_the_ID(); ?>
					<div class='small-text space-after-2 M-space-before-0  M-space-after-4'>
						<?php the_field('photographer'); ?>
					</div>
				</header>
		<footer>
		</footer>
		</article>
		<?php endwhile; ?>
	<?php endif; ?>

</section>

<?php get_footer(); ?>