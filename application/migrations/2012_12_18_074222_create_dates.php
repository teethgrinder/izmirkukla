<?php

class Create_Dates {

//date 
	public function up()
	{
	Schema::table('showingdates',function($table)
        {	
			
			$table->engine = 'InnoDB';
			$table->create();
            $table->increments('id');
            $table->date('showdate');
         
            $table->timestamps();
        });
        $starting_date = new DateTime('2013-03-06 00:00');
        $ending_date = new DateTime('2013-04-07 23:59:59');
        // to use without times $ending_date->add(new DateInterval('P1D'));
        $interval = new DateInterval('P1D');
		
   
        
        $period = new  DatePeriod($starting_date , $interval, $ending_date);
        foreach($period as $dt)
        {
        DB::table('showingdates')->insert(array(
        'showdate' => $dt
        ));
        }
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('showingdates');
	}

}
