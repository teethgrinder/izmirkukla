
<?php
class Admin_Page_Controller extends Base_Controller {
	public $restful = true;
	function __construct()
	{
		parent::__construct();
		$this->filter('before', 'is_admin');
		$this->filter('before', 'csrf')->on('post')->except('photo_upload');
	}
	public function get_index()
	{
		$pages = Page::all();
		return View::make('admin.page.index')->with('pages',$pages);
	}
	public function get_edit($id = false)
	{
		if (! $id)
		{
			$page = new Page;
		}
		else $page = Page::find($id);
		$templates = scandir(path('app').'views/home/page/');
		unset($templates[0], $templates[1]);
		foreach ($templates as $key => $value) {
			$value = str_replace('.blade.php','',$value);
			$templates2[$value] = $value;
		}
		$templates = $templates2;
		return View::make('admin.page.edit')->with('page',$page)->with('templates',$templates);
	}
	public function post_edit($id = false)
	{	
		$rules = array(
				'title' => 'required|between:3,150',
				'slug' => 'required|unique:pages,slug,'.(int)$id,
			);
		$data = array(
				'title' => Input::get('title'),
				'slug' => Str::slug(Input::get('slug')),		
			);
		$validation = Validator::make($data, $rules);
		if ($validation->fails()) 
			return Redirect::to('admin/page/edit/'.$id)->with_errors($validation)->with_input();
		else
		{
			if (!$id) $page = new Page;
			else $page = Page::find($id);
			$page->title = Input::get('title');
			$page->slug = Str::slug(Input::get('slug'));
			$page->content = Input::get('content');
			$page->template = Input::get('template');
			$page->meta_title = Input::get('meta_title');
			$page->meta_keywords = Input::get('meta_keywords');
			$page->meta_description = Input::get('meta_description');
	
			if ($page->save())
			{
				Session::flash('success','Page enregistrÃ©e.');
				return Redirect::to('admin/page');
			}
		}
		Session::flash('error','Erreur lors de l\'enregistrement de la page.');
		return Redirect::to('admin/page');
	}	
	public function get_delete($id)
	{
		$affected = DB::table('pages')->where('id', '=', $id)->delete();
		return Redirect::to('admin/page');
	}
	public function post_photo_upload($page_id) {
		$path = path('base').'/public/img/page/' . (int)$page_id;
		$filename = uniqid() . '.jpg';
		Input::upload('file', $path, Input::file('file.name'));
		$success = Resizer::open( $path . '/' . Input::file('file.name') )
					->resize( 800 , 600 , 'auto' )
					->save( $path . '/' . $filename , 90 );
		File::delete( $path . '/' . Input::file('file.name'));
		die('{ "filelink": "/img/page/' . (int)$page_id . '/' . $filename . '" }');
	}
}
