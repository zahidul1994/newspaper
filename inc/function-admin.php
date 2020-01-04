<?php 
/*			
	@package rongdhonuportfolio
	===========================
		Zahidul Islam
	===========================
*/

function   zahidul_add_admin_page (){
	//main menu function
	add_menu_page('zahidul theme options','Zahidul','manage_options','zahidul_theme','zahidul_theme_create_page', get_template_directory_uri().'/img/vvvvv.png',210);
	//Generated admin menu page  
	add_submenu_page('zahidul_theme', 'zahidul theme options', 'General', 'manage_options','zahidul_theme', 'zahidul_theme_create_page');
	add_submenu_page('zahidul_theme', 'Settings CSS', 'settings_css', 'manage_options', 'setting_css_page', 'settings_theme_css_page');

	//active setting
	add_action('admin_init','zahidul_custom_setting');
	
}
add_action('admin_menu','zahidul_add_admin_page');
function zahidul_custom_setting(){
	register_setting('zahidul-settings-group', 'profile_handeler');
	register_setting('zahidul-settings-group', 'fast_name');
	register_setting('zahidul-settings-group', 'last_name');
	register_setting('zahidul-settings-group', 'user_description');
	register_setting('zahidul-settings-group', 'facebook_handeler');
	register_setting('zahidul-settings-group', 'twitter_handeler');
	register_setting('zahidul-settings-group', 'linkedin_handeler');
	register_setting('zahidul-settings-group', 'googleplus_handeler');
	register_setting('zahidul-settings-group', 'user_handeler');
	add_settings_section('zahidul-sidebar-options', 'Sidebar Option','zahidul_sidebar_options','zahidul_theme');
	add_settings_field('sidebar-profile', 'Profile Picture', 'zahidul_sidebar_profile', 'zahidul_theme', 'zahidul-sidebar-options');
	add_settings_field('sidebar-name', 'Full Name', 'zahidul_sidebar_name', 'zahidul_theme', 'zahidul-sidebar-options');
	add_settings_field('sidebar-descriptin', 'User Description', 'zahidul_sidebar_user_description', 'zahidul_theme', 'zahidul-sidebar-options');
	add_settings_field('sidebar-facebook', 'Facebook handeler ', 'zahidul_sidebar_facebook', 'zahidul_theme','zahidul-sidebar-options');
	add_settings_field('sidebar-twitter', 'Twitter handeler ', 'zahidul_sidebar_twitter', 'zahidul_theme','zahidul-sidebar-options');
	add_settings_field('sidebar-linkedin', 'Linkedin handeler ', 'zahidul_sidebar_linkedin', 'zahidul_theme','zahidul-sidebar-options');
	add_settings_field('sidebar-googleplus', 'Google+ handeler ', 'zahidul_sidebar_googleplus', 'zahidul_theme','zahidul-sidebar-options');
}
function zahidul_sidebar_options(){
	echo '<h1>Well Come</h1>';
}
function zahidul_sidebar_profile(){
	$profile=esc_attr(get_option('profile_handeler'));
	echo '<input type="button" value="Upload Profile Picture" class="button button-primary" id="upload_button"><input type="hidden" id="profile-picture" name="profile_handeler" value="'.$profile.'" "/>';
}
function zahidul_sidebar_name(){
	 $fastName=esc_attr(get_option('fast_name'));
	 $lasttName=esc_attr(get_option('last_name'));
	echo ' <input type="text" name="fast_name" value="'.$fastName.'" placeholder="Your Fast Name"/><input type="text" name="last_name" value="'. $lasttName.'" placeholder="your Last name"/>';
}
function zahidul_sidebar_user_description(){
	$user=esc_attr(get_option('user_handeler'));
	echo '<input type="text" name="user_handeler" value="'.$user.'" placeholder="Describe YOur self"/>';
}
function zahidul_sidebar_facebook(){
	$facebook=esc_attr(get_option('facebook_handeler'));
	echo '<input type="text" name="facebook_handeler" value="'.$facebook.'" placeholder=" Facebook User"/>';
}
function zahidul_sidebar_twitter(){
	$twitter=esc_attr(get_option('twitter_handeler'));
	echo '<input type="text" name="twitter_handeler" value="'.$twitter.'" placeholder="Twitter User"/>';
}
function zahidul_sidebar_linkedin(){
	$linkedin=esc_attr(get_option('linkedin_handeler'));
	echo '<input type="text" name="linkedin_handeler" value="'.$linkedin.'" placeholder=" Linkedin User Name"/>';
}
function zahidul_sidebar_googleplus(){
	$googleplus=esc_attr(get_option('googleplus_handeler'));
	echo '<input type="text" name="googleplus_handeler" value="'.$googleplus.'" placeholder=" Google+ User Name"/>';
}
function zahidul_theme_create_page(){
	//settings for function
require_once(get_template_directory().'/inc/template/zahidul-admin.php');
}
function settings_theme_css_page(){
	//css settiong function
	echo 'hello ami ki parbo';
}

	
