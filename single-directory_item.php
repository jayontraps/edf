<?php
/**
 * The Template for displaying all single posts.
 *
 * @package edf
 * @since edf 1.0
 */

get_header(); ?>

<div class="page" class="hfeed site">

<div id="main" class="site-main">

<div class="grid grid-pad">

	<div class="col-7-12">

		<div class="content">

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php edf_content_nav( 'nav-above' ); ?>

				<?php get_template_part( 'content', 'directory_item-single' ); ?>

				<?php edf_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
		</div><!-- .content -->

	</div><!-- .col-7-12 -->

<?php get_sidebar(); ?>

</div><!-- .grid -->

<?php get_footer(); ?>