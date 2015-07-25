<?php

/*

Template Name:Superstars

*/

get_header();

?>
<div id="primary" class="content-wrapper row">
	<div id="main" class="container" role="main">
		<div class="row">
			<div class="col-md-12 padding--152">
				<div class="col-md-4 single-post-entry">
					<figure class="effect-apollo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/coffee.jpg">
						<figcaption>
								<h2>SuperStar</h2>
								<p>Some More Info</p>
								<a href="#">View More</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 single-post-entry">
					<figure class="effect-apollo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/coffee.jpg">
						<figcaption>
								<h2>SuperStar</h2>
								<p>Some More Info</p>
								<a href="#">View More</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 single-post-entry">
					<figure class="effect-apollo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/coffee.jpg">
						<figcaption>
								<h2>SuperStar</h2>
								<p>Some More Info</p>
								<a href="#">View More</a>
						</figcaption>
					</figure>
				</div>
		</div>
		</div>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>


			<?php endwhile; // End of the loop. ?>

	</div><!-- #main -->

</div><!-- #primary -->

<?php get_footer(); ?>