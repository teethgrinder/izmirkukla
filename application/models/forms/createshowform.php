<?php

class CreateShowForm extends FormBaseModel\Base
{
    public static $rules = array(
            'name'     		=> 	'required',
            'age'        	=> 	'required',
            'language'		=> 	'required',
            'duration'		=> 	'required',
            'type'          =>  'required',
            'information'          =>  'required',
            'information_english'          =>  'required'
    );

    public static $event = array(
        ''	                => 	'Gösteri Türü Seçin',
        'shows'		        => 	'oyun',
        'exhibition'		=> 	'sergi',
        'workshops' 		=> 	'workshoplar',
        'conference'		=> 	'konferanslar',
    );

}
