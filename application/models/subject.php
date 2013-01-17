<?php

class Subject extends \EloquentBaseModel\Base
{

    public static $accessible = array('title','content','slug');
	
	static function find_by_slug($slug)
	{
	return static::where_slug($slug)->first();
	}
	
    public function page()
    {
        return $this->belongs_to('Page');
    }

    public function author()
    {
        return $this->belongs_to('User','author_id');
    }

}
