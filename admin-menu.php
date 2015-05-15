<?php

/*
	Plugin Name: Add Custom Post Type Slugs to Admin Body Class
	Plugin URI: http://aarontgrogg.com/2012/02/15/wordpress-plugin-add-custom-post-type-to-admin-body-class/
	Description: Add additional `body` classes to reflect which Admin editorial page you are viewing and which Post type you are editing.
	Version: 1.3
	Author: Aaron T. Grogg
	Author URI: http://aarontgrogg.com/
	License: GPLv2 or later
*/

	// this only applies for admin pages
	if ( is_admin() ) {

		//	Add deconstructed URI as <body> classes
		function add_to_admin_body_class($classes) {
			// get the global post variable
			global $post;
			// make sure we're on a posts list page
			if ( $post && $post->ID ) {
				// instantiate, should be overwritten
				$mode = '';
				// get the current page's URI (the part /after/ your domain name)
				$uri = $_SERVER["REQUEST_URI"];
				// get the post type from WP
				$post_type = get_post_type($post->ID);
				// set the $mode variable to reflect the editorial /list/ page...
				if (strstr($uri,'edit.php')) {
					$mode = 'edit-list-';
				}
				// or the actual editor page
				if (strstr($uri,'post.php')) {
					$mode = 'edit-page-';
				}
				// append our new mode/post_type class to any existing classes
				$classes .= $mode . $post_type;
			}
			// and send them back to WP
			return $classes;
		}

		// add this filter to the admin_body_class hook
		add_filter('admin_body_class', 'add_to_admin_body_class');

	}

?>
