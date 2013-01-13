<?php

class Admin_Groups_Controller extends Base_Controller{
		
	public $restful = true;
	
	function __construct()
	{
		parent::__construct();
		$this->filter('before', 'csrf')->on('post');
	}

	
	public function get_index()
	{

		$groups = Group::all();
		return View::make('admin.groups.index')->with('groups',$groups);

    }

	public function get_show($id)
	{	
		$group = Group::find($id);

		$shows = $group->shows;
		return View::make('admin.groups.show')->with('group',$group)->with('shows',$shows);

    }
	
	public function get_add()
	{

        CreateGroupForm::forget_input();
		return Redirect::to_action('admin.groups@add_one');

    }
	public function get_add_one()
	{

        CreateGroupForm::forget_input();
		return View::make('admin.groups.add');

    }
	public function post_add_one()
	{ 
		$fields = array( 'name',  'country','information' );

        if( !CreateGroupForm::is_valid($fields) )
        {
            return Redirect::back()->with_input()->with_errors( CreateGroupForm::$validation );
        }
            CreateGroupForm::save_input($fields);
 
		
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
    public function get_add_photo($id)
    {

        $group = Group::find($id);
        return View::make('admin.groups.add_photo')->with('group',$group)->with('id',$id);

    }

    public function post_add_photo($id)
    {

        $group = Group::find($id);
        return View::make('admin.groups.photo')->with('group',$group)->with('id',$id);

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
 
	public function get_edit($id)
	{
		$group = Group::find($id);
		return View::make('admin.groups.edit')->with('group',$group)->with('id',$id);
	}
	
	public function put_edit($id=false)
	{	 
		{
        if( !CreateGroupForm::is_valid() )
        {
            return Redirect::back()->with_input()->with_errors( CreateGroupForm::$validation );
        }

		CreateGroupForm::save_input();

		$group = Group::find($id);	
		$group-> name = CreateGroupForm::get( 'name' );
		$group-> country = CreateGroupForm::get( 'country' );
		$group-> information = CreateGroupForm::get( 'information' );
 
		if(!$group->is_valid())
		{
            return Redirect::back()->with_input()->with_errors($group->validation);
		}

        $group->save();
		$id=$group->id;
 
        return Redirect::to_action( 'showgroup', array( $id ));
        }

    }
	
	public function get_delete($id)
	{

		$group = Group::find($id);
		$group->delete();
		return Redirect::to_action( 'admin.groups@index')->with('success','Grup Başarı ile silindi');

	}
}
