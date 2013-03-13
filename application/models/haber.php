<?php

class Haber extends \EloquentBaseModel\Base
{

    public static $accessible = array('media', 'published_at' );

    static function find_by_slug($slug)
    {
        return static::where_slug($slug)->first();
    }

    public function get_publish_date()
    {
        return date('j M  Y', strtotime($this->get_attribute('published_at')));
    }

    public function images()
    {
        return $this->has_many('Image');
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
            'Jan'		=> 'Ocak',
            'Feb'		=> 'Şubat',
            'Mar'		=> 'Mart',
            'Apr'		=> 'Nisan',
            'Jun'		=> 'Haziran',
            'Jul'		=> 'Temmuz',
            'Aug'		=> 'Ağu',
            'Sep'		=> 'Eyl',
            'Oct'		=> 'Eki',
            'Nov'		=> 'Kas',
            'Dec'		=> 'Ara',
        );

        return strtr($date,$tr_date);
    }

}