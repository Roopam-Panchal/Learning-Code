//Replace the default name of wordpress by the current admin and domain name 
==============================================================================
add_filter( 'wp_mail_from', 'wpse_new_mail_from' );     
function wpse_new_mail_from( $original_email_from ) {
	$email = get_option('admin_email');
    return $email; // Edit it with your email address
}

add_filter('wp_mail_from_name', 'wpse_new_mail_from_name');
function wpse_new_mail_from_name( $original_email_from ) {
    return 'PRtech.com'; // Edit it with your/company name
}
