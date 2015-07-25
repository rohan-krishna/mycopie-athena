<?php
/**
 * MyCopie | Designer Notebooks functions and definitions
 *
 * @package MyCopie | Designer Notebooks
 */

if ( ! function_exists( 'mycopie_athena_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mycopie_athena_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on MyCopie | Designer Notebooks, use a find and replace
	 * to change 'mycopie-athena' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mycopie-athena', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'page-header' => esc_html__( 'Page Header Navigation Menu', 'mycopie-athena' ),
		'index-header' => esc_html__( 'Index Header Navigation Menu', 'mycopie-athena'),
		'page-footer' => esc_html__( 'Page Footer Navigation Menu' , 'mycopie-athena'),
		'index-footer' => esc_html__( 'Index Footer Navigation Menu' , 'mycopie-athena'),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mycopie_athena_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // mycopie_athena_setup
add_action( 'after_setup_theme', 'mycopie_athena_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mycopie_athena_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mycopie_athena_content_width', 640 );
}
add_action( 'after_setup_theme', 'mycopie_athena_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function mycopie_athena_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mycopie-athena' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'mycopie_athena_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mycopie_athena_scripts() {
	wp_enqueue_style( 'mycopie-athena-style', get_stylesheet_uri() );

	wp_enqueue_style( 'mycopie-athena-screen', get_template_directory_uri() . '/inc/css/style.css');

	wp_enqueue_style( 'mycopie-bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.css');

	wp_enqueue_style( 'mycopie-overlay' , get_template_directory_uri() . '/inc/css/overlay.css');

	wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

	wp_enqueue_style('jquery-fullpage', get_template_directory_uri() . '/inc/css/jquery.fullPage.css');

	wp_enqueue_style('jquery-waves', get_template_directory_uri() . '/inc/css/waves.min.css');

	wp_enqueue_style('jquery-owl', get_template_directory_uri() . '/inc/css/owl.carousel.css');


	wp_enqueue_script('mycopie-jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');

	wp_enqueue_script( 'mycopie-athena-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'mycopie-homebrew' , get_template_directory_uri() . '/js/homebrew.js', array() , '', true);

	wp_enqueue_script( 'mycopie-velocity' , get_template_directory_uri() . '/js/velocity.js',array(),'',true);

	wp_enqueue_script( 'mycopie-tabtab', get_template_directory_uri() . '/js/tabtab.min.js',array(), '' , true);


	if ( is_home() ) {
		wp_enqueue_script( 'mycopie-fullpage' , get_template_directory_uri() . '/js/jquery.fullPage.min.js');
	}

	

	wp_enqueue_script( 'mycopie-waves' , get_template_directory_uri() . '/js/waves.min.js');

	wp_enqueue_script( 'mycopie-owl' , get_template_directory_uri() . '/js/owl.carousel.min.js');

	wp_enqueue_script( 'mycopie-athena-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mycopie_athena_scripts' );

function fontawesome_dashboard() {
   wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}

add_action('admin_init', 'fontawesome_dashboard');




/*
Menu Test
*/
function mycopie_theme_page_menu() {

	add_theme_page(
		'MyCopie Athena Settings',
		'MyCopie Athena Settings',
		'administrator',
		'mycopie_theme_options',
		'mycopie_theme_display');

	add_menu_page(
		'MyCopie Athena',
		'MyCopie Athena',
		'administrator',
		'mycopie_theme_menu',
		'mycopie_theme_display');

	add_submenu_page(
		'mycopie_theme_menu',
		'Display Options',
		'Display Options',
		'administrator',
		'mycopie_theme_menu',
		'mycopie_theme_display');

	add_submenu_page(
		'mycopie_theme_menu',
		'Social Options',
		'Social Options',
		'administrator',
		'mycopie_theme_social_options',
		create_function(null, 'mycopie_theme_display("social_options");' ));

	add_submenu_page(
		'mycopie_theme_menu',
		'Input Examples',
		'Input Examples',
		'administrator',
		'mycopie_theme_input_examples',
		create_function(null, 'mycopie_theme_display("input_examples");'));

	add_submenu_page(
		'mycopie_theme_menu',
		'Front-End Options',
		'Front-End Options',
		'administrator',
		'mycopie_theme_front_end_options',
		create_function(null, 'mycopie_theme_display("front_end_options");'));

}

add_action('admin_menu','mycopie_theme_page_menu');

function mycopie_theme_display( $active_tab = '' ) {

	?>
	<div class="wrap">
		<h1><i class="fa fa-desktop"></i> MyCopie Athena</h1>
		<h2>Theme Options</h2>
		<p>General settings and layout settings for MyCopie Athena Theme. Built on version 3.0 using Settings API. Hand-written code by Rohan Krishna.</p>

		<?php // Make a call to report settings errors ?>
		<?php settings_errors(); ?>

		<?php

			if( isset( $_GET[ 'tab' ] ) ) {
    			$active_tab = $_GET[ 'tab' ];
			} else if( $active_tab == 'social_options' ) {
    			$active_tab = 'social_options';
			} else if ($active_tab == 'input_examples') {
				$active_tab = 'input_examples';
			} else if ( $active_tab == 'front_end_options') {
				$active_tab = 'front_end_options';
			} else {
    			$active_tab = 'display_options';
			} // end if/else
		?>

		<h2 class="nav-tab-wrapper">
			<a href="?page=mycopie_theme_menu&tab=display_options" class="nav-tab <?php echo $active_tab == 'display_options' ? ' nav-tab-active' : ''; ?>">Display</a>
			<a href="?page=mycopie_theme_front_end_options&tab=front_end_options" class="nav-tab <?php echo $active_tab == 'front_end_options' ? ' nav-tab-active' : '';?> ">Front-End Options</a>
			<a href="?page=mycopie_theme_social_options&tab=social_options" class="nav-tab <?php echo $active_tab == 'social_options' ? ' nav-tab-active' : ''; ?>">Social</a>
			<a href="?page=mycopie_theme_input_examples&tab=input_examples" class="nav-tab <?php echo $active_tab == 'input_examples' ? ' nav-tab-active' : ''; ?>">Input Examples</a>
		</h2>

		<!-- Form to render options !-->
		<form method="post" action="options.php">

			<?php 

			if ( $active_tab == 'display_options' ) {
				settings_fields( 'mycopie_theme_display_options' );
				do_settings_sections( 'mycopie_theme_display_options' );
			} else if( $active_tab == 'social_options') {
				settings_fields ( 'mycopie_theme_social_options' );
				do_settings_sections( 'mycopie_theme_social_options' );
			} else if ($active_tab == 'input_examples') {
				settings_fields( 'mycopie_theme_input_examples' );
				do_settings_sections( 'mycopie_theme_input_examples' );
			} else {
				settings_fields( 'mycopie_theme_front_end_options' );
				do_settings_sections( 'mycopie_theme_front_end_options' );
			}
			?>

			<?php submit_button(); ?>

			
		</form>
	</div>

	<?php

} //End MyCopie Theme Display()


/**
* Add Custom Theme Options
*/

/* mycopie_theme_display_options callback */

function mycopie_init_theme_options() {

	$options = get_option( 'mycopie_theme_display_options' );

	if( !is_array( $options) ) 
	{
		$options = array("show_header" => false,"show_content" => false,"show_footer" => false);
		update_option('mycopie_theme_display_options',$options);
	}

	//First let's register a section
	add_settings_section(
		'general_settings_section', //ID used to identify section
		'Display Options', //Title Displayed in Dashboard
		'mycopie_general_options_callback', //Callback Function
		'mycopie_theme_display_options'
		); //Page on which the section must load

	add_settings_field(
		'show_header',
		'Header',
		'mycopie_toggle_header_callback',
		'mycopie_theme_display_options',
		'general_settings_section',
		array(
			'Activate this setting to display the header.')
		);
	add_settings_field( 
        'show_content',                     
        'Content',              
        'mycopie_toggle_content_callback',  
        'mycopie_theme_display_options',                          
        'general_settings_section',         
        array(                              
            'Activate this setting to display the content.'
        )
    );
    add_settings_field( 
        'show_footer',                      
        'Footer',               
        'mycopie_toggle_footer_callback',   
        'mycopie_theme_display_options',                          
        'general_settings_section',         
        array(                              
            'Activate this setting to display the footer.'
        )
    );

    // Finally, we register the fields with WordPress

    register_setting(
    	'mycopie_theme_display_options',
    	'mycopie_theme_display_options');
     
}
add_action('admin_init','mycopie_init_theme_options');


/*
Section Callbacks
*/
function mycopie_general_options_callback() {
	echo '<p>Select in which area would you like to display.</p>';
}
//Header Toggle
function mycopie_toggle_header_callback($args) {

	$options = get_option('mycopie_theme_display_options');

	$html ='<input type="checkbox" id="show_header" name="mycopie_theme_display_options[show_header]" value="1" ' . checked(1, $options['show_header'], false) . '/>';

	$html .= '<label for="show_header" >' . $args[0] . '</label>';

	echo $html; 
}
//content toggle
function mycopie_toggle_content_callback($args) {

	$options = get_option('mycopie_theme_display_options');

	$html ='<input type="checkbox" id="show_content" name="mycopie_theme_display_options[show_content]" value="1" ' . checked(1, $options['show_content'], false) . '/>';

	$html .= '<label for="show_content" >' . $args[0] . '</label>';

	echo $html; 
}
//Footer Toggle 
function mycopie_toggle_footer_callback($args) {

	$options = get_option('mycopie_theme_display_options');

	$html ='<input type="checkbox" id="show_footer" name="mycopie_theme_display_options[show_footer]" value="1" ' . checked(1, $options['show_footer'], false) . '/>';

	$html .= '<label for="show_footer" >' . $args[0] . '</label>';

	echo $html; 
}

/* Theme Front-End Options Init */
function mycopie_theme_default_options() {
	$options = array(
		'show_logo' => '');
	return $options;
}
function mycopie_theme_init_front_end_options() {

	$options = get_option('mycopie_theme_front_end_options');

	if ( false == $options ) {
		$options = mycopie_theme_default_options();
		add_option( 'mycopie_theme_front_end_options' );
	}

	add_settings_section(
		'front_end_settings_section',
		'Front-End Options',
		'mycopie_front_end_options_callback',
		'mycopie_theme_front_end_options');

	add_settings_field(
		'show_logo',
		'Logo',
		'mycopie_logo_callback',
		'mycopie_theme_front_end_options',
		'front_end_settings_section');

	register_setting(
		'mycopie_theme_front_end_options',
		'mycopie_theme_front_end_options',
		'mycopie_theme_sanitize_social_options');

}
add_action('admin_init','mycopie_theme_init_front_end_options');

function mycopie_front_end_options_callback() {
	echo '<p>Tweak the Look and Feel.</p>';
}
function mycopie_logo_callback() {
	$options = get_option('mycopie_theme_front_end_options');
	?>
	<input type="text" id="show_logo" name="mycopie_theme_front_end_options[show_logo]" value="<?php echo esc_url_raw($options['show_logo']); ?>" />
	<input type="button" id="upload_logo_nutton" class="button" value="Upload Logo" />
	<span class="description" > Upload an Image for Logo </span>
	<?php
}

/*Theme Social Options Init */
function mycopie_theme_init_social_options()
{

	//If the option don't exist , create one
	if( false == get_option( 'mycopie_theme_social_options' ) )
	{
		add_option( 'mycopie_theme_social_options' );
	}

		add_settings_section(
			'social_settings_section',
			'Social Options',
			'mycopie_social_options_callback',
			'mycopie_theme_social_options');

		add_settings_field(
			'twitter',
			'Twitter',
			'mycopie_twitter_callback',
			'mycopie_theme_social_options',
			'social_settings_section');

		add_settings_field(
			'facebook',
			'Facebook',
			'mycopie_facebook_callback',
			'mycopie_theme_social_options',
			'social_settings_section');

		add_settings_field(
			'googleplus',
			'Google+',
			'mycopie_googleplus_callback',
			'mycopie_theme_social_options',
			'social_settings_section');


		register_setting(
			'mycopie_theme_social_options',
			'mycopie_theme_social_options',
			'mycopie_theme_sanitize_social_options' );


}
add_action('admin_init','mycopie_theme_init_social_options');

function mycopie_social_options_callback()
{
	echo '<p>Provide URLs to the social networks you like to connect to.</p>';
}

function mycopie_twitter_callback() 
{
	$options = get_option( 'mycopie_theme_social_options' );

	$url = '';
	if ( isset($options['twitter'] ) ) {
		$url = $options['twitter'];
	}//end if

	echo '<input type="url" id="twitter" name="mycopie_theme_social_options[twitter]" value="' . $options['twitter'] . '" />';
}

function mycopie_facebook_callback()
{
	$options = get_option( 'mycopie_theme_social_options' );

	$url = '';
	if ( isset($options['facebook'] ) ) {
		$url = $options['facebook'];
	}//end if

	echo '<input type="url" id="facebook" name="mycopie_theme_social_options[facebook]" value="' . $options['facebook'] . '" />';
}

function mycopie_googleplus_callback()
{
	$options = get_option( 'mycopie_theme_social_options' );

	$url = '';
	if ( isset($options['googleplus'] ) ) {
		$url = $options['googleplus'];
	}//end if

	echo '<input type="url" id="googleplus" name="mycopie_theme_social_options[googleplus]" value="' . $options['googleplus'] . '" />';
}

function mycopie_theme_sanitize_social_options( $input )
{
	$output = array();

	foreach( $input as $key => $val ) {
		if ( isset($input[$key]) ) {
			$output[$key] = esc_url_raw( strip_tags( stripcslashes( $input[$key] ) ) );
		}
	}

	return apply_filters( 'mycopie_theme_sanitize_social_options' , $output, $input );
}


function mycopie_theme_init_input_examples()
{
	if( false == get_option( 'mycopie_theme_input_examples') )
	{
		add_option( 'mycopie_theme_input_examples' );
	}

	add_settings_section(
		'input_examples_section',
		'Input Examples',
		'mycopie_input_examples_callback',
		'mycopie_theme_input_examples');

	add_settings_field(
		'Input Element',
		'Input Element',
		'mycopie_input_element_callback',
		'mycopie_theme_input_examples',
		'input_examples_section');

	register_setting(
		'mycopie_theme_input_examples',
		'mycopie_theme_input_examples',
		'mycopie_theme_validate_input_examples');
}
add_action('admin_init','mycopie_theme_init_input_examples');

function mycopie_input_examples_callback()
{
}

function mycopie_input_element_callback()
{
	$options = get_option( 'mycopie_theme_input_examples' );

	echo '<input type="text" id="input_example" name="mycopie_theme_input_examples[input_example]" value="' . $options['input_example'] .'" />';
}

function mycopie_theme_validate_input_examples( $input )
{
	$output = array();

	foreach( $input as $key => $value )
	{
		if( isset( $input[$key] ) ) 
		{
			$output[$key] = strip_tags(stripslashes( $input[$key] ) );
		}
	}

	return apply_filters( 'mycopie_theme_validate_input_examples', $output, $input);
}

/**
 * Register Shortcodes
 */

// [bartag foo="foo-value"]

function bartag_func( $atts ) {
    $a = shortcode_atts( array(
        'foo' => 'something',
        'bar' => 'something else',
    ), $atts );

    return "foo = {$a['foo']}";
}
add_shortcode( 'bartag', 'bartag_func' );

// [sitename]

function sitename_callback () {
	return bloginfo('name');
}
add_shortcode( 'sitename' , 'sitename_callback' );

//CSS Flipper Shortcode 
function ImgFlipper($atts,$content = null) {
	extract(shortcode_atts(array(
		"front" => '<img src="http://placehold.it/165x234">',
		"back"  => '<img src="http://placehold.it/165x234">' ),$atts));
	return 
	'<div class="flip-container" id="myCard">
			<div class="flipper">
			<div class="front">' . $front .'</div>
			<div class="back">' . $back . '</div></div></div>';
}
add_shortcode("flipper","ImgFlipper");

//Breadcrumb


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
