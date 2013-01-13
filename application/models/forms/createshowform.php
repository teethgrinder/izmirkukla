<?php

	class CreateShowForm extends FormBaseModel\Base
	{
		public static $rules = array(
				'name'     		=> 	'required',
				'age'        	=> 	'required',
				'language'		=> 	'required',
				'duration'		=> 	'required',
				'information'		
		);	
    public static function theater_options()
    {
        return array('' => 'Choose a Theater') + Theater::lists('name', 'id');
    }
	}
