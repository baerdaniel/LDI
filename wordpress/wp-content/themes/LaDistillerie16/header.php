<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="description" content="La création théâtrale est cet endroit unique où genres, textes et corps inventent et réinventent la matière d’être, de vivre et de devenir ensemble.">
<meta name="keywords" content="Theatre, Group, Compagnie, Lausanne, Neuchatel, Spectacle, Trublions, Je ne fais que passer">
<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ( file_exists(TEMPLATEPATH .'/favicon.ico') ) : ?>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
<?php endif; ?><?php if ( file_exists(TEMPLATEPATH .'/apple-touch-icon.png') ) : ?>
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">
<?php endif; ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/framework.css"></link>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/lightbox.css"></link>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">


<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<!-- Jquery -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.12.0.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/smoothscroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>



<?php wp_head(); ?>

</head><?php $body_classes = join( ' ', get_body_class() ); ?>
<!--[if lt IE 7 ]><body class="ie <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 7 ]><body class="ie <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 8 ]><body class="ie <?php echo $body_classes; ?>"><![endif]-->
<!--[if  IE 9 ]><body class="ie <?php echo $body_classes; ?>"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<body id='top' class="<?php echo $body_classes; ?>"><!--<![endif]-->

<header id="header" role="banner">
	<div class='inner space-before-half space-after-half'>
		<div class='gutters-1'>

			<div id="logo">
				<a href="<?php bloginfo('url'); ?>/" name="top" class='space-before-1'>
				</a>
			</div>

			<nav id="main-nav" class='subtitle-font small-text' role="navigation">
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</nav>

		</div>		
	</div> <!-- .inner -->
</header>
<!-- 	<a href="#header" class='top-link'>– – –</a>
 -->
	<div id='main-blckr' class='L-1-1'></div>

	<div id="main" class='L-1-1 space-after-4' role="main">
