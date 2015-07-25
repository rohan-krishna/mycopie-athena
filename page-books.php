<?php

/*

Template Name:Books Page

*/

get_header();
?>
<?php
	
	$defaults = array(
		'post_type' => 'post',
		'category_name' => 'books');

	$books = new WP_Query($defaults);

	$unruled_defaults = array(
		'post_type' => 'post',
		'category_name' => 'books-unruled');
	$unruled = new WP_Query($unruled_defaults);

	$ruled_defaults = array(
		'post_type' => 'post',
		'category_name' => 'books-ruled');
	$ruled = new WP_Query($ruled_defaults);

?>
<div id="primary" class="content-wrapper row padding--152">
	<div id="main" class="container" role="main">
		<div class="row tabs">
			<!-- All Designs !-->
			<div class="col-md-12 tabs-content">

				<h1 class="text-center">All Books</h1>

				<?php if ( $books->have_posts() ) : while ( $books->have_posts() ) : $books->the_post(); ?>

					<div class="col-md-2 text-center">
						
						<?php the_content(); ?>

					</div>

				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>

			</div>

			<div class="col-md-12">
				<div class="divider"></div>
			</div>

			<!-- Unruled !-->
			<div class="col-md-12">
				<h1 class="text-center">Unruled</h1>

				<?php if ( $unruled->have_posts() ) : while ( $unruled->have_posts() ) : $unruled->the_post(); ?>

					<div class="col-md-3">
						
						<?php the_content(); ?>

					</div>

				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>

			<div class="col-md-12">
				<div class="divider"></div>
			</div>

			<!-- Ruled !-->
			<div class="col-md-12">
				<h1 class="text-center">Ruled</h1>

				<?php if ( $ruled->have_posts() ) : while ( $ruled->have_posts() ) : $ruled->the_post(); ?>

					<div class="col-md-3">
						
						<?php the_content(); ?>

					</div>

				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div><!-- .row !-->		
	</div>
</div>
<?php get_footer(); ?>

