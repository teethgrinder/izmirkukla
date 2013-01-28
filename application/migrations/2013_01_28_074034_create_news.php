<?php

class Create_News {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('news',function($table)
        {	$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('media');
            $table->date('published_at');
            $table->string('slug');
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
        Schema::drop('news');
	}

}