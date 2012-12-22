<?php

class Create_Shows {

//shows table
	public function up()
	{
		Schema::create('shows',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('age');
			$table->string('language');
			$table->integer('group_id');
			$table->integer('theater_id');
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
		Schema::drop('shows');
	}

}
