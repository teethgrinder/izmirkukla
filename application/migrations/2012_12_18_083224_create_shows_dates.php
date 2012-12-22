<?php

class Create_Shows_Dates {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shows_dates',function($table)
		{
			$table->increments('id');
			$table->integer('show_id')->unsigned();
			$table->integer('date_id')->unsigned();
			$table->timestamps();
			$table->integer('status');	
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shows_dates');
	}

}
