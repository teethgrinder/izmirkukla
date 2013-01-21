<?php

class Create_Others {

//shows table
    public function up()
    {
        Schema::create('others',function($table)
        {	$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('name_english');
            $table->string('actor');
            $table->string('place');
            $table->string('date');
            $table->string('slug');
            $table->text('information');
            $table->text('information_english');
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
        Schema::drop('others');
    }

}
