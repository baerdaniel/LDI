<?php get_header(); ?>


<div id="statement" class='M-hide fixed'>
<div id='sttmnt-blckr' class='L-1-1'></div>
	<?php query_posts('cat=8&showposts=1'); ?>
	<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class('green-background inner space-after-4') ?> id="post-<?php the_ID(); ?>">
		<h3 class='gutters-1 green-text space-before-2'>
			<?php the_content(); ?>
		</h3>
		<div class='space-before-1 gutters-1 left-indent'>
			<a href='/la-compagnie' class='subtitle-font small-text green-text'>À Propos De La Compagnie</a>
		</div>
	</article>
<?php endwhile; ?>
</div>

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
		<div class='main-info float-container'>
			<?php //saison
				$saison = get_field('saison');
				if( $saison ):
					echo '<div class="L-1-4 gutters">' . $saison . '</div>';
			endif; ?>
			<?php // lieux
			    while ( have_rows('lieux') ) : the_row();

					$ville = get_sub_field('ville');
					$dates = get_sub_field('dates');
					$theatre = get_sub_field('theatre');
					$link = get_sub_field('lien');

			        if( get_row_layout() == 'lieu' ):

			        	echo '<div class="float-container L-3-4">';
			        			echo '<div class="L-1-3 gutters">' . $ville . '</div>';
			        			echo '<div class="L-2-3 gutters inline-block-container">';
				        			echo '<div class="">' . $dates . '</div>';
				        			echo '<h3 class="">&nbsp;' . $theatre . '</h3>';
			        			if( $link ):
					        		echo '<a href='.$link.' class="button link">Reserver</a>';
					        	endif;
					        	echo '</div>';
			        	echo '</div>';

			        endif;
			    endwhile;
			?>

		</div>
		<div class='L-1-1 center-aligned'>
			<a href="<?php the_permalink() ?>" class='button'>
				Le Spectacle
			</a>
		</div>
	</article>
	<?php endwhile; ?>
</section>


<?php get_footer(); ?>