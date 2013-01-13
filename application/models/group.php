<?php

	class Group extends \EloquentBaseModel\Base
	{
		public static $accessible = array('name', 'country', 'information');
		
		public static $rules = array(
			'name'			=> 'required',
			'country'		=> 'required',
			'information'  => 'required'		
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
	
	
