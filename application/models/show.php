<?php

class Show extends \EloquentBaseModel\Base
{
	 
	public static $accessible = array('name', 'age', 'language','duration','information');
	 
	static function find_by_slug($slug)
	{
	return static::where_slug($slug)->first();
	}
	public function group()
	{
		return $this->belongs_to('Group');
	}
	
	public function showings()
	{
		return $this->has_many('Showing');
	}
	
 
	public function images()
	{
			return $this->has_many('Image');
	}
	
}
