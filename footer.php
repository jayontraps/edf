<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package edf_2014
 */
?>

	<!-- </div> -->	<!-- #content -->

	<div class="footer-scene">
		<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/_MG_5608.jpg"> -->
	</div>

	<div class="row footer">

		<footer id="colophon" class="site-footer grid" role="contentinfo">

			<div class="site-info col-1-2">
				<nav>
					<ul class="footNav">
						<li><a href="http://www.facebook.com/louise.kamara" title="follow us on Facebook" target="_blank"><span aria-hidden="true" class="icon-facebook"></span></a></li>

					</ul>
				</nav>			
			</div><!-- .site-info -->

		<div class="site-info col-1-2">
			<nav>
				<ul class="footNav">
					<li><a href="https://twitter.com/ecodesignfair" title="follow us on Twitter" target="_blank"><span aria-hidden="true" class="icon-twitter"></span></a></li>
				</ul>
			</nav>

		</div><!-- .site-info -->


		</footer><!-- #colophon .site-footer .grid -->

	</div>



<!-- </div> -->	<!-- #page -->

<?php wp_footer(); ?>

<?php if (is_page_template("page.directory.php")) : ?>

	<script type="text/javascript">
		
	    var container = document.querySelector('#dir_content');
	    var msnry = new Masonry( container, {
	      // options
	      columnWidth: container.querySelector('.directory_item'),
	      itemSelector: '.directory_item',
	      "gutter": 20
	    });     
	    	
	</script>

<?php endif; ?>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6046565-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
