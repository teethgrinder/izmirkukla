<?php

class Home_Showings_Controller extends Base_Controller
{
	public $restful = true;
	
	public function get_index()
	{
        $showings = Showing::all();
         
		$showingdates = Showingdate::all();
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->get();
        return View::make('home.showings.index')->with('showings',$showings)->with('images',$images)->with('showingdates',$showingdates);
	}
	
	public function get_show($slug=null)
	{
        $show = Show::find_by_slug($slug);

        $group = $show->group;
        $imageshows = $show->images;
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->get();
        return View::make('home.shows.show')->with('show',$show)->with('images',$images)->with('imageshows',$imageshows)->with('group',$group);
	}
	
}
