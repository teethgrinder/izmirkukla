<?php
class Home_Page_Controller extends Base_Controller {
	public $restful = true;
	function __construct()
	{
		parent::__construct();
		$this->filter('before', 'csrf')->on('post');
	}
	public function get_homepage()
	{
		$page = DB::table('pages')->where('template', '=', 'homepage')->first();
		//$types = Type::lists('title', 'id');
		Section::inject('title', $page->meta_title);
		Section::inject('description', $page->meta_description);
		Section::inject('keywords', $page->meta_keywords);
		
		return View::make('home.page.homepage')
						->with('page', $page);
						//->with('types', $types);
	}
	public function get_view($slug)
	{
		$page = DB::table('pages')->where('slug', '=', $slug)->first();
		if (! is_object($page))
			return Response::error('404'); 
		Section::inject('title', $page->meta_title);
		if (is_file(path('app').'views/home/page/'.$page->template.'.blade.php'))
		{
			return View::make('home.page.'.$page->template)->with('page', $page);
		}
		else
		{
			if (is_file(path('app').'views/home/page/default.blade.php'))
			{
				return View::make('home.page.default')->with('page', $page);
			}
			else
			{
				return Response::error('404'); 	
			}
		}
		
		
	}
}
