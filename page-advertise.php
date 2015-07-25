<?php

/*

Template Name:Advertise

*/

get_header();
?>

<div id="primary" class="content-wrapper row padding--152">
	<div id="main" class="container" role="main">
		<div class="row">
			<div class="col-md-12 margin-top-152">
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<?php the_post_thumbnail(); ?>
			</div>
			<div class="col-md-12 text-center">
				<div class="col-md-4">
					<div id="heroIconAds" class="cu-line">
						<a href="#top"  data-toggle="tooltip" data-placement="top" title="Our Mission" id="tool">
							<i class="fa fa-rocket fa-3x"></i>
						</a>
					</div>
					<h1>Concept</h1>
					<p>Making life 'fun' for College students! Give them a book that looks awesome, loaded with coupons from brands that love them!</p>
				</div>
				<div class="col-md-4">
					<div id="heroIconAds" class="cu-line">
						<a href="#team-slider"  data-toggle="tooltip" data-placement="top" title="Our Vision" id="tool2">
							<i class="fa fa-camera fa-3x"></i>
						</a>
					</div>
					<h1>Ad efficiency</h1>
					<p>Cool kids buy MyCopie. Cool brands got to be with us to reach them! We will put a million books in the hands of students in a year. Be with us! :)</p>
				</div>
				<div class="col-md-4">
					<div id="heroIconAds" class="cu-line">
						<a href="#heroheader"  data-toggle="tooltip" data-placement="top" title="Our Purpose" id="tool3">
							<i class="fa fa-users fa-3x"></i>
						</a>
					</div>
					<h1>Multiple Viewership</h1>
					<p>Unlike news paper Ads or snapdeal, here's a medium that encourages students to see your brand name every day, every time they open their books! Beat this! :)</p>
				</div>
			</div>

			<div class="col-md-12">
				<div class="divider"></div>	
			</div>

			<div class="col-md-12">
				<?php the_content(); ?>
				<?php endwhile;  endif; ?>
			</div>

			<div class="col-md-12">
				<div class="divider"></div>
			</div>

			<div class="col-md-12">
				<div id="PartnersSlider">
					<?php 
						$args = array('post_type' => 'post',
				  					  'category_name' => 'brands' );
						$brands = new WP_Query($args);
					?>
					<?php if ( $brands->have_posts() ) :  while ( $brands->have_posts() ) : $brands->the_post() ?> 
						<div class="item">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail('full',array('class'=>'align-fix') ); ?>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>