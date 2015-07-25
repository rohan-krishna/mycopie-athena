<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package MyCopie | Designer Notebooks
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="my_body">

<?php

//Navigation Args

$args = array(
	'theme_location' => 'page-header',
	'container' => false
	);
?>

<?php $display_options = get_option( 'mycopie_theme_display_options' ); ?>
<?php $social_options = get_option( 'mycopie_theme_social_options' ); ?>

<div id="page" class="container-fluid">
	
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mycopie-athena' ); ?></a>

	<?php if ( $display_options[ 'show_header' ] ) { ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="row">
			<?php if ( is_home() ) { ?>
			<div class="col-md-1 pull-right text-center">
				<a href="#" id="trigger-overlay" class="overlay-trigger"><h2><i class="fa fa-bars"></i></h2></a>
			</div>
			<?php } ?>
			<?php 

					if( ! ( is_home() ) ) { 
			?>
			<div class="col-md-12 bg-color-blue">
				<div class="col-md-3">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo-trans.png" draggable="false" class="page-logo" />
					</a>
				</div>
				<div class="col-md-3 search-bar pull-right">
					<?php get_search_form(); ?>
				</div>
			</div>

			<?php } ?>

			<?php if ( ! is_home() ) { ?> 

			<div class="col-md-12 header">
				<div class="col-md-11">

					<?php wp_nav_menu($args); ?>

				</div>

				<?php } ?>

				<?php if ( is_home() ) { ?>

				<?php } ?>

				<?php if ( ! is_home() ) { ?>

				<div class="col-md-12">
					<h1><?php echo get_the_title(); ?></h1>					
					<?php 
						if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumbs">','</p>');
					} ?>

				</div>

				<?php } ?>

			</div>

		</div>
	</header><!-- #masthead -->

	<?php } ?>
	
	<div id="content">
