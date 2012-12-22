<?php

class Create_Shows_Theaters {

//shows theaters list
	public function up()
	{
		Schema::create('shows_theaters',function($table)
		{
			$table->increments('id');
			$table->integer('show_id')->unsigned();
			$table->integer('theater_id')->unsigned();
			$table->foreign('show_id')->references('id')->on('shows')->on_delete('cascade')->on_update('cascade');
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
		Schema::drop('shows_theaters');
	}

}
