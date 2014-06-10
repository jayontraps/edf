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

<!-- <div id="page" class="hfeed site wrapper"> -->

<!-- 	<div class="row head"> -->

		<header id="masthead" class="site-header grid head" role="banner">

			
<!-- 			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div> -->

	<!-- 		<nav id="site-navigation" class="main-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'edf_2014' ); ?></h1>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'edf_2014' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation --> 


		
		<?php include "inc/menu.php"; ?>

		</header><!-- #masthead .grid -->

	<!-- </div> --> <!-- .row -->


	
	<div class="stripes"><img src="<?php echo get_stylesheet_directory_uri();?>/images/diagonal-edit4.svg" alt=""></div>

<!-- 
	<div class="row home_1 branding">

		<div class="grid entry-content">

			<div class="col-1-3 ">
				<div class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2014-logo-hr.png">
				</div> 
				
			</div>



			<div class="col-2-3">
				<h1 class="intro">A unique retail platform for the UK’s most <br><span class="high">innovative sustainable designers</span>.</h1>
			</div> 





		</div> -->

	</div>



	<!-- <div id="content" class="site-content"> -->


