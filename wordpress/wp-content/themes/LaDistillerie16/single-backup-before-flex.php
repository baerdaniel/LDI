<?php get_header(); ?>

<section id="main-content" class='inner'>

		<div class="main-image gutters-1">
			<?php the_post_thumbnail('large'); ?>
		</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
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

		<div class='float-container'>
			<?php //introduction
				$introduction = get_field('introduction');
				if( $introduction ):
					echo '<h3 class="L-1-2 gutters">' . $introduction . '</h3>';
				endif;
			?>
			<div class='L-1-2 M-1-1 S-1-1 gutters'>
				<?php the_content(''); ?>
			</div>
		</div>

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

		<?php
		if( have_rows('gallery') ):

			$images = get_field('gallery');

			if( $images ):
			    echo '<div class="gallery left L-1-6">';
			        foreach( $images as $image ):
			            echo '<a href="'. $image['url'] .'" data-lightbox="road" >';
			        		echo '<img src="' . $image['sizes']['medium'] . '" alt="' . $image['alt'] . '" />';
			            echo '</a>';
			        endforeach;
			    echo '</div>';
			endif;

		endif; ?>


		<?php // equipe
		    while ( have_rows('equipe') ) : the_row();

				$image = get_sub_field('image');
				$name = get_sub_field('name');
				$role = get_sub_field('role');

		        if( get_row_layout() == 'membre' ):

		        	echo '<div class="participant float-container L-2-3 M-1-1">';
		        		echo '<div class="portrait L-1-4 gutters"><img src="' . $image['sizes']['large'] . '"></div>';
		        		echo '<div class="L-3-4 gutters">';
		        			echo '<h3 class="">' . $name . '</h3>';
		        			echo '<p>' . $role . '</p>';
		        		echo '</div>';
		        	echo '</div>';

		        endif;
		    endwhile;
		?>	


		<div class="trigger-4 L-1-1">		
			<div class=' float-container'>
				<div class='L-5-12 M-1-2 S-1-1  gutters-1'></div>	
				<div class='L-7-12 space-left-1 M-1-1 gutters-1'>
						<div class=''>
						<?php the_field('citations'); ?>
					</div>
				</div>
			</div>				
		</div><!--.container-->

		<div class="trigger-5 L-1-1 ">		
			<div class='float-container'>
				<div class='L-5-12 M-1-2 S-1-1  gutters-1'></div>
				<div class='L-7-12 space-left-1 M-1-1 float-right gutters-1'>
					<div class=''>
						<h4 class=' space-before-3'>Subventionneurs</h4>
						<?php the_field('subventionneurs'); ?>
					</div>
				</div>
				<div class='L-7-12 space-left-1 M-1-1 float-right gutters-1'>
					<div class=''>
						<h4 class=''>Co-production</h4>
						<?php the_field('co-production'); ?>
					</div>
				</div>
			</div>	
		</div><!--.container-->

		<footer>
 		</footer>
	</article>
		
<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>