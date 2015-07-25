<?php
/*
Template Name: Offers Page
*/
?>

<?php get_header(); ?>

<div class="container white-bg">
	<div class="row">
		<div class="col-md-12">
			<img src="<?php echo get_template_directory_uri(); ?>/images/head-banner.png" draggable="false" />
		</div>
		<div class="col-md-12">
			<img src="<?php echo get_template_directory_uri(); ?>/images/mid-banner.png" draggable="false" />
		</div>
		<div class="col-md-12">
			<div class="col-md-6 col-md-offset-3 text-center">
				<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="col-md-12">
			<img src="<?php echo get_template_directory_uri(); ?>/images/bot-banner.png" draggable="false" style="width: 90%;margin:0 auto;"/>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>