<?php

class Admin_Others_Controller extends Base_Controller{
    public $restful = true;

    function __construct()
    {
        parent::__construct();
        $this->filter('before', 'auth');
        $this->filter('before', 'csrf')->on('post');
    }
    public function get_index()
    {
        $others= Other::all();
        return View::make('admin.shows.others')->with('others',$others);
    }

    public function get_show($slug=null)
    {
        $other = Other::find($slug);
        return View::make('admin.shows.showother')->with('other',$other);
    }

    public function get_add_exhibition($slug=null)
    {


        CreateOtherForm::forget_input();

        return View::make('admin.shows.add_exhibition')->with('slug',$slug);

    }

    public function get_add_exhibition_en($slug=null)
    {


        CreateOtherForm::forget_input();

        return View::make('admin.shows.add_exhibition_en')->with('slug',$slug);

    }

    public function get_add_conference($slug=null)
    {


        CreateOtherForm::forget_input();

        return View::make('admin.shows.add_conference')->with('slug',$slug);

    }

    public function get_add_conference_en($slug=null)
    {


        CreateOtherForm::forget_input();

        return View::make('admin.shows.add_conference_en')->with('slug',$slug);

    }
    public function get_add_workshop($slug=null)
    {


        CreateOtherForm::forget_input();

        return View::make('admin.shows.add_workshop')->with('slug',$slug);

    }

    public function get_add_workshop_en($slug=null)
    {


        CreateOtherForm::forget_input();

        return View::make('admin.shows.add_workshop_en')->with('slug',$slug);

    }

    public function post_add_other()
    {
        $fields = array( 'name' , 'slug',  'actor', 'place','information', 'date' );
        if( !CreateOtherForm::is_valid($fields) )
        {
            return Redirect::back()->with_input()->with_errors( CreateOtherForm::$validation );
        }

        CreateOtherForm::save_input($fields);
        $other = new Other;
        $other->name = CreateOtherForm::get('name');
        $other->slug = Input::get('slug');
        $other->actor = CreateOtherForm::get('actor');
        $other->place = CreateOtherForm::get('place');
        $other->date = CreateOtherForm::get('date');
        $other->information = CreateOtherForm::get('information');

        
        $other->save();

        return Redirect::to_action( 'admin.others@index');
    }

    public function post_add_other_english()
    {
        $fields = array( 'name_english','slug',  'actor', 'place','information_english','date' );
        if( !CreateOtherForm::is_valid($fields) )
        {
            return Redirect::back()->with_input()->with_errors( CreateOtherForm::$validation );
        }

        CreateOtherForm::save_input($fields);
        $other = new Other;
        $other->name_english = CreateOtherForm::get('name_english');
        $other->slug = Input::get('slug');
        $other->actor = CreateOtherForm::get('actor');
        $other->place = CreateOtherForm::get('place');
        $other->date = CreateOtherForm::get('date');
        $other->information_english = CreateOtherForm::get('information_english');


        $other->save();

        return Redirect::to_action( 'admin.others@index');
    }
    
    
    public function get_edit($id)
	{
        CreateOtherForm::forget_input();
		$other = Other::find($id);
		return View::make('admin.others.edit')->with('other',$other);
	}
	
	public function put_edit($id)
	{	 
		{

        if( !CreateOtherForm::is_valid() )
        {
         return Redirect::back()->with_input()->with_errors( CreateOtherForm::$validation );
        }

		CreateOtherForm::save_input();
		$other = Other::find($id);

        $other->name = CreateOtherForm::get('name');
        $other->name_english = CreateOtherForm::get('name_english');
        $other->date = CreateOtherForm::get('date');
       
        $other->place = CreateOtherForm::get('place');
        $other->actor= CreateOtherForm::get('actor');
 
        $other->information = CreateOtherForm::get('information');
        $other->information_english = CreateOtherForm::get('information_english');
    


        if(!$other->is_valid())
        {
            return Redirect::back()->with_input()->with_errors($other->validation);
        }
		$other->save();
	 

        return Redirect::to_action( 'admin.others@index');
        }

    }

    public function get_delete($id)
    {

        $other = Other::find($id);
        $other->delete();
        return Redirect::to_action( 'admin.others@index')->with('success','Yazı Başarı ile silindi');

    }
}
