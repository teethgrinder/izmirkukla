<?php

class Home_Shows_Controller extends Base_Controller
{
	public $restful = true;
	
	public function get_index()
	{
        $shows =  DB::table('shows')->join('groups', 'shows.group_id', '=', 'groups.id')
                    ->order_by('country','asc')
                    ->order_by('groups.name','asc')
                    ->get(array('shows.*', 'groups.name AS group_name'));

       // $shows = Show::order_by('country','asc')->order_by($show->group->name,'asc')->get();


        if(!($shows)){
            return Redirect::to_action('home.pages@homepage');
        }
		$page = Page::find(43);
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();
        if (Config::get('application.language') == 'tr')
        return View::make('home.shows.index')->with('shows',$shows)->with('images',$images)->with('page',$page) ;
        else
        return View::make('home.shows.index_en')->with('shows',$shows)->with('images',$images)->with('page',$page)  ;

	}

	public function get_show($slug=null)
	{
        $show = Show::find_by_slug($slug);
        $group = $show->group;
        $imageshows = $show->images;
        $page = Page::find(44);
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();
        if (Config::get('application.language') == 'tr')
     
        return View::make('home.shows.show')->with('show',$show)->with('images',$images)->with('imageshows',$imageshows)->with('group',$group)->with('page',$page);
        else
       
        return View::make('home.shows.show_en')->with('show',$show)->with('images',$images)->with('imageshows',$imageshows)->with('group',$group)->with('page',$page);
	}
	

}
