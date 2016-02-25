<?php get_header(); ?>

<div id="main-content" class='flex-wrapper'>


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article <?php post_class('main L-2-3 M-1-1') ?> id="post-<?php the_ID(); ?>">


 			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<div class="main-image gutters-1">
				<a href="<?php echo $url; ?>" data-lightbox="gallery"><?php the_post_thumbnail('large'); ?></a>
			</div>

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

			<section class='float-container'>
				<?php //introduction
					$introduction = get_field('introduction');
					
					if( $introduction ):
						echo '<h3 class="bigtext L-1-2 ML-1-1 gutters">' . $introduction . '</h3>';
					endif;
				?>
				<div class='L-1-2 ML-1-1 S-1-1 gutters'>
					<?php the_content(''); ?>
					<?php 
						$pressRelease = get_field('press_release');
						if( $pressRelease ):
							echo '<a href='.$pressRelease.' class="link" target="_blank">Dossier de Presse<span class="arrow"> ➤</span></a>';
						endif;
					?>
					
				</div>

			</section>

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

				        	echo '<div class="float-container lieu L-3-4 S-1-1 float-right">';
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

			<?php
			if( have_rows('gallery') ):

				$images = get_field('gallery');

				if( $images ):
				    echo '<section class="gallery aside left L-1-6 M-1-1">';
				        foreach( $images as $image ):
				            echo '<a href="'. $image['url'] .'" data-lightbox="gallery" class="gallery-image M-1-3 S-1-2">';
				        		echo '<img src="' . $image['sizes']['thumbnail'] . '" alt="' . $image['alt'] . '" />';
				            echo '</a>';
				        endforeach;
				    echo '</section>';
				endif;

			endif; ?>

			<section>
				<h2 class='gutters'>Générique</h2>
			
				<div class='team gutters'>
					
					<?php // equipe
					    while ( have_rows('equipe') ) : the_row();

							$image = get_sub_field('image');
							$name = get_sub_field('name');
							$role = get_sub_field('role');

					        if( get_row_layout() == 'membre' ):

					        	echo '<div class="member L-1-6 ML-1-4 S-1-3">';
					        		echo '<div class="portrait"><img src="' . $image['sizes']['large'] . '"></div>';
					        		echo '<div class="">';
					        			echo '<p class="">' . $name . '</p>';
					        			echo '<p>' . $role . '</p>';
					        		echo '</div>';
					        	echo '</div>';

					        endif;
					    endwhile;
					?>
				</div>
			</section>


			<?php // presse
			if ( have_rows('citations') ):
			echo "<section class='reactions'>";
				echo "<h2 class='gutters'>Réactions</h2>";
				echo "<div class='presse float-container'>";

					while ( have_rows('citations') ) : the_row();
					
							$text = get_sub_field('phrase');
							$source = get_sub_field('source');
							$link = get_sub_field('lien');
							$file = get_sub_field('fichier');

					        if( get_row_layout() == 'citation' ):

				        		echo '<div class="citation L-1-2 S-1-1 gutters">';
				        			echo '<p class="bigtext">' . $text . '</p>';
				        			if( $link ):
				        				echo '<a href='.$link.' class="link" target="_blank">' . $source . '<span class="arrow"> ➤</span></a>';
				        			elseif( $file ):
				        				echo '<a href='.$file.' class="link" target="_blank">' . $source . '<span class="arrow"> ➤</span></a>';
				        			else:
				        				echo '<span>' . $source . '</span>';
				        			endif;
				        		echo '</div>';

					        endif;
				    endwhile;
				    
				echo "</div>";

			echo "</section>";
			endif;
			?>

			<?php // videos
			if ( have_rows('videos') ):
			echo "<section class='videos float-container'>";
				echo '<h2 class="L-1-1 gutters">Videos</h2>';
				while ( have_rows('videos') ) : the_row();
					
					$video = get_sub_field('video');
		        		echo "<div class='video L-1-2 S-1-1 gutters'><div class='video-wrapper'>".$video."</div></div>";
				endwhile;

			echo "</section>";
			endif;
			?>

			<?php // audio
			if ( have_rows('audio') ):
			echo "<section class='audio float-container'>";
				echo '<h2 class="L-1-1 gutters">Audio</h2>';
				while ( have_rows('audio') ) : the_row();
					
					$track = get_sub_field('track');
					$title = get_sub_field('title');
						echo "<div class='audio L-1-2 S-1-1 gutters'>";
							echo "<audio controls class='audio-player'>";
		        				echo "<source src='".$track. "' type='audio/mpeg'>";
		        			echo "</audio>";
		        			echo '<p class="source">' . $title . '</p>';
		        		echo "</div>";

				endwhile;
									  

			echo "</section>";
			endif;
			?>

			<section class='subventionneurs'>
			<h2 class='gutters'>Merci à nos subventionneurs</h2>
				<div class=' gutters'>
					<?php // subventionneurs
					    while ( have_rows('subventionneurs') ) : the_row();

							$nom = get_sub_field('nom');
							$link = get_sub_field('lien');

					        if( get_row_layout() == 'subventionneurs' ):

			        			if( $link ):
					        		echo '<a href='.$link.' class="link" target="_blank">' . $nom . '</a>';
					        	endif;

					        endif;
					    endwhile;
					?>
				</div>
			</section>

			<section class='subventionneurs'>
			<h2 class='gutters'>Co-production</h2>
				<div class=' gutters'>
					<?php // Co-production
					    while ( have_rows('coproduction') ) : the_row();

							$nom = get_sub_field('nom');
							$link = get_sub_field('lien');

					        if( get_row_layout() == 'coproduction' ):

			        			if( $link ):
					        		echo '<a href='.$link.' class="link" target="_blank">' . $nom . '</a>';
					        	endif;

					        endif;
					    endwhile;
					?>
				</div>
			</section>




		<footer>
 		</footer>
	</article>

		
<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>