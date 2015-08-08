<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MyCopie | Designer Notebooks
 */

get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 padding--152">
			<div class="container text-center">
				<!-- JetPack -Logo- !-->
				<!--
				<img src="<?php echo get_header_image(); ?>" draggable="false" class="site-logo" />
				!-->

				<!-- Custom Post Type -index-cover Taxonomy !-->
				<?php
					$args = array(
						'post_type' => 'athena-display-posts',
						'tax_query' => array(
							array(
							'taxonomy' => 'athena-display-tags',
							'field' => 'slug',
							'terms' => 'index-cover'),
							),
						);
					$beta = new WP_Query($args);

					if ( $beta->have_posts() ) : while( $beta->have_posts() ) : $beta->the_post();
				?>
				<p><?php the_content(); ?></p>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
				
				<!-- Settings Field -Logo-Desc- !-->
				<h1 class="thin-headline">Designer Notebooks</h1>
				
				<!-- Settings Field -Logo-Button- !-->
				<p id="colored-btn" class="btn-more">
					<a href="#secondPage" class="btn waves-btn">Go Get 'em All</a>
				</p>
			</div>
		</div>
	</div><!-- .row -->

	<!-- Second Section !-->
	<div class="row" id="secondPage">
		<div class="col-md-12 bg-color-blue fg-color-white">
			<div class="container text-center">
				<span class="clearfix padding--152" style="display:inline-block;overflow:hidden;">
					<i class="fa fa-heart fa-5x"></i>
				</span>
				<h3 class="thin-headline">Mycopie is a notebook of the present. They are super cool, sturdy and has a character you'd love. This is made for you, not for your great grand father!</h3>
			</div>
			<!-- Post Type -About-Content- !-->
			<!--
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="col-md-3">
					<span class="fa-stack fa-lg fa-5x">
 						<i class="fa fa-circle fa-stack-2x fg-color-red"></i>
  						<i class="fa fa-space-shuttle fa-rotate-270 fa-stack-1x fa-inverse"></i>
					</span>
					<h2>Our Mission</h2>
					<p>Making even the last benchers to take notes. Using MyCopie's Back benchers collection.</p>
				</div>
				<div class="col-md-3">
					<span class="fa-stack fa-lg fa-5x">
 						<i class="fa fa-circle fa-stack-2x fg-color-indigo"></i>
  						<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
					</span>
					<h2>Our Vision</h2>
					<p>To make every college kid go to school. Sorry, College.</p>
				</div>
				<div class="col-md-3">
					<span class="fa-stack fa-lg fa-5x">
 						<i class="fa fa-circle fa-stack-2x fg-color-teal"></i>
  						<i class="fa fa-magic fa-stack-1x fa-inverse"></i>
					</span>
					<h2>Our Purpose</h2>
					<p>Love, Peace, no bunk, Only proxy, Einstein! Stuff like that. ;)</p>
				</div>
				<div class="col-md-3">
					<span class="fa-stack fa-lg fa-5x">
 						<i class="fa fa-circle fa-stack-2x fg-color-green"></i>
  						<i class="fa fa-users fa-stack-1x fa-inverse"></i>
					</span>
					<h2>Our Team</h2>
					<p>A bunch of kids who refuse to leave college many decades after they have passed out.</p>
				</div>
				!-->
				<!-- Call-to-action Btn !-->
				<div class="col-md-12">
					<p class="text-center btn-green" id="colored-btn">
						<a href="#thirdPage" class="btn waves-btn">Know More About Us</a>
					</p>
				</div>
			</div>	
		</div>
	</div><!-- #secondPage !-->
	

	<!-- Third Section !-->
	<div class="section" data-anchor="thirdPage">
		<h1 class="text-center">MyCopie Superstars</h1>
		
		<?php /*
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2 margin-top-152">
				<div class="col-md-4 single-post-entry">
					<figure class="effect-apollo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ss-1.jpg">
						<figcaption>
								<h2>SuperStar</h2>
								<p>Some More Info</p>
								<a href="#">View More</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 single-post-entry">
					<figure class="effect-apollo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ss-2.jpg">
						<figcaption>
								<h2>SuperStar</h2>
								<p>Some More Info</p>
								<a href="#">View More</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 single-post-entry">
					<figure class="effect-apollo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ss-3.jpg">
						<figcaption>
								<h2>SuperStar</h2>
								<p>Some More Info</p>
								<a href="#">View More</a>
						</figcaption>
					</figure>
				</div>
			</div>
			*/
			?>
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">Testimonials</h2>
				
				<!-- Custom Post Type -Testimonials- !-->
				<div id="testimonialSlider" class="testimonial-wrapper">
					<div class="item">
						<blockquote>
							<p>Something something something something</p>
						</blockquote>
						<figure>
							<figcaption>
								<p>Yello!</p>
							</figcaption>
							<img src="<?php echo get_template_directory_uri(); ?>/images/coffee.jpg" draggable="false" />
						</figure>
					</div>
				</div>
			</div>

		</div>
	</div><!-- #thirdPage !-->


<?php get_footer(); ?>

