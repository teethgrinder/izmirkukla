<?php

class Showingdate extends  \EloquentBaseModel\Base
{
	public static $accessible = array('id', 'date');
	
	public function get_schedule_date()
{
    return date('d', strtotime($this->get_attribute('showdate')));
   
}
}
 
