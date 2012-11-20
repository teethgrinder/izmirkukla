<?php
class Pages_Controller extends Base_Controller {
	public $restful = true;
	function __construct()
	{
		parent::__construct();
		$this->filter('before', 'csrf')->on('post');
	}

public function get_home()
	{
		
			return $this->get_view(1);
	}
	 
	
	public function get_view($slug)
	{
		if (is_numeric($slug)) // called via ID
		{
			$page = Page::find($slug);
		}
		else
		{
			$page = Page::where('slug', '=', $slug)->first();
		}
		if (! is_object($page))
		{
			return Response::error('404'); 
		}	
		Section::inject('title', $page->meta_title);
//		$comments = Comment::where('publish', '=', '1')->get();
	 
		return View::make('home')->with('page', $page);
	}
	
}
