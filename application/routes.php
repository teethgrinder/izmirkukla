<?php
Route::controller(array('home.user','home.pages','home.groups','home.showings','home.shows',
                  'admin.dashboard','admin.groups','admin.shows', 'admin.theaters', 'admin.showings','admin.subjects' ,'admin.others'));
//views home
Route::get('/', 'home.pages@homepage');
Route::any('login','home.users@login');
Route::any('groups','home.groups@index');

Route::get('/(:any)', array('as' => 'show', 'uses' => 'home.shows@show'));
Route::get('/(:any)', array('as' => 'view', 'uses' => 'home.pages@view'));
Route::get('shows', array('as' => 'shows', 'uses' => 'home.shows@index'));
Route::get('showings', array('as' => 'schedule', 'uses' => 'home.showings@index'));
//admin.groups 
/*Route::any('groupslist', 'admin.groups@index');
Route::any('newgroup', 'admin.groups@add');
Route::any('photogroup/(:any)',	'admin.groups@add_photo');
Route::any('editgroup/(:any)',	'admin.groups@edit');
Route::get('deletegroup/(:any)',	'admin.groups@delete');
Route::get('deletegroupimage/(:any)',	'admin.groups@delete_photo');*/
Route::any('editgroup/(:any)',	'admin.groups@edit');
Route::any('showgroup/(:any)', 'admin.groups@show');
//admin.shows
/*Route::any('showslist', 'admin.shows@index');
Route::any('newshow/(:num)', 'admin.shows@add');
Route::any('photoshowgroup/(:any)',	'admin.shows@add_photo');
Route::any('show/(:any)', 'admin.shows@show');
Route::any('editshow/(:any)',	'admin.shows@edit');
Route::get('deleteshow/(:any)',	'admin.shows@delete');
Route::get('deleteshowimage/(:any)','admin.shows@delete_photo');
*/
//admin.theaters
Route::any('theaters', 'admin.theaters@index'); 
Route::any('newtheater', 'admin.theaters@add');
//admin.program

Route::any('programs', 'admin.showings@index');


 
/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});
