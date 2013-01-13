<?php

class Home_Shows_Controller extends Base_Controller
{
	public $restful = true;
	
	public function get_index()
	{
        $shows = Show::all();
        if(!($shows)){
            return Redirect::to_action('home.pages@homepage');
        }
        foreach ($shows as $show) {
        $group = $show->group;
        }
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->get();
        return View::make('home.shows.index')->with('shows',$shows)->with('images',$images)->with('group',$group);
	}
	
	public function get_show($slug=null)
	{
        $show = Show::find_by_slug($slug);
			//	$date1 = Date::forge('06-03-2013');
			//	$date2 = Date::forge('07-04-2013');
			//	$diff = Date::diff($date1, $date2);

        $group = $show->group;
        $imageshows = $show->images;
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->get();
        return View::make('home.shows.show')->with('show',$show)->with('images',$images)->with('imageshows',$imageshows)->with('group',$group);
	}
	
	public function get_add()
	{
	}
	
	public function post_add()
	{
	}
	public function get_edit($id)
	{
	}
	public function put_edit($id)
	{
	}
	
	public function get_delete($id)
	{
	}
}
