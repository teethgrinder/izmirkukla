<?php

class Create_Groups {

	//table for puppet groups
	public function up()
	{
		Schema::create('groups',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('country');
			$table->text('information');
			$table->string('theater_id');
			$table->timestamps();
			});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('groups');
	}

}
