<?php

class CreateOtherForm extends FormBaseModel\Base
{
    public static $rules = array(

        'actor'        	            => 	'required',
        'place'                     =>  'required'
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