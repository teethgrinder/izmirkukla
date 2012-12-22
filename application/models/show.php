<?php

class Show extends Eloquent
{
	 
	public function Groups()
	{
		return $this->belongs_to('Group');
	}
	
	public function Theaters()
	{
		return $this->has_many_and_belongs_to('Theater');
	}
}
