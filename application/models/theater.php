<?php

class Theater extends \EloquentBaseModel\Base
{
	
	public static $accessible = array('name', 'adress');
	
	/*public function shows()
	{
		return $this->has_many_and_belongs_to('Show','show_theaters');
	}
	*/
	
	public function showings()
	{
		return $this->has_many('Showing');
	}
	
}
