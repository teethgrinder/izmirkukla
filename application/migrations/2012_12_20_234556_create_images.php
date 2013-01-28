<?php

class Create_Images {

		public function up()
	{
		Schema::create('images', function($table) {
		$table->increments('id');
		$table->text('title');
		$table->string('name', 128);
		$table->string('tag', 128);
		$table->string('meta_tag', 128);
		$table->integer('group_id')->unsigned();
		$table->integer('show_id')->unsigned();
		$table->integer('theater_id')->unsigned();
		$table->integer('new_id')->unsigned();
		$table->timestamps();
		});
	}
	
 
	public function down()
	{
		Schema::drop('images');
	}

}
