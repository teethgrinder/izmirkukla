<?php

class Create_Dates {

//date 
	public function up()
	{
		Schema::create('dates',function($table)
		{
			$table->increments('id');
			$table->date('schedule');
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
		Schema::drop('dates');
	}

}
