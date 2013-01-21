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
			'template'=>'anasayfa',
			'created_by' => 1
 
		));

        DB::table('pages')->insert(array(
            'id' => 11,
            'title' => 'homepage',
            'slug' => 'homepage',
            'template'=>'homepage',
            'created_by' => 1

        ));

		DB::table('pages')->insert(array(
			'id' => 2,
			'title' => 'sunum',
			'slug' => 'sunum',
			'template'=>'sunum',
			'created_by' => 1
 
		));

        DB::table('pages')->insert(array(
            'id' => 12,
            'title' => 'presentation',
            'slug' => 'presentation',
            'template'=>'presentation',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 3,
            'title' => 'oyunlar',
            'slug' => 'oyunlar',
            'template'=>'oyunlar',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 13,
            'title' => 'shows',
            'slug' => 'shows',
            'template'=>'shows',
            'created_by' => 1

        ));

		DB::table('pages')->insert(array(
            'id' => 4,
            'title' => 'sergiler',
            'slug' => 'sergiler',
            'template'=>'sergiler',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 14,
            'title' => 'exhibitions',
            'slug' => 'exhibitions',
            'template'=>'exhibitions',
            'created_by' => 1

        ));
    
      //<li>{{ HTML::link_to_action('admin.subjects@add_one', 'Manifesto', array('$slug'=>'manifesto')) }}</li>
        
         DB::table('pages')->insert(array(
            'id' => 5,
            'title' => 'konferanslar',
            'slug' => 'konferanslar',
            'template'=>'konferanslar',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 15,
            'title' => 'conferences',
            'slug' => 'conferences',
            'template'=>'conferences',
            'created_by' => 1

        ));
        
        DB::table('pages')->insert(array(
            'id' => 6,
            'title' => 'manifesto',
            'slug' => 'manifesto',
            'template'=>'manifesto',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 16,
            'title' => 'manifest',
            'slug' => 'manifest',
            'template'=>'manifest',
            'created_by' => 1

        ));
        
        DB::table('pages')->insert(array(
            'id' => 7,
            'title' => 'makaleler',
            'slug' => 'makaleler',
            'template'=>'makaleler',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 17,
            'title' => 'articles',
            'slug' => 'articles',
            'template'=>'articles',
            'created_by' => 1

        ));
        
         DB::table('pages')->insert(array(
            'id' => 8,
            'title' => 'Basın',
            'slug' => 'basin',
            'template'=>'basin',
            'created_by' => 1

         ));

        DB::table('pages')->insert(array(
            'id' => 18,
            'title' => 'press',
            'slug' => 'press',
            'template'=>'press',
            'created_by' => 1

        ));
        
        DB::table('pages')->insert(array(
            'id' => 9,
            'title' => 'ekip',
            'slug' => 'ekip',
            'template'=>'ekip',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 19,
            'title' => 'crew',
            'slug' => 'crew',
            'template'=>'crew',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 10,
            'title' => 'mekanlar',
            'slug' => 'mekanlar',
            'template'=>'mekanlar',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 20,
            'title' => 'places',
            'slug' => 'places',
            'template'=>'places',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 21,
            'title' => 'iletisim',
            'slug' => 'iletisim',
            'template'=>'iletisim',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 31,
            'title' => 'contact',
            'slug' => 'contact',
            'template'=>'contact',
            'created_by' => 1

        ));
        DB::table('pages')->insert(array(
            'id' => 22,
            'title' => 'destekleyenler',
            'slug' => 'destekleyenler',
            'template'=>'destekleyenler',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 32,
            'title' => 'supporters',
            'slug' => 'supporters',
            'template'=>'supporters',
            'created_by' => 1

        ));
        DB::table('pages')->insert(array(
            'id' => 23,
            'title' => 'workshoplar',
            'slug' => 'workshoplar',
            'template'=>'workshoplar',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 33,
            'title' => 'workshops',
            'slug' => 'workshops',
            'template'=>'workshops',
            'created_by' => 1

        ));
        DB::table('pages')->insert(array(
            'id' => 24,
            'title' => 'salonlar',
            'slug' => 'salonlar',
            'template'=>'salonlar',
            'created_by' => 1

        ));

        DB::table('pages')->insert(array(
            'id' => 34,
            'title' => 'theaters',
            'slug' => 'theaters',
            'template'=>'theaters',
            'created_by' => 1

        ));
		}
	public function down()
	{
		Schema::drop('pages');
	}

}
