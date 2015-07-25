<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package MyCopie | Designer Notebooks
 */

?>

</div><!-- #content -->
</div><!-- #page -->
<?php if ( ! ( is_home() ) ) { ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p>MyCopie &copy; 2015 | All Rights Reserved.</p>
					</div><!-- .site-info -->
	</footer><!-- #colophon -->
<?php } ?>
<?php wp_footer(); ?>
	<div class="overlay overlay-contentscale">
			<a href="#" class="overlay-close"><i class="fa fa-times fa-inverse fa-3x"></i></a>
			<nav>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Work</a></li>
					<li><a href="#">Clients</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
	</div>
</body>
</html>
