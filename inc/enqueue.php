<?php 
/*			
	@package rongdhonuportfolio
	===========================
		Zahidul Islam
	===========================
*/

function load_custom_wp_admin_style() {
	wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_wp_admin_css' ); 
	wp_enqueue_media();
	wp_enqueue_script('my_custom_script', get_template_directory() . '/assets/js/jquery-3.3.1.min.js');
	wp_enqueue_script('my_custom_script', get_template_directory() . '/assets/js/bootstrap.bundle.min.js');
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


 ?>


