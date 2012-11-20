<?php

class Create_Roles {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles',function($table){
	 
			$table->increments('id');
			$table->string('slug');
			$table->string('name');
			$table->timestamps();
			$table->index('id');
			
			});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roles');
	}

}
