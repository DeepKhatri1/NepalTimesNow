<?php  

register_nav_menus(
  array('primary-menu'=>'Top Menu'),
);

// Theme Logo
add_theme_support( 'custom-logo' );


// Enable custom header support
add_theme_support( 'custom-header' );

// Include INC bootstrapmenu.php
require get_template_directory(). '/inc/bootstrapmenu.php';

// For supporting featurd Image
function child_theme_setup() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'child_theme_setup' );



// SOCIAL MEDIA LINKS
function custom_theme_customize_register($wp_customize) {
	// Create a new section for social media links
	$wp_customize->add_section('social_media_section', array(
	  'title' => __('Social Media Links', 'custom-theme'),
	  'priority' => 30,
	));
  
	// Create a setting for each social media link
	$wp_customize->add_setting('facebook_link', array(
	  'default' => '',
	  'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_setting('instagram_link', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	  ));
	$wp_customize->add_setting('twitter_link', array(
	  'default' => '',
	  'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_setting('youtube_link', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	  ));

  
	// Add a control for each social media link setting
	$wp_customize->add_control('facebook_link_control', array(
	  'label' => __('Facebook Link', 'custom-theme'),
	  'section' => 'social_media_section',
	  'settings' => 'facebook_link',
	  'type' => 'text',
	));
	$wp_customize->add_control('twitter_link_control', array(
	  'label' => __('Twitter Link', 'custom-theme'),
	  'section' => 'social_media_section',
	  'settings' => 'twitter_link',
	  'type' => 'text',
	));
	$wp_customize->add_control('instagram_link_control', array(
		'label' => __('Instagram Link', 'custom-theme'),
		'section' => 'social_media_section',
		'settings' => 'instagram_link',
		'type' => 'text',
	));
	$wp_customize->add_control('youtube_link_control', array(
		'label' => __('Youtube Link', 'custom-theme'),
		'section' => 'social_media_section',
		'settings' => 'youtube_link',
		'type' => 'text',
	));
  }
  add_action('customize_register', 'custom_theme_customize_register');

//   =========================================================================================





// For English To Nepali Date Converter
// function english_to_nepali($date) {
//     require_once ABSPATH . 'wp-content/plugins/nepali-date-converter/index.php';
//     return AD2BS($date);
// }

// function get_nepali_date($date) {
//     if (function_exists('eng_to_nep')) {
//         $nepali_date = eng_to_nep($date);
//         return $nepali_date['year'] . '-' . $nepali_date['month'] . '-' . $nepali_date['date'];
//     }
//     return $date;
// }

require get_template_directory() . '/inc/nepalidate.php';
function todayNepaliDay(){  
	$nepaliCalendar = new Nepali_Calendar();
	    return $nepaliCalendar->eng_to_nep(date('Y'),date('m'),date('d'));
}

function postNepaliDate($yy, $mm, $dd){
	$nepaliCalendar = new Nepali_Calendar();
	 return $nepaliCalendar->eng_to_nep($yy,$mm,$dd);
}





// COMPANIES INFORMATION
// About US Main Page Customization++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function company_info_customize($wp_customize)
{
	// Add a new section
	$wp_customize->add_section('company_info', array(
		'title'      => __('Add Company Information', 'NewNews'),
		'priority'   => 30,
	));

	// Add a text field
	$wp_customize->add_setting('owner_name', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('owner_name', array(
		'label'    => __('Add Owner Name', 'NewNews'),
		'section'  => 'company_info',
		'settings' => 'owner_name',
		'type'     => 'text',
	));

	// Add a text field
	$wp_customize->add_setting('darta_number', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('darta_number', array(
		'label'    => __('Add Company Dartaa Number', 'NewNews'),
		'section'  => 'company_info',
		'settings' => 'darta_number',
		'type'     => 'text',
	));

	// Add a text field
	$wp_customize->add_setting('phone_number', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('phone_number', array(
		'label'    => __('Add Company Phone Number', 'NewNews'),
		'section'  => 'company_info',
		'settings' => 'phone_number',
		'type'     => 'text',
	));

	// Add a text field
	$wp_customize->add_setting('email_address', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('email_address', array(
		'label'    => __('Add Company Email Address', 'NewNews'),
		'section'  => 'company_info',
		'settings' => 'email_address',
		'type'     => 'text',
	));

	// Add a text field
	$wp_customize->add_setting('pradhan_sampaadak', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('pradhan_sampaadak', array(
		'label'    => __('Add Pradhaan Sampaadak', 'NewNews'),
		'section'  => 'company_info',
		'settings' => 'pradhan_sampaadak',
		'type'     => 'text',
	));

	// Add a text field
	$wp_customize->add_setting('copyright', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('copyright', array(
		'label'    => __('Add Copyright Year Update', 'NewNews'),
		'section'  => 'company_info',
		'settings' => 'copyright',
		'type'     => 'text',
	));

}
add_action('customize_register', 'company_info_customize');