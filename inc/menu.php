
<div class="col-1-2">
	
	<div class="logo">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2014-logo-hr.png">
	</div>

</div>


<nav role="navigation" class="site-navigation main-navigation col-1-2 ">			

	<ul>

	  <li><a id="events" href="#" rel="home" <?php if ($postid==84) echo "class=\"active\""; ?>>
	  	<span aria-hidden="true" class="icon icon-home"></span><span class="navTitle">Events</span>
	  </a>
	</li>


	  <li><a id="about" href="#" title="About" <?php if ($postid==82) echo "class=\"active\""; ?>>
	  	<span aria-hidden="true" class="icon icon-info"></span><span class="navTitle">About</span>
	  </a>
	</li>


	  <li><a  id="products" href="#" title="Products" >
	  	<span aria-hidden="true" class="icon icon-calendar"></span><span>Products</span>
	  </a>
	</li>


	  <li><a href="#" title="Directory" 
	  	<?php 
	  		if (is_page('directory') || $post->post_parent == "20")
				    {
				        echo "class=\"active\"";
				    }  ?>
	  	><span aria-hidden="true" class="icon icon-folder"></span><span class="navTitle">Directory</span>
	  </a>
	</li>


	  <li><a href="#" title="Contact" <?php if ($postid==83) echo "class=\"active\""; ?>
	  	><span aria-hidden="true" class="icon icon-mail"></span><span class="navTitle">Contact</span>
	  </a>
	</li>

	  	<!--

	  <li><a href="<?php // echo get_site_url(); ?>/shop/" title="Contact" <?php // if ($postid==88) echo "class=\"active\""; ?>
	  	><span aria-hidden="true" class="icon icon-cart"></span><span class="navTitle">Shop</span>
	  	</a>
	  	</li>	

	  	-->			  	
	  
	  
	</ul>

</nav><!-- .site-navigation .main-navigation -->

