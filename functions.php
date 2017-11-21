<?php 

function morls_blog_theme_support(){

	register_nav_menus(array(
		'primary'=> __('Nav Menu'),
		'secondary'=> __('Nav Header Menu')
	));

	add_theme_support('post-thumbnails');
	add_image_size('small', 300,200, true);
}
add_action('after_setup_theme','morls_blog_theme_support');

function morls_blog_assets(){
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','morls_blog_assets');

function morls_blog_excerpt(){
	return 30;
}
add_filter('excerpt_length','morls_blog_excerpt');

function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="btn btn-default">Read More...</a></div>;';
}
add_filter('excerpt_more', 'et_excerpt_more');

