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

<div class="content-wrapper row" id="fullPage">
	<div class="col-md-12 section">
		<div class="col-md-12 landing--section padding--152">
			<div class="col-md-4 col-md-offset-4 text-center">
				<!-- Settings Field -Logo- !-->
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" draggable="false" />
				<!-- Settings Field -CoverFlow Shortcode !-->

				<!-- Settings Field -Logo-Desc- !-->
				<p>Mycopie is a notebook of the present. They are super cool, sturdy and has a character you'd love. This is made for you, not for your great grand father!</p>
				<!-- Settings Field -Logo-Button- !-->
				<p id="colored-btn" class="btn-more">
					<a href="#secondPage" class="btn waves-btn">Go Get 'em All</a>
				</p>
			</div>
		</div>
	</div>

	<!-- Second Section !-->
	<div class="col-md-12 section" data-anchor="secondPage">
		<div class="col-md-12">
			<!-- Post Type -About-Content- !-->
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="col-md-3">
					<span class="fa-stack fa-lg fa-5x">
 						<i class="fa fa-circle fa-stack-2x fg-color-red"></i>
  						<i class="fa fa-space-shuttle fa-rotate-270 fa-stack-1x fa-inverse"></i>
					</span>
					<h1>Our Mission</h1>
					<p>Making even the last benchers to take notes. Using MyCopie's Back benchers collection.</p>
				</div>
				<div class="col-md-3">
					<span class="fa-stack fa-lg fa-5x">
 						<i class="fa fa-circle fa-stack-2x fg-color-indigo"></i>
  						<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
					</span>
					<h1>Our Vision</h1>
					<p>To make every college kid go to school. Sorry, College.</p>
				</div>
				<div class="col-md-3">
					<span class="fa-stack fa-lg fa-5x">
 						<i class="fa fa-circle fa-stack-2x fg-color-teal"></i>
  						<i class="fa fa-magic fa-stack-1x fa-inverse"></i>
					</span>
					<h1>Our Purpose</h1>
					<p>Love, Peace, no bunk, Only proxy, Einstein! Stuff like that. ;)</p>
				</div>
				<div class="col-md-3">
					<span class="fa-stack fa-lg fa-5x">
 						<i class="fa fa-circle fa-stack-2x fg-color-green"></i>
  						<i class="fa fa-users fa-stack-1x fa-inverse"></i>
					</span>
					<h1>Our Team</h1>
					<p>A bunch of kids who refuse to leave college many decades after they have passed out.</p>
				</div>
				<!-- Call-to-action Btn !-->
				<p class="text-center btn-more" id="colored-btn">
					<a href="#thirdPage" class="btn waves-btn">Know More About Us</a>
				</p>
			</div>	
		</div>
	</div><!-- #secondPage !-->
	
	<div class="section" data-anchor="thirdPage">
		<h1 class="text-center">MyCopie Superstars</h1>

		<p class="text-center">A brief information about MyCopie Superstars.</p>

		

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
</div>

<script type="text/javascript">
	//Full Page
	$('#fullPage').fullpage({
		navigation : true,
		anchors : ['firstPage','secondPage','thirdPage','fourthPage'],
		verticalCentered : true,
		paddingTop: '0.2em'
	});
</script>

<?php get_footer(); ?>

