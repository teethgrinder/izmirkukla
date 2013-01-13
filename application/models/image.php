<?php

class Image extends \EloquentBaseModel\Base
{
	public static $accessible = array( 'name','title');
	
	public function group()
	{
		return $this->belongs_to('Group');
	}
	
	public function show()
	{
		return $this->belongs_to('Show');
	}
	
}
	
