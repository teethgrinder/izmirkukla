<?php

class Home_Habers_Controller extends Base_Controller
{
    public $restful = true;

    public function get_index()
    {

        $habers = Haber::order_by('published_at', 'ASC')->get();
        if(!($habers)){
            return Redirect::to_action('home.pages@homepage');
        }
        $page = Page::find(45);

        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();
        return View::make('home.habers.index')->with('habers',$habers)->with('images',$images)->with('page',$page) ;
    }

    public function get_show($id=null)
    {
        $haber = Haber::find($id);
		$page = Page::find(45);

        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();
        return View::make('home.habers.show')->with('haber',$haber)->with('images',$images)->with('imageshows',$imageshows)->with('page',$page) ;
    }


}
