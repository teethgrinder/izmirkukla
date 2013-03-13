<?php

class Admin_Theaters_Controller extends Base_Controller
{
	public $restful = true;
	
	function __construct()
	{
		parent::__construct();
		$this->filter('before', 'auth');
		$this->filter('before', 'csrf')->on('post');
	}

	
	public function get_index()
	{
		$theaters = Theater::all();
		return View::make('admin.theaters.index')->with('theaters',$theaters);
	}
	
	public function get_show($id)
	{
	}
	
	public function get_add()
	{
		CreateTheaterForm::forget_input();
 
		return Redirect::to_action('admin.theaters@add_one');
	}
	
	public function get_add_one()
	{
		CreateTheaterForm::forget_input();
 
		return View::make('admin.theaters.add');
	}
	
	public function post_add_one()
	{
		$fields = array( 'name',  'adress'  );
    if( !CreateTheaterForm::is_valid($fields) )
    {		
     return Redirect::back()->with_input()->with_errors( CreateTheaterForm::$validation );
    }
		CreateTheaterForm::save_input($fields);
		$theater = new Theater;
		$theater->name = CreateTheaterForm::get('name');
		$theater->adress = CreateTheaterForm::get('adress');
 
		$theater->save();
		return Redirect::to_action( 'theaters')->with('message','Salon Eklendi');
		
		
	}

    public function get_edit($id)
    {
        $theater = Theater::find($id);
        return View::make('admin.theaters.edit')->with('theater',$theater);
    }

    public function put_edit($id=false)
    {
        {
            if( !CreateTheaterForm::is_valid() )
            {
                return Redirect::back()->with_input()->with_errors( CreateTheaterForm::$validation );
            }

            CreateTheaterForm::save_input();

            $theater = Theater::find($id);
            $theater-> name = CreateTheaterForm::get( 'name' );
            $theater-> adress = CreateTheaterForm::get( 'adress' );


            if(!$theater->is_valid())
            {
                return Redirect::back()->with_input()->with_errors($theater->validation);
            }

            $theater->save();


            return Redirect::to_action( 'admin.theaters@index');
        }

    }
	
	public function get_delete($id)
	{
        $theater = Theater::find($id);
        $theater->delete();
        return Redirect::to_action( 'admin.theaters@index')->with('success','Salon Başarı ile silindi');
	}
}
