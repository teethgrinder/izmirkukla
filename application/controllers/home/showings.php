<?php

class Home_Showings_Controller extends Base_Controller
{
	public $restful = true;
	
	public function get_index()
	{
		$showingdates = Showingdate::all();

         //$alt = Str::alternator('color1', 'color2', 'color3', 'color4');
		//$showings= Showing::where('date_calendar','=','showdate')->order_by('performance_date', 'ASC')->get();


        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->get();
        if (Config::get('application.language') == 'tr'){
        return View::make('home.showings.index')->with('showingdates',$showingdates)->with('images',$images);
        }else{
            return View::make('home.showings.english')->with('showingdates',$showingdates)->with('showings',$showings)->with('images',$images);

        }

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
