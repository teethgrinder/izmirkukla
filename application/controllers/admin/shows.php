<?php

class Admin_Shows_Controller extends Base_Controller{
		
	public $restful = true;
	
	function __construct()
	{
		parent::__construct();
		$this->filter('before', 'auth');
		$this->filter('before', 'csrf')->on('post');
	}

	
	public function get_index()
	{
		$shows = Show::all();
		return View::make('admin.shows.index')->with('shows',$shows);
	}

    public function get_show($slug=null)
    {
        $show = Show::find_by_slug($slug);

        $group = $show->group;
        $images = $show->images;

        return View::make('admin.shows.show')->with('show',$show)->with('images',$images)->with('group',$group);
    }

	public function get_add($id=false)
	{ 
		CreateShowForm::forget_input();
		return Redirect::to_action('admin.shows@add_one/'.$id);
	}
    public function get_show_photos($id=null)
    {

        $show = Show::find($id);
        $images = $group->images;
        return View::make('admin.shows.index_photo')->with('group',$group)->with('images',$images);

    }

 
	public function get_add_one($slug=null)
	{


		CreateShowForm::forget_input();
 
		return View::make('admin.shows.add')->with('slug',$slug);
		
	}

	public function post_add_one()
	{ 
		$fields = array( 'name','name_english','slug',  'age', 'language','language_english','duration','information','information_english' );
        if( !CreateShowForm::is_valid($fields) )
        {
         return Redirect::back()->with_input()->with_errors( CreateShowForm::$validation );
        }

		CreateShowForm::save_input($fields);
		$show = new Show;
		$show->name = CreateShowForm::get('name');
        $show->name_english = CreateShowForm::get('name_english');
        $show->slug = Str::slug(CreateShowForm::get('name'));
		$show->age = CreateShowForm::get('age');
		$show->language = CreateShowForm::get('language');
		$show->language_english = CreateShowForm::get('language_english');
        $show->duration = CreateShowForm::get('duration');
        $show->information = CreateShowForm::get('information');
        $show->information_english = CreateShowForm::get('information_english');

		$show->group_id = Input::get('group_id');
        $group = Group::find($show->group_id);
        $show->country = $group->country;
        $show->country_english = $group->country_english;
		$show->save();

		return Redirect::to_action( 'admin.shows@index');
	}



    public function get_add_photo($id=null)
    {

        $show = Show::find($id);

        if (!isset($show))
        {
            return Redirect::to_action( 'admin.groups@index');
        }

        return View::make('admin.shows.add_photo')->with('id',$id)->with('show',$show);

    }

    public function post_add_photo($id)
    {
        $show = Show::find($id);


        if (!isset($show))
        {
            return Redirect::to_action( 'admin.groups@index');
        }

        $ext  = Input::file('picture');
        $ext = File::extension($ext['name']);

        $image = new Image();
        $image->name = uniqid().'.'.$ext;
        $image->title = Input::get('title');
        $image->show_id = $show->id;
        $image->save();

        $validation = Validator::make(Input::all(), array('file' => 'mimes:jpg,gif,png,jpeg'));
        if ($validation->fails())
            die('{"error":true, "message" : "Dosya jpg, gif ou png formatına uymalıdır"}');
        $validation = Validator::make(Input::all(), array('file' => 'image|max:6144'));
        if ($validation->fails())
            die('{"error":true, "message" : "Dosya en fazla 5 mb boyutunda olmalıdır."}');

        $path = 'public/img/uploads/'.$image->id.'/';
        Input::upload('picture',$path,  $image->name);

        $big = Resizer::open( $path.$image->name)
            ->resize( 800 , 600 , 'auto' )
            ->save( $path.'large-'.$image->name , 90 );
        // Create a thumb
        $thumb = Resizer::open( $path.$image->name )
            ->resize( 168 , 128 , 'crop' )
            ->save( $path.'thumb-'.$image->name , 90 );

        $page = Resizer::open( $path.$image->name )
            ->resize( 200 , 235 , 'crop' )
            ->save( $path.'page-'.$image->name , 90 );
        File::delete($path.$image->name);
        return Redirect::to_action( 'admin.shows@show', array( $show->slug ))->with('success','Fotoğraf  Başarı ile eklendi');

    }

    public function get_deleteshowimage($id)
    {

        $image = Image::find($id);
        $show = $image->show;
        $image->delete();
        return Redirect::to_action( 'admin.shows@show', array( $show->slug ))->with('success','Fotoğraf  Başarı ile eklendi');

    }

	public function get_edit($id)
	{
        CreateShowForm::forget_input();
		$show = Show::find($id);
		return View::make('admin.shows.edit')->with('show',$show)->with('id',$id);
	}
	
	public function put_edit($id)
	{	 
		{

        if( !CreateShowForm::is_valid() )
        {
         return Redirect::back()->with_input()->with_errors( CreateShowForm::$validation );
        }

		CreateShowForm::save_input();
		$show = Show::find($id);

        $show->name = CreateShowForm::get('name');
        $show->name_english = CreateShowForm::get('name_english');
        $show->slug = Str::slug(CreateShowForm::get('name'));
        $show->age = CreateShowForm::get('age');
        $show->language = CreateShowForm::get('language');
        $show->language_english = CreateShowForm::get('language_english');
        $show->duration = CreateShowForm::get('duration');
        $show->information = CreateShowForm::get('information');
        $show->information_english = CreateShowForm::get('information_english');
        if(!$show->is_valid())
        {
            return Redirect::back()->with_input()->with_errors($show->validation);
        }
		$show->save();
		$id=$show->id;

        return Redirect::to_action( 'admin.shows@show',array($show->id));
        }

    }
    public function get_delete($id)
    {

        $show = Show::find($id);
        $show->delete();
        return Redirect::to_action( 'admin.groups@index')->with('success','Oyun Başarı ile silindi');

    }
}
