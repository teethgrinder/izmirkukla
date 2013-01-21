<?php

class Create_Shows {

//shows table
	public function up()
	{
		Schema::create('shows',function($table)
		{	$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('name');
            $table->string('name_english');
			$table->string('slug');
            $table->string('type');
			$table->string('age');
			$table->string('language');
            $table->string('language_english');
			$table->string('duration');
			$table->text('information');
            $table->text('information_english');
			$table->string('meta_title',255);
			$table->string('meta_description',255);
			$table->string('meta_keywords',255);
			$table->integer('group_id')->unsigned();
			$table->timestamps();
	
			$table->foreign('group_id')->references('id')->on('groups')->on_delete('cascade')->on_update('cascade');
 
 
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
