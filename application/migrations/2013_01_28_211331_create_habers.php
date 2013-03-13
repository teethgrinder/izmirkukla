<?php

class Create_Habers {

    public function up()
    {
        Schema::create('habers',function($table)
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
        Schema::drop('habers');
    }

}