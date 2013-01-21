<?php

class CreateShowForm extends FormBaseModel\Base
{
    public static $rules = array(
            'name'     		        => 	'required',
            'age'        	        => 	'required',
            'language'		        => 	'required',
            'duration'		        => 	'required',

            'information'          =>  'required',
            'information_english'  =>  'required'
    );

    public static $event = array(
        ''	                => 	'Gösteri Türü Seçin',
        'shows'		        => 	'oyun',
        'exhibition'		=> 	'sergi',
        'workshops' 		=> 	'workshoplar',
        'conference'		=> 	'konferanslar',
    );

    public static function group_options()
    {
        return array('' => 'Grup Seçimi') + Group::lists('name', 'id');
    }


}
