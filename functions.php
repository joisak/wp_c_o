<?php
add_theme_support( 'post-thumbnails' );

function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyBWvB8y1b00Rkn1ZK0wBST-GZPrhKF2_js';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
