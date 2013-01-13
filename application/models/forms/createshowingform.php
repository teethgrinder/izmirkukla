<?php

	class CreateShowingForm extends FormBaseModel\Base
	{
    public static $rules = array(
        'show_id'     		=> 	'required',
        'theater_id'        => 	'required',
        'price'		        => 	'required'
	);
    public static function theater_options()
    {
        return array('' => 'Choose a Theater') + Theater::lists('name', 'id');
	}
    public static function show_options()
	{
        return array('' => 'Choose a Show') + Show::lists('name', 'id');
	}
	}
