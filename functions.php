<?php
require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';
//theme function area start

function the_themeadd_function(){
add_theme_support( 'automatic-feed-links' );
add_theme_support('custom-background');
add_theme_support('post-formats', array('aside', 'gallery', 'audio', 'video', 'image', 'link', 'quote', 'status', 'chat', ));
add_theme_support('post-thumbnails'); //for add header title and description
add_theme_support('title-tag'); //for add header title and description
//add_theme_support('custom-header'); //for add header title and description
$args = array(
	'flex-width'    =>true,
	'width'         => 980,
	'flex-height'    =>true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/sh-musavi.jpg',
);
add_theme_support( 'custom-header', $args );//for add background images

//add laguage #endregion
load_theme_textdomain('subtle', get_template_directory_uri() . '/language');
//nav menu area
add_theme_support('menu');
register_nav_menus(array(
	'topmenu' => __('Top ', 'subtle'),
	'mainmenu' => __('Main ', 'subtle'),
	'footermenu' => __('Footer ', 'subtle'),
));

//widget area
function sidebar_widget()
{
	register_sidebar(array(
		'id' => 'widgetmain',
		'name' => 'Right widget',
		'description' => 'You can add your any information simple way',

	));
}
add_action('widgets_init', 'sidebar_widget');
//theme function area end
//post read more function 
function read_more($limit)
{
	$post_content = explode(" ", get_the_content());
	$less_content = array_slice($post_content, 0, $limit);
	echo implode(" ", $less_content);
}
	//add slider #endregion
	register_post_type('sliderid', array(
		'labels'=>array(
			'name'=>'Slider',
			'add_new_item'=>'Add Slider Image Number or name '
			),
		'public'=> true,
		'supports'=>array('title','thumbnail'),
	));
			 
		//settings
		

}

add_action('after_setup_theme','the_themeadd_function');
?>