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





<section class="row home_2 arrow" id="fair_sec">

	<div class="grid entry-content home-chunks home-text">

		<?php if( get_field('chunk1_title') ): ?>
		 
		    <h2><?php the_field('chunk1_title'); ?></h2>
		 
		<?php endif; ?>     


		<?php if( get_field('chunk1_text') ): ?>
		 
		    <div><?php the_field('chunk1_text'); ?></div>
		 
		<?php endif; ?>  		
		
	</div><!-- .entry-content home-chunks home-text -->
	
</section><!-- #post-## -->










<section class="row home_3 arrow" id="prod-list" >

	<div class="grid entry-content home-chunks home-text">
		
		<h2>Products you can expect to find</h2>

		<div>
			<ul>
				<li>fashion &amp; footwear</li>
				<li>home accessories</li>
				<li>body care</li>
				<li>jewellery</li>
				<li>baby goods, toys &amp; books</li>
				<li>greetings cards &amp; gifts</li>
				<li>alternative technology</li>
				<li>furniture &amp; lighting</li>
			</ul>

		</div>

	</div>
	
</section>











<section id="seaside" class="row arrow">
<!-- 
	<img src="<?php echo get_stylesheet_directory_uri();  ;?>/images/_MG_5993.jpg"> 
	 -->
</section>









<section class="row home_3 arrow" id="about_sec">

	<div class="grid entry-content home-chunks home-text">
		
		<?php if( get_field('chunk2_title') ): ?>
		 
		    <h2><?php the_field('chunk2_title'); ?></h2>
		 
		<?php endif; ?>     


		<?php if( get_field('chunk2_text') ): ?>
		 
		    <div><?php the_field('chunk2_text'); ?></div>
		 
		<?php endif; ?>  


	</div>
	
</section>





<section class="row home_2 arrow">

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
	
	<!-- <div class="diagonal"><img src="<?php echo get_stylesheet_directory_uri();?>/images/triangle.svg" alt=""></div> -->
	<div class="stripes"><img src="<?php echo get_stylesheet_directory_uri();?>/images/diagonal-edit4.svg" alt=""></div>



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
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/Picture-265-compressor.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/Picture-194-compressor.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5886-compressor.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/Picture-206-compressor.jpg"></div>
			
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5895-compressor.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5769.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5802-compressor.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5631-compressor.jpg"></div>
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slides/_MG_5774-compressor.jpg"></div>
			
		</div>		
		
	</section><!-- #post-## -->

</div>






<section id="directory_sec" class="row home_2 arrow">


	<div class="grid entry-content home-chunks home-text">

		<h2>Directory of UK sustainable designers</h2>

		<div class="row">
			
			<div class="col-1-3">
				<a class="dir-cat" href="<?php bloginfo('url'); ?>/directory/home-accessories/">Home Accessories</a>
			</div>
			<div class="col-1-3">
				<a class="dir-cat" href="<?php bloginfo('url'); ?>/directory/fashion/">Fashion</a>
			</div>			
			<div class="col-1-3">
				<a class="dir-cat" href="<?php bloginfo('url'); ?>/directory/furniture-and-lighting/">Furniture &amp; Lighting</a>
			</div>

		</div>
		<div class="row">
			
			<div class="col-1-3">
				<a class="dir-cat" href="<?php bloginfo('url'); ?>/directory/books-and-cards/">Books &amp; Cards</a>
			</div>
			<div class="col-1-3">
				<a class="dir-cat" href="<?php bloginfo('url'); ?>/directory/technology/">Technology</a>
			</div>
			<div class="col-1-3">
				<a class="dir-cat" href="<?php bloginfo('url'); ?>/directory/info-services/">Info Services</a>
			</div>
		</div>		


<!-- 	<?php if( get_field('chunk4_text') ): ?>
	 
	    <div><?php the_field('chunk4_text'); ?></div>
	 
	<?php endif; ?>   -->

		
	</div>
	
</section>




