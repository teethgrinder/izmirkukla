<?php

class Showing extends \EloquentBaseModel\Base
{
	
	public static $accessible = array('performance_date','show_id','theater_id', 'start_time','end_time');
	
	public function theater()
	{
		return $this->belongs_to('Theater');
	}
	
	public function show()
	{
		return $this->belongs_to('Show');
	}
	
}
