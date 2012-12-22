<?php

class Create_Users {

	//Users table 
	public function up()
	{
		Schema::create('users', function($table) {
		$table->increments('id');
		$table->string('username', 128);
		$table->string('nickname', 128);
		$table->string('password', 60);
		$table->timestamps();
		});
		DB::table('users')->insert(array(
		'username' => 'izmirkukla',
		'nickname' => 'Admin',
		'password' => Hash::make('kukla2013')
		));
		DB::table('users')->insert(array(
		'username' => 'kukla',
		'nickname' => 'izmir2013',
		'password' => Hash::make('kukla2013')
		));
	}
 //Drop Table
	public function down()
	{
		Schema::drop('users');
	}

}
