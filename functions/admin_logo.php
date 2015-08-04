<?php

// Custom Login logo
function custom_login_logo() { 
	$template_directory = get_bloginfo('template_directory');
?>
    <style type="text/css">
		body.login div#login h1 a {
			background-image: url("<?php echo $template_directory ?>/images/favicons/apple-touch-icon-120x120.png");
			display: block;
			background-size: contain;
		}
	</style>
<?php
}

// Custom login logo url
function custom_login_logo_url() {
    return get_bloginfo( 'url' );
}
	
// Add favicons...
function add_favicon() {
  	$favicon_url = get_stylesheet_directory_uri() . '/images/favicons/favicon.ico';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}