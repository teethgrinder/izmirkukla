<?php

class Create_Theaters {

	//tables for theaters
	public function up()
	{
		Schema::create('theaters',function($table){
			$table->increments('id');
			$table->string('name');
			$table->text('adress');
			});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('theaters');
	}

}
