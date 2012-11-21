<?php
class Admin_Dash_Controller extends Admin_Controller
{
    // Restful controllers allow us to prepend get_ or post_ to our function / url names
    // in order to logically separate the two types of request. Particularly useful
    // for CRUD systems.
    public $restful = true;

    public function get_index()
    {
        echo "Hello";
    }

 
    
}
