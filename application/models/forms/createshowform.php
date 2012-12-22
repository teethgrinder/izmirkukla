<?php

	class CreateShowForm extends FormBaseModel\Base
	{
		public static $rules = array(
				'name'     		=> 	'required',
				'age'        	=> 	'required|min:3',
				'language'		=> 	'required'		
		);	

	}
