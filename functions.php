<?php

// Įjungiame post thumbnail

add_theme_support( 'post-thumbnails' );

// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('ASSETS_URL') ) {
	define('ASSETS_URL', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {

			// <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
			// <script src="greendress.js"></script>

        wp_deregister_script('jquery');

        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, false, true);
        wp_register_script('main', ASSETS_URL . '/assets/js/greendress.js', array('jquery'), false, true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('main');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	$styles_path = ASSETS_URL . '/assets/css/main.css';

	if( $styles_path ) {

		wp_register_style('forum-font', 'https://fonts.googleapis.com/css?family=Forum|Sacramento', array(), false, 'all');
		wp_register_style('sacramento-font', 'https://fonts.googleapis.com/css?family=Sacramento', array(), false, 'all');
		wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', array(), false, 'all');
		wp_register_style('social-icons', 'https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?9ukd8d', array(), false, 'all');
//        lokalus failai
// lokalus fontawesome
		wp_register_style('fa', ASSETS_URL . '/assets/css/font-awesome.min.css', array('social-icons'), false, 'all');
		wp_register_style('main-css', ASSETS_URL . '/assets/css/greendress.css', array(), false, 'all');

		wp_enqueue_style('forum-font');
		wp_enqueue_style('sacramento-font');
		wp_enqueue_style('fontawesome');
		//        iskvieciamas font-awesome failas
		wp_enqueue_style('fa');
		wp_enqueue_style('social-icons');
		wp_enqueue_style('main-css');
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

function register_theme_menus() {

	register_nav_menus(array(
        'primary-navigation' => __( 'Primary Navigation' )
    ));
}

add_action( 'init', 'register_theme_menus' );

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if( isset($sidebars) && !empty($sidebars) ) {

	foreach( $sidebars as $sidebar ) {

		if( empty($sidebar) ) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}

// Custom posts

$themePostTypes = array(
//'Testimonials' => 'Testimonial'

);

function createPostTypes() {

	global $themePostTypes;

	$defaultArgs = array(
		'taxonomies' => array('category'), // uncomment this line to enable custom post type categories
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		#'menu_icon' => '',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true, // to enable archive page, disabled to avoid conflicts with page permalinks
		'menu_position' => null,
		'can_export' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', /*'custom-fields', 'author', 'excerpt', 'comments'*/ ),
	);

	foreach( $themePostTypes as $postType => $postTypeSingular ) {

		$myArgs = $defaultArgs;
		$slug = 'vcs-starter' . '-' . sanitize_title( $postType );
		$labels = makePostTypeLabels( $postType, $postTypeSingular );
		$myArgs['labels'] = $labels;
		$myArgs['rewrite'] = array( 'slug' => $slug, 'with_front' => true );
		$functionName = 'postType' . $postType . 'Vars';

		if( function_exists($functionName) ) {

			$customVars = call_user_func($functionName);

			if( is_array($customVars) && !empty($customVars) ) {
				$myArgs = array_merge($myArgs, $customVars);
			}
		}

		register_post_type( $postType, $myArgs );

	}
}

if( isset( $themePostTypes ) && !empty( $themePostTypes ) && is_array( $themePostTypes ) ) {
	add_action('init', 'createPostTypes', 0 );
}


function makePostTypeLabels( $name, $nameSingular ) {

	return array(
		'name' => _x($name, 'post type general name'),
		'singular_name' => _x($nameSingular, 'post type singular name'),
		'add_new' => _x('Add New', 'Example item'),
		'add_new_item' => __('Add New '.$nameSingular),
		'edit_item' => __('Edit '.$nameSingular),
		'new_item' => __('New '.$nameSingular),
		'view_item' => __('View '.$nameSingular),
		'search_items' => __('Search '.$name),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Bin'),
		'parent_item_colon' => ''
	);
}
if(function_exists('acf_add_options_page')){
    acf_add_options_page();
}
function dump($value){
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}

//sukuriamas naujas pav dydis
//add_image_size($name, $width, $height, false)
//    false kai nenori karpymo

    add_image_size('logo-image', 214, 144, false);
    add_image_size('slider-image', 1060, 0, false);
    add_image_size('dress-image', 265, 265, false);
    add_image_size('how-image', 208, 208, false);


?>
