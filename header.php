<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package edf_2014
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.86831.js"></script>

<!-- slick.js -->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css"/>
<!--  fonts.com-->
<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/8df248bf-e2eb-4388-bfe7-97f3462f1b7e.css"/>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<header id="masthead" class="site-header head" role="banner">

		<div class="inner-header">

		<div class="logo">
			<a href="<?php bloginfo('url'); ?>">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2014-logo-hr.png">
			</a>
		</div>

					
		<?php include "inc/menu.php"; ?>

		</div>		

	</header><!-- #masthead .grid -->





