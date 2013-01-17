<?php

class Admin_Showings_Controller extends Base_Controller{

    public $restful = true;

    function __construct()
    {
        parent::__construct();
        $this->filter('before', 'auth');
        $this->filter('before', 'csrf')->on('post');
    }

    public function get_index()
    {

        $showings = Showing::all();
        if(!($showings)){
            return Redirect::to_action('admin.showings@add');
        }

        return View::make('admin.showings.index') ;

    }



    public function get_add()
    {

        return View::make('admin.showings.add');
    }

    public function post_add()
    {

        $fields = array( 'theater_id','show_id', 'price','performance_date','start_time');

        if( !CreateShowingForm::is_valid($fields) )
        {
            return Redirect::back()->with_input()->with_errors( CreateShowingForm::$validation );
        }
        CreateShowingForm::save_input($fields);


        $showing = new Showing;
        $showing->theater_id= CreateShowingForm::get('theater_id');
        $showing->show_id= CreateShowingForm::get('show_id');
        //$showing->slug = CreateShowingForm::get('slug');
        $showing->price = CreateShowingForm::get('price');

        $showing->performance_date = Input::get('performance_date');
		$date_showing = $showing->performance_date;
		$showing->date_calendar = $showing->query_date;
        $showing->start_time = Input::get('start_time');
        if(!$showing->is_valid())
        {
            return Redirect::back()->with_input()->with_errors($showing->validation);
        }

        $showing->save();
        $id = $showing->id;

        // redirect to review page
        return Redirect::to_action( 'admin.showings@index');
    }

    public function get_show($id=false)
    {
        $showing = Showing::find($id);
        $show = $showing->show;
        $theater = $showing->theater;
        return View::make('admin.showings.show')->with('showing',$showing)->with('show',$show)->with('theater',$theater);

    }
    public function get_edit($id)
    {
        $showing = Showing::find($id);
        return View::make('admin.showings.edit')->with('showing',$showing)->with('id',$id);
    }

    public function put_edit($id=false)
    {

        {
        if( !CreateShowingForm::is_valid() )
        {
            return Redirect::back()->with_input()->with_errors( CreateShowingForm::$validation );
        }

        CreateShowingForm::save_input();

        $showing = Showing::find($id);
        $showing->theater_id= CreateShowingForm::get('theater_id');
        $showing->show_id= CreateShowingForm::get('show_id');
        $showing->price = CreateShowingForm::get('price');
        $showing->performance_date = Input::get('performance_date');
        $showing->start_time = Input::get('start_time');
        if(!$showing->is_valid())
        {
            return Redirect::back()->with_input()->with_errors($showing->validation);
        }

        $showing->save();

        return Redirect::to_action('admin.showings@index');
        }

    }

    public function get_delete($id)
    {

        $showing = Showing::find($id);
        $showing->delete();
        return Redirect::to_action( 'admin.showings@index')->with('success','Gösteri başarı ile kaldırıldı');

    }
}
