<?php

class Create_Showings {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('showings',function($table)
		{	$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('theater_id')->unsigned();
			$table->integer('show_id')->unsigned();
            $table->integer('showingdate_id')->unsigned();
			$table->string('slug');
			$table->string('price');
		 
			$table->date('performance_date');
            $table->string('date_calendar');
			
			$table->timestamp('start_time');
			$table->timestamp('end_time');
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
		Schema::drop('showings');
	}

}
