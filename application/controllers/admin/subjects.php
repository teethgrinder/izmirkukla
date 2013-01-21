<?php

class Admin_Subjects_Controller extends Base_Controller{

    public $restful = true;

    function __construct()
    {
        parent::__construct();
        $this->filter('before', 'auth');
        $this->filter('before', 'csrf')->on('post');
    }


    public function get_index()
    {

        $subjects = Subject::all();
        return View::make('admin.subjects.index')->with('subjects',$subjects);

    }

   public function get_show($slug=null)
    {
        $subject = Subject::find_by_slug($slug);
        if(!$subject){
		return Redirect::to_action('admin.subjects@add_one',array($slug));
	}

        return View::make('admin.subjects.show')->with('subject',$subject) ;

    }

    public function get_add($slug=null)
    {

        CreateSubjectForm::forget_input();
        return Redirect::to_action('admin.subjects@add_one',array($slug));

    }
    public function get_add_one($slug=null)
    {
        $page = DB::table('pages')->where('slug','=',$slug)->first();

        CreateSubjectForm::forget_input();
        return View::make('admin.subjects.add')->with('slug',$slug)->with('page',$page);


    }

    public function get_add_crew($slug=null)
    {
        $page = DB::table('pages')->where('slug','=',$slug)->first();

        CreateSubjectForm::forget_input();
        return View::make('admin.subjects.add_crew')->with('slug',$slug)->with('page',$page);


    }

    public function post_add_one($slug)
    {
        $fields = array( 'title', 'content' , 'slug' );

        if( !CreateSubjectForm::is_valid($fields) )
        {
            return Redirect::back()->with_input()->with_errors( CreateSubjectForm::$validation );
        }
        CreateSubjectForm::save_input($fields);


        $subject = new Subject;
        $subject->title= CreateSubjectForm::get('title');
        $subject->content= CreateSubjectForm::get('content');
        $page = DB::table('pages')->where('slug','=',$slug)->first();
        if($page){
        $subject->page_id= $page->id;
        }
        $subject->slug = $slug;

        if(!$subject->is_valid())
        {
            return Redirect::back()->with_input()->with_errors($subject->validation);
        }

        $subject->save();


        // redirect to review page
        return Redirect::to_action( 'admin.subjects@index');
    }

    public function get_index_photo($id=null)
    {

        $group = Group::find($id);
        $images = $group->images;
        return View::make('admin.groups.index_photo')->with('group',$group)->with('images',$images);

    }
    public function get_show_photos($id=null)
    {

        $group = Group::find($id);
        $images = $group->images;
        return View::make('admin.groups.index_photo')->with('group',$group)->with('images',$images);

    }

    public function get_add_photo($id=null)
    {

        $group = Group::find($id);

        if (!isset($group))
        {
            return Redirect::to_action( 'admin.groups@index');
        }

        return View::make('admin.groups.add_photo')->with('id',$id)->with('group',$group);

    }

    public function post_add_photo($id)
    {
        $group = Group::find($id);

        if (!isset($group))
        {
            return Redirect::to_action( 'admin.groups@index');
        }

        $ext  = Input::file('picture');
        $ext = File::extension($ext['name']);

        $image = new Image();
        $image->name = uniqid().'.'.$ext;
        $image->title = Input::get('title');
        $image->group_id = $group->id;
        $image->save();

        $validation = Validator::make(Input::all(), array('file' => 'mimes:jpg,gif,png'));
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
        File::delete($path.$image->name);
        return Redirect::to_action( 'showgroup', array( $id ))->with('success','Fotoğraf  Başarı ile eklendi');

    }

    public function get_delete_photo($id)
    {

        $image = Image::find($id);
        $image->delete();

        return Redirect::to_action( 'admin.groups@show',array($group->id))->with('success','Fotoğraf Başarı ile silindi');

    }
    /* return Redirect::to_action('admin.groups@add_two');
     }
     public function get_add_two(){

         return View::make('admin.groups.add_info');
     }
 /*	public function post_add_two()
     {
             $fields = array( 'information', );

             if( !CreateGroupForm::is_valid( $fields ))
             {
                     return Redirect::back()->with_input()->with_errors( CreateGroupForm::$validation );
             }

             // save input to session
         CreateGroupForm::save_input( $fields );

         $group = new Group;
         $group->name= CreateGroupForm::get('name');
         $group->country = CreateGroupForm::get('country');
         $group->information = CreateGroupForm::get('information');
         if(!$group->is_valid())
         {
     return Redirect::back()->with_input()->with_errors($group->validation);
         }
         $group->save();

         $id = $group->id;

             // redirect to review page
             return Redirect::to_action( 'showgroup', array( $id ));
     }
  /*	public function get_review($id)
     {	$group = Group::find($id);
    return View::make('admin.groups.simple_example_review')->with('id',$id)->with('group',$group);
     }*/



    public function get_edit($slug=null)
    {
        $subject = Subject::find_by_slug($slug);

        return View::make('admin.subjects.edit')->with('subject',$subject) ;

    }

    public function put_edit($id=false)
    {
        {
            if( !CreateSubjectForm::is_valid() )
            {
                return Redirect::back()->with_input()->with_errors( CreateSubjectForm::$validation );
            }

            CreateSubjectForm::save_input();

            $subject = Subject::find($id);
            $subject-> title = CreateSubjectForm::get( 'title' );
            $subject-> content = CreateSubjectForm::get( 'content' );


            if(!$subject->is_valid())
            {
                return Redirect::back()->with_input()->with_errors($subject->validation);
            }

            $subject->save();


            return Redirect::to_action( 'admin.subjects@index');
        }

    }

    public function get_delete($id)
    {

        $subject = Subject::find($id);
        $subject->delete();
        return Redirect::to_action( 'admin.subjects@index')->with('success','Yazı Başarı ile silindi');

    }
}
