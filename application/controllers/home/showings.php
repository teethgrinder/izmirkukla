<?php

class Home_Showings_Controller extends Base_Controller
{
	public $restful = true;
	
	public function get_index()
	{
		$showingdates = Showingdate::all();

         //$alt = Str::alternator('color1', 'color2', 'color3', 'color4');
		//$showings= Showing::where('date_calendar','=','showdate')->order_by('performance_date', 'ASC')->get();

		$page = Page::find(42);
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();
        if (Config::get('application.language') == 'tr'){
        return View::make('home.showings.index')->with('showingdates',$showingdates)->with('images',$images)->with('page',$page);
        }else{
            return View::make('home.showings.english')->with('showingdates',$showingdates)->with('images',$images)->with('page',$page);

        }

	}
	
	public function get_show($slug=null)
	{
        $show = Show::find_by_slug($slug);
		$page = Page::find(42);
        $group = $show->group;
        $imageshows = $show->images;
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();
        return View::make('home.shows.show')->with('show',$show)->with('images',$images)->with('imageshows',$imageshows)->with('group',$group)->with('page',$page);
	}
	
}
