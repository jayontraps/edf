<?php

/*
    Template Name: home page
*/

get_header(); ?>

<!-- 	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main"> -->

			<!--

			<div class="diagonal"> -->
				<!-- <img src="<?php echo get_stylesheet_directory_uri();?>/images/diagonal.svg" alt=""> -->
				<!--<img src="<?php echo get_stylesheet_directory_uri();?>/images/triangle.svg" alt="">
			</div>-->
		


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'home' ); ?>

			<?php endwhile; // end of the loop. ?>

		<!-- </main> --> <!-- #main -->

	<!-- </div> -->	<!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
