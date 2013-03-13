<?php

class Home_Subjects_Controller extends Base_Controller
{
    public $restful = true;



    public function get_show($id=null)
    {
        $subject = Subject::find($id);

        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();
        if (Config::get('application.language') == 'tr')
            return View::make('home.subjects.show')->with('subject',$subject)->with('images',$images);
        else
            return View::make('home.subjects.show_en')->with('subject',$subject)->with('images',$images);
    }


}