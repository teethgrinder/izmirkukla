<?php

class User extends FormBaseModel\Base
{
	public static $accessible = array('nickname','password');

    public static $rules = array(
        'username'     			=> 'required',
        'password'         	=> 'required|min:3',
        'nickname'        	=> 'required',
    );
}
