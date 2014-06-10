<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package edf_2014
 */
?>




<section class="row home_1" id="intro">

	<h1 class="main-intro">A unique retail platform for the UK’s most <br><span class="high">innovative sustainable designers</span>.</h1>

<!-- 	<div class="grid home-slides">
		
		<div class="slides">
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5624.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5663.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5666.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5769.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5776.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5786.jpg"></div>
		</div>


	</div> -->
	
</section><!-- #post-## -->


<section class="row home_2 arrow" id="events_sec">

	<div class="grid entry-content home-chunks home-text">

		<?php if( get_field('chunk1_title') ): ?>
		 
		    <h2><?php the_field('chunk1_title'); ?></h2>
		 
		<?php endif; ?>     


		<?php if( get_field('chunk1_text') ): ?>
		 
		    <div><?php the_field('chunk1_text'); ?></div>
		 
		<?php endif; ?>  		
		
	</div><!-- .entry-content home-chunks home-text -->
	
</section><!-- #post-## -->

<section id="seaside" class="row arrow">
	


</section>


<section class="row home_3 arrow">

	<div class="grid entry-content home-chunks home-text">
		
		<?php if( get_field('chunk2_title') ): ?>
		 
		    <h2><?php the_field('chunk2_title'); ?></h2>
		 
		<?php endif; ?>     


		<?php if( get_field('chunk2_text') ): ?>
		 
		    <div><?php the_field('chunk2_text'); ?></div>
		 
		<?php endif; ?>  


	</div><!-- .entry-content home-chunks home-text -->
	
</section><!-- #post-## -->


<section class="row home_2 arrow" id="about_sec">


	<div class="grid entry-content home-chunks home-text">
		<?php if( get_field('chunk3_title') ): ?>
		 
		    <h2><?php the_field('chunk3_title'); ?></h2>
		 
		<?php endif; ?>     


		<?php if( get_field('chunk3_text') ): ?>
		 
		    <div><?php the_field('chunk3_text'); ?></div>
		 
		<?php endif; ?>  		
		
	</div><!-- .entry-content home-chunks home-text -->
	
</section><!-- #post-## -->


<div class="full">
	
	<div class="diagonal"><img src="<?php echo get_stylesheet_directory_uri();?>/images/triangle.svg" alt=""></div>

	<section class="row home_1" id="products_sec">
		
		<div class="grid entry-content home-chunks home-text">


			<?php if( get_field('chunk4_title') ): ?>
			 
			    <h2><?php the_field('chunk4_title'); ?></h2>
			 
			<?php endif; ?>  


		<?php if( get_field('chunk4_text') ): ?>
		 
		    <div><?php the_field('chunk4_text'); ?></div>
		 
		<?php endif; ?>  


		</div><!-- .entry-content home-chunks -->



		<div class="slides">
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5624.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5663.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5666.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5769.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5776.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5786.jpg"></div>
		</div>		
		
	</section><!-- #post-## -->




	<section class="row">

<!-- 		<div class="grid entry-content home-chunks"> -->


	<div class="grid home-slides"> 
		
<!-- 		<div class="slides">
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5624.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5663.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5666.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5769.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5776.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5786.jpg"></div>
		</div> -->


 	</div>		

			
		<!--</div> -->
		
	</section><!-- #post-## -->



<!-- 

	<section class="row home_3">


		<div class="grid entry-content home-chunks home-text">


		<?php if( get_field('chunk4_text') ): ?>
		 
		    <div><?php the_field('chunk4_text'); ?></div>
		 
		<?php endif; ?>  

			
		</div>
		
	</section>

 -->



</div>


