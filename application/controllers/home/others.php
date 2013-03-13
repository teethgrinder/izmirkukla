<?php

class Home_Others_Controller extends Base_Controller
{
    public $restful = true;

    public function get_index()
    {

        $shows = Show::order_by('name', 'ASC')->get();
        if(!($shows)){
            return Redirect::to_action('home.pages@homepage');
        }
        foreach ($shows as $show) {
            $group = Group::find($show->group_id);
        }
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();
        return View::make('home.shows.index')->with('shows',$shows)->with('images',$images)->with('group',$group);
    }

    public function get_show($id=null)
    {
        $other = Other::find($id);


        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();
        return View::make('home.others.show')->with('other',$other)->with('images',$images)->with('other',$other);
    }


}
