
<nav role="navigation" id="site-navigation" class="main-navigation ">	

	<h4 class="menu-toggle"><span class="navicon"></span></h4>		

	<ul id="menu" class="nav-menu">

	  <li><a id="fair" href="<?php bloginfo('url'); ?>/#fair_sec" rel="home" <?php if ($postid==84) echo "class=\"active\""; ?>>
	  	<span class="navTitle">Events</span>
	  </a>
	</li>


	  <li><a id="about" href="<?php bloginfo('url'); ?>/#about_sec" title="About" <?php if ($postid==82) echo "class=\"active\""; ?>>
	  	</span><span class="navTitle">About</span>
	  </a>
	</li>


	  <li><a id="products" href="<?php bloginfo('url'); ?>/#products_sec" title="Products" >
	  	<span>Gallery</span>
	  </a>
	</li>


	  <li><a id="directory" href="<?php echo bloginfo( 'url' ); ?>/#directory_sec" title="Directory" 
	  	<?php 
	  		if (is_page('directory') || $post->post_parent == "20")
				    {
				        echo "class=\"active\"";
				    }  ?>
	  	>
	  	<span class="navTitle">Directory</span>
	  </a>
	</li>


	  <li><a href="<?php bloginfo('url'); ?>/contact/" title="Contact" <?php if ($postid==83) echo "class=\"active\""; ?>
	  	>
	  	<span class="navTitle">Contact</span>
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

