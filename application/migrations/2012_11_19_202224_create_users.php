<?php

class Create_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
		
			$table->increments('id');
			$table->string('username');
			$table->string('email');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('password');
			$table->date('last_login');
			$table->integer('active');
			$table->integer('admin');
			$table->timestamps();
			$table->index('id');
		});
		DB::table('users')->insert(array(
		'username' => 'admin',
		'first_name' => 'Admin',
		'password' => Hash::make('password')
		));
	 
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
