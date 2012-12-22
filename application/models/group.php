<?php

	class Group extends Eloquent
	{
 
		public function shows()
		{
			return $this->has_many('Show');
		}
	 
		
	}
	
	
