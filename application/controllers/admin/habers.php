<?php

class Admin_Habers_Controller extends Base_Controller{

    public $restful = true;

    function __construct()
    {
        parent::__construct();
        $this->filter('before', 'auth');
        $this->filter('before', 'csrf')->on('post');
    }


    public function get_index()
    {
        $habers = Haber::all();
        return View::make('admin.habers.index')->with('habers',$habers);
    }

    public function get_show($id=null)
    {
        $haber = Haber::find($id);
        $images = $haber->images;

        return View::make('admin.habers.show')->with('haber',$haber)->with('images',$images);
    }

    public function get_add($id=false)
    {
        CreateHabersForm::forget_input();
        return Redirect::to_action('admin.habers@add_one/'.$id);
    }



    public function get_add_one($slug=null)
    {


        CreateHabersForm::forget_input();

        return View::make('admin.habers.add')->with('slug',$slug);

    }

    public function post_add_one()
    {
        $fields = array( 'media','published_at');
        if( !CreateHabersForm::is_valid($fields) )
        {
            return Redirect::back()->with_input()->with_errors( CreateHabersForm::$validation );
        }

        CreateHabersForm::save_input($fields);
        $haber = new Haber;
        $haber->media = CreateHabersForm::get('media');
        $haber->published_at = CreateHabersForm::get('published_at');
        $haber->slug = Str::slug(CreateHabersForm::get('media'));

        $haber->save();
        $ext  = Input::file('picture');
        $ext = File::extension($ext['name']);

        $image = new Image();
        $image->name = uniqid().'.'.$ext;
        $image->title = Input::get('tag');

        $image->haber_id = $haber->id;
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


        return Redirect::to_action( 'admin.habers@index');
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
        CreateHabersForm::forget_input();
        $haber = Haber::find($id);
        return View::make('admin.shows.edit')->with('new',$haber)->with('id',$id);
    }

    public function put_edit($id)
    {
        {

            if( !CreateHabersForm::is_valid() )
            {
                return Redirect::back()->with_input()->with_errors( CreateHabersForm::$validation );
            }

            CreateHabersForm::save_input();
            $haber = Haber::find($id);

            $haber->media = CreateShowForm::get('media');
            $haber->published_at= CreateShowForm::get('published_at');
            $show->slug = Str::slug(CreateShowForm::get('name'));

            if(!$haber->is_valid())
            {
                return Redirect::back()->with_input()->with_errors($haber->validation);
            }
            $haber->save();
            $id=$haber->id;

            return Redirect::to_action( 'admin.shows@show',array($haber->id));
        }

    }
    public function get_delete($id)
    {

        $haber = Haber::find($id);
        $haber->delete();
        return Redirect::to_action( 'admin.habers@index')->with('success','Oyun Başarı ile silindi');

    }
}