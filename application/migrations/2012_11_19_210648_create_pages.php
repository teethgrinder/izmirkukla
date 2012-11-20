<?php

class Create_Pages {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function($table){
	 
			$table->increments('id');
			$table->string('title',255);
			$table->string('slug',255);
			$table->string('meta_title',255);
			$table->string('meta_description',255);
			$table->string('meta_keywords',255);
			$table->integer('created_by');
			$table->index('id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('pages');
	}

}
