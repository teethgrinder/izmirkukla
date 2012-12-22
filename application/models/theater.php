<?php

class Theater extends Eloquent{
	
	public function shows(){
		return $this->has_many_and_belongs_to('Show');
	}
	
}
