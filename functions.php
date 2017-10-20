<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
add_filter('upload_mimes', 'cc_mime_types');


function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyBWvB8y1b00Rkn1ZK0wBST-GZPrhKF2_js';

	return $api;

}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
