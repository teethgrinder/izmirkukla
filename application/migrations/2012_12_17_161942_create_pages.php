<?php

class Create_Pages {

//Static pages
	public function up()
	{
		Schema::create('pages', function($table){
	 
			$table->increments('id');
			$table->string('title',255);
			$table->string('slug',255);
			$table->string('template',255);
			$table->string('meta_title',255);
			$table->string('meta_description',255);
			$table->string('meta_keywords',255);
			$table->integer('created_by');
			$table->index('id');
			$table->timestamps();
		});
	
	DB::table('pages')->insert(array(
			'id' => 1,
			'title' => 'anasayfa',
			'slug' => 'anasayfa',
			'template'=>'homepage',
			'created_by' => 1
 
		));
		}
	public function down()
	{
		Schema::drop('pages');
	}

}
