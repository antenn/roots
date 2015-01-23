<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/*
*  Allow SVG uploads
*/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/*
*  Options page
*/

if( function_exists('acf_add_options_page') )
{

	acf_add_options_page(array(
		'page_title' 	=> 'Üldseaded',
		'menu_title'	=> 'seaded',
		'menu_slug' 	=> 'general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
}