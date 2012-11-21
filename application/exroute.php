
RAWFORKNEW
<?php
Route::get('/', 'home.page@homepage');
Route::get('admin', 'admin.user@dashboard');
Route::controller(array(
	/* ADMIN */
	'admin.page',
	'admin.post',
	'admin.configuration',
	'admin.user',
	'admin.vente',
	'admin.location',
	'admin.search',
	'admin.purchaser',
	'admin.seller',
	));
/* City autocomplete */
Route::get('city/autocomplete', 'home.city@autocomplete');
/* # CUSTOM FRONT ROUTE # */
Route::post('contact', 'home.contact@send');
Route::get('vente', 'home.vente@index');
Route::get('vente/(:any)-(:num)', 'home.vente@view'); // dÃ©tails
Route::post('vente/order', 'home.vente@order');
Route::get('vente/(:any)', 'home.vente@type'); // catÃ©gories
Route::get('location', 'home.location@index');
Route::post('newsletter', 'home.newsletter@index'); // subsribe and unsubscribe newslettter
Route::get('search', 'home.search@index');
Route::get('immobilier', 'home.city@ventes');
Route::get('immobilier/(:any)', 'home.city@ventes_list');
/* # EOF CUSTOM FRONT ROUTE # */
Route::get('(:any)', array('uses' => 'home.page@view'));
/*  FILTERS */
Route::filter('before', function()
{	
	//   Maintenance mode
	$a = Request::route();
	if (!isset($a->parameters[0])) $a->parameters[0] = '';
	if ($a->uri != 'admin' && $a->parameters[0] != 'login')
	{
		if (!Eagle::check() OR !Eagle::is_admin() )
		{
			if (Configuration::get('maintenance_mode') == 1) return Response::error('503'); 
		}
			
	}
});
Route::filter('is_admin', function()
{
	Log::method(Request::route()->method.'|'. Request::route()->controller.'|'. Request::route()->controller_action);
	if (!Eagle::check() OR !Eagle::is_admin())
		return Redirect::to('admin/user/login');
	if (! Eagle::is_super_admin())
	{
		$access = Eagle::has_access();
		if (! $access)
			return Response::error('404'); 
	}
});
Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});
/* LISTENER */
Event::listen('404', function() { return Response::error('404'); });
Event::listen('500', function() { return Response::error('500'); });
