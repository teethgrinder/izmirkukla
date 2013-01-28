<?php

class Create_Groups {

	//table for puppet groups
	public function up()
	{
		Schema::create('groups',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('country');
            $table->string('country_english');
			$table->string('slug');
			$table->string('theater_id');
			$table->string('meta_title',255);
			$table->string('meta_description',255);
			$table->string('meta_keywords',255);
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
