<?php

class Create_Role_User {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{Schema::create('role_user', function($table){
 
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('role_id');
			$table->timestamps();
			$table->index('user_id');
			$table->index('role_id');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role_user');
	}

}
