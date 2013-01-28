<?php

class CreateNewsForm extends FormBaseModel\Base
{
    public static $rules = array(
        'media'     		    => 	'required',
        'published_at'        	=> 	'required',
    );

}