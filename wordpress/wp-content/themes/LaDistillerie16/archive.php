<?php get_header(); ?>

<ul id="main-content" class="overview inner">

	<?php if ( is_category() ) : ?>
<!-- 	<h4 class="archive-title"><?php single_cat_title(); ?></h4>
 -->	<?php elseif( is_tag() ) : ?>
	<h1 class="archive-title">Posts Tagged &ldquo;<?php single_tag_title(); ?>&rdquo;</h1>
	<?php elseif (is_day()) : ?>
	<h1 class="archive-title">Archive for <?php the_time('F jS, Y'); ?></h1>
	<?php elseif (is_month()) : ?>
	<h1 class="archive-title">Archive for <?php the_time('F, Y'); ?></h1>
	<?php elseif (is_year()) : ?>
	<h1 class="archive-title">Archive for <?php the_time('Y'); ?></h1>
	<?php elseif (is_author()) : ?>
	<h1 class="archive-title">Author Archive</h1>
	<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
	<h1 class="archive-title">Blog Archives</h1>
	<?php endif; ?>

	<?php get_template_part('loop'); ?>

</ul>

<?php get_footer(); ?>