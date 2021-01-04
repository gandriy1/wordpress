<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package taher
 */


function disable_wp_emojicons() {

	// all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  
	// filter to remove TinyMCE emojis
	//add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  }
add_action( 'init', 'disable_wp_emojicons' );

/* use subfolder for custom slug template pages
function sh_custom_page_template_path( $page_template )
{
    if ( is_page( 'my-custom-page-slug' ) ) {
        $page_template = 'pathto/custom-page-template.php';
    }
    return 'page-templates/' .$page_template;
}
add_filter( 'page_template', 'sh_custom_page_template_path' );
*/

function sh_get_image_url($imageName) {
	return get_stylesheet_directory_uri() .sh_var('sh_image_dir_relative') .$imageName;
}

//error_log( "locations - " .json_encode($args));

function sh_query_vars( $qvars ) {
    $qvars[] = 'service';
    return $qvars;
}
add_filter( 'query_vars', 'sh_query_vars' );

function sh_send_email_to_admin() {
    $name = $_POST['sh_name'];
    $email = $_POST['sh_email'];
    $subject = 'Contact Us: ' .$_POST['sh_subject'];
    $message = $_POST['sh_message'];
	$admin_email = get_option('admin_email');

	$body = 'Email from ' .$email .' with subject "' .$subject .'" : ' .$message;

	wp_mail($admin_email, $subject, $body);

	$redirect_link = add_query_arg('emailSent', true, get_permalink( get_page_by_title( 'Contact Us' ) ) );
	wp_redirect( $redirect_link );
	
	exit;
	//
	//$_GET['custom'] = 'custom';

	//echo $name;

    /**
     * At this point, $_GET/$_POST variable are available
     *
     * We can do our normal processing here
     */ 

    // Sanitize the POST field
    // Generate email content
    // Send to appropriate email
}
add_action( 'admin_post_nopriv_contact_us_form', 'sh_send_email_to_admin' );