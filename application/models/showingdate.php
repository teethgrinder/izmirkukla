<?php

class Showingdate extends  \EloquentBaseModel\Base
{
	public static $accessible = array('id', 'date');
	
	public function get_schedule_date()
	{
    return date('d', strtotime($this->get_attribute('showdate')));
   
	}
	public function get_query_date()
    {
      return date('j M, Y', strtotime($this->get_attribute('showdate')));
    }
	
	    public function get_publish_date()
    {
        return date('j M, Y H:i', strtotime($this->get_attribute('showdate')));
    }
	    public function get_show_date()
    {
        return date('j M', strtotime($this->get_attribute('showdate')));
    }
	public function get_language($date)
	{ 	

		$tr_date = array(
		'Monday'	=> 'Pazartesi',
		'Tuesday'	=> 'Salı',
		'Wednesday'	=> 'Çarşamba',
		'Thursday'	=> 'Perşembe',
		'Friday'	=> 'Cuma',
		'Saturday'	=> 'Cumartesi',
		'Sunday'	=> 'Pazar',
		'January'	=> 'Ocak',
		'February'	=> 'Şubat',
		'March'		=> 'Mart',
		'April'		=> 'Nisan',
		'May'		=> 'Mayıs',
		'June'		=> 'Haziran',
		'July'		=> 'Temmuz',
		'August'	=> 'Ağustos',
		'September'	=> 'Eylül',
		'October'	=> 'Ekim',
		'November'	=> 'Kasım',
		'December'	=> 'Aralık',
		'Mon'		=> 'Pts',
		'Tue'		=> 'Sal',
		'Wed'		=> 'Çar',
		'Thu'		=> 'Per',
		'Fri'		=> 'Cum',
		'Sat'		=> 'Cts',
		'Sun'		=> 'Paz',
		'Jan'		=> 'Oca',
		'Feb'		=> 'Şub',
		'Mar'		=> 'Mar',
		'Apr'		=> 'Nis',
		'Jun'		=> 'Haz',
		'Jul'		=> 'Tem',
		'Aug'		=> 'Ağu',
		'Sep'		=> 'Eyl',
		'Oct'		=> 'Eki',
		'Nov'		=> 'Kas',
		'Dec'		=> 'Ara',
	);
 
	return strtr($date,$tr_date);
	}
}
 
