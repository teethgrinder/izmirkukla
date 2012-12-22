<?php

class Admin_Shows_Controller extends Base_Controller{
		
	public $restful = true;
	
	public function get_index()
	{
		$shows = Show::all();
		return View::make('admin.shows.index')->with('shows',$shows);
	}

	public function get_show($id)
	{	
		$show = Show::find($id);
		return View::make('admin.shows.show')->with('show',$show);
	}
	
	public function get_add()
	{
		return View::make('admin.shows.add');
	}
	
	public function post_add()
	{
    if( !CreateShowForm::is_valid() )
    {		
     return Redirect::back()->with_input()->with_errors( CreateShowForm::$validation );
    }
		CreateShowForm::save_input();
		$show = new Show;
		$show-> name = CreateShowForm::get( 'name' );
		$show-> country = CreateShowForm::get( 'country' );
		$show->save();
		$id=$show->id;
    return Redirect::to_action('admin.shows@review',array($id));
	}

 	public function get_review($id)
	{	 
   return View::make('admin.shows.simple_example_review')->with('id',$id);
	}
 
	public function get_edit($id)
	{
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
		$show-> name = CreateShowForm::get( 'name' );
		$show-> country = CreateShowForm::get( 'country' );
		$show->save();
		$id=$show->id;
 
    return Redirect::to_action('admin.shows@review',array($id));
	}
	}
	
	public function get_delete($id)
	{
		$show = Show::find($id);
		$show->delete();
	}
}
