<?php

class Admin_Dashboard_Controller extends Base_Controller{

    public $restful = true;

    function __construct()
    {
        parent::__construct();
        $this->filter('before', 'csrf')->on('post');
    }


    public function get_index()
    {


        return View::make('admin.dashboard.index');

    }

}