<?php

	class Group extends \EloquentBaseModel\Base
	{
		public static $accessible = array('name', 'country', 'information','information_english');
		
		public static $rules = array(
			'name'			        => 'required',
			'country'		        => 'required',
			'information'           => 'required',
            'information_english'   =>'required'
		);
		
		public function shows()
		{
			return $this->has_many('Show');
		}
		public function images()
		{
				return $this->has_many('Image');
		}

		
	}
	
	
