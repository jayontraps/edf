<?php
/*
	Template Name: directory page
*/
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


	<div id="directory-cat" class="cat_menu">

		<?php wp_nav_menu(array(
			'menu' => 'Directory Nav',
			'menu_id' => 'directoryNav',
			'menu_class' => 'dirNav')); ?>	


	</div><!-- .cat_menu -->

	<div id="outArrow">
		<div class="dir-nav-icon"></div>
	</div>




		


<section class="row home_2 arrow" id="fair_sec">
	<div class="grid dir-title"><h2><?php the_title(); ?></h2></div>
</section>


<div id="dir_content" class="site-content" role="main">

<?php 

	

	$postid = get_the_ID();

	switch ($postid) {
	case 385:
		$args = array( 'post_type' => 'directory_item', 'category_name' => 'fashion', 'orderby' => 'date', 'order' => 'ASC' );
		break;
	case 384:
		$args = array( 'post_type' => 'directory_item', 'category_name' => 'home-accessories', 'orderby' => 'date', 'order' => 'ASC' );
		break;
	case 386:
		$args = array( 'post_type' => 'directory_item', 'category_name' => 'furniture-and-lighting', 'orderby' => 'date', 'order' => 'ASC' );
		break;
	case 387:
		$args = array( 'post_type' => 'directory_item', 'category_name' => 'books-and-cards', 'orderby' => 'date', 'order' => 'ASC' );
		break;	
	case 393:
		$args = array( 'post_type' => 'directory_item', 'category_name' => 'technology', 'orderby' => 'date', 'order' => 'ASC' );
		break;	
	case 394:
		$args = array( 'post_type' => 'directory_item', 'category_name' => 'info-services', 'orderby' => 'date', 'order' => 'ASC' );
		break;
	}

		
		$args = $args;
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
?>

	

 		<div id="<?php the_ID(); ?>tab1" class="directory_item">

		<?php
			$attachment_id = get_field('item_image');
			$size = "full"; // (thumbnail, medium, large, full or custom size)				
			$image = wp_get_attachment_image_src( $attachment_id, $size );
		?>


		<a class="dir_tease" href="http://<?php the_field('link');?>" target="_blank">

			<img src="<?php echo $image[0];?>" />

			<span class="teaser"><h4>Visit Website</h4></span>

		</a>

				

			<div class="dir_details">

				<h4><?php the_title();?></h4>

	            <div class="excerptWrap"><?php the_excerpt(); ?></div>				

			</div>

			

			


        </div>



		<?php endwhile; ?>


		<?php endwhile; // end of the loop. ?>



</div><!-- #dir_content .site-content -->


<?php get_footer(); ?>