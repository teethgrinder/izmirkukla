<?php

class Admin_News_Controller extends Base_Controller{

    public $restful = true;

    function __construct()
    {
        parent::__construct();
        $this->filter('before', 'auth');
        $this->filter('before', 'csrf')->on('post');
    }


    public function get_index()
    {
        $news = News::all();
        return View::make('admin.news.index')->with('news',$news);
    }

    public function get_show($id=null)
    {
        $new = News::find($id);

        $images = $new->images;

        return View::make('admin.news.show')->with('new',$new)->with('images',$images);
    }

    public function get_add($id=false)
    {
        CreateNewsForm::forget_input();
        return Redirect::to_action('admin.news@add_one/'.$id);
    }



    public function get_add_one($slug=null)
    {


        CreateNewsForm::forget_input();

        return View::make('admin.news.add')->with('slug',$slug);

    }

    public function post_add_one()
    {
        $fields = array( 'media','published_at','slug');
        if( !CreateShowForm::is_valid($fields) )
        {
            return Redirect::back()->with_input()->with_errors( CreateNewsForm::$validation );
        }

        CreateNewsForm::save_input($fields);
        $new = new News;
        $new->media = CreateNewsForm::get('media');
        $new->published_at = CreateNewsForm::get('published_at');
        $new->slug = Str::slug(CreateNewsForm::get('media'));

        $new->save();
        $ext  = Input::file('picture');
        $ext = File::extension($ext['name']);

        $image = new Image();
        $image->name = uniqid().'.'.$ext;
        $image->title = Input::get('title');
        $image->new_id = $new->id;
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



    public function get_deleteshowimage($id)
    {

        $image = Image::find($id);
        $show = $image->show;
        $image->delete();
        return Redirect::to_action( 'admin.shows@show', array( $show->slug ))->with('success','Fotoğraf  Başarı ile eklendi');

    }

    public function get_edit($id)
    {
        CreateNewsForm::forget_input();
        $new = News::find($id);
        return View::make('admin.shows.edit')->with('new',$new)->with('id',$id);
    }

    public function put_edit($id)
    {
        {

            if( !CreateNewsForm::is_valid() )
            {
                return Redirect::back()->with_input()->with_errors( CreateNewsForm::$validation );
            }

            CreateNewsForm::save_input();
            $new = News::find($id);

            $new->media = CreateShowForm::get('media');
            $new->published_at= CreateShowForm::get('published_at');
            $show->slug = Str::slug(CreateShowForm::get('name'));

            if(!$new->is_valid())
            {
                return Redirect::back()->with_input()->with_errors($new->validation);
            }
            $new->save();
            $id=$new->id;

            return Redirect::to_action( 'admin.shows@show',array($new->id));
        }

    }
    public function get_delete($id)
    {

        $new = News::find($id);
        $new->delete();
        return Redirect::to_action( 'admin.news@index')->with('success','Oyun Başarı ile silindi');

    }
}