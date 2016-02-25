<?php get_header(); ?>


<?php query_posts('cat=5&showposts=1'); ?>
<?php while (have_posts()) : the_post(); ?>

<section id="main-content" class='main'>
	<div id="main-image" class="inner">
		<div class='gutters-1'>
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large');?></a>
		</div>
	</div>
	<article id="post-<?php the_ID(); ?>" class='home inner'>
		<a href="<?php the_permalink() ?>" class='gutters-1 block'>
			<header class="single-post L-2-3 M-1-1 gutters-1 centered">
				<h1 class=''>
					<?php the_title(); ?>
				</h1>
				<h2 class='subtitle'>
					<?php the_field('author'); ?>
				</h2>
				<h2 class='subtitle'>
					<?php the_field('subtitle'); ?>
				</h2>
			</header>
		</a>

		<div class='gutters'>
			<section class='main-info bigtext float-container'>
				<?php //saison
					$saison = get_field('saison');
					if( $saison ):
						echo '<div class="saison L-1-4 ML-1-1">' . $saison . '</div>';
				endif; ?>
				<?php // lieux
				    while ( have_rows('lieux') ) : the_row();

						$ville = get_sub_field('ville');
						$dates = get_sub_field('dates');
						$theatre = get_sub_field('theatre');
						$link = get_sub_field('lien');

				        if( get_row_layout() == 'lieu' ):

				        	echo '<div class="float-container lieu L-3-4 ML-1-1 float-right">';
				        			echo '<div class="L-1-3 S-1-1">' . $ville . '</div>';
				        			echo '<div class="L-2-3 S-1-1">';
					        			echo '<span>' . $dates . '</span>';
					        			echo '<span>&nbsp;' . $theatre . '</span>';
				        			if( $link ):
						        		echo '<a href='.$link.' class="button link">Reserver</a>';
						        	endif;
						        	echo '</div>';
				        	echo '</div>';

				        endif;
				    endwhile;
				?>
				</section>
			</div>

		<div class='L-1-1 center-aligned more'>
			<a href="<?php the_permalink() ?>" class='button'>
				Le Spectacle
			</a>
		</div>
	</article>
	<?php endwhile; ?>
</section>


<?php get_footer(); ?>