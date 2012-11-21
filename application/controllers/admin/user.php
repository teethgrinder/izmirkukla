<?php
class User_Controller extends Base_Controller {
	public $restful = true;
	function __construct()
	{
		parent::__construct();
		$this->filter('before', 'is_admin')->on('dashboard');
		//$this->filter('before', 'csrf')->on('post');
	}
	public function get_login()
	{  
		return View::make('login');	
	}
	public function post_login() 
	{
		$userdata = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
			);
		
		if (Auth::attempt($userdata)) 
		{if (Auth::user()->is_superadmin == 1){
				return Redirect::to('bigdashboard');
			}
			if (Auth::user()->is_admin == 1){
				return Redirect::to('dashboard');
			}else{
				return Redirect::to('/');
				
				}
		}
		else
		{
			Redirect::back();
		}
	}
	public function get_logout() 
	{
		Auth::logout();
		return Redirect::to('/');
	}
	public function get_dashboard()
	{
	return View::make('dashboard');	
	}
}
