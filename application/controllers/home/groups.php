<?php

class Home_Groups_Controller extends Base_Controller{
		
	public $restful = true;
	
	public function get_index()
	{	$images = DB::table('images')->order_by('id','desc')->take(8)->get();
		$groups = Group::all();
		return View::make('home.groups.index')->with('groups',$groups)->with('images',$images); 
	}

	public function get_show($slug){
	}
	
	public function get_add()
	{
	}
	
	public function post_add()
	{
	}
	public function get_edit($id)
	{
	}
	
	public function put_edit($id)
	{
	}
	
	public function get_delete($id)
	{
	}
}
