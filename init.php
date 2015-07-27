<?php defined('SYSPATH') or die('No direct script access.');
/**
* Autoload page example
**/
// Route::set('page', '<slug>', array(
// 		// 'slug'	=> 'my_page', // restrict a specific url
// 		// 'slug'	=> '.*', // for any extension in url
// 		// 'slug'	=> '[a-zA-Z0-9_/]+', // for subfolder
// 	))
// 	->defaults(array(
// 		'controller'	=> 'Page',
// 		'action'		=> 'read',
// 	));
	
/**
* Welcome Kistune route
**/
Route::set('welcome', '(<controller>(/<action>(/<slug>)))')
	->defaults(array(
		'controller'	=> 'Page',
		'action'		=> 'read',
		'slug'			=> 'welcome',
	));
