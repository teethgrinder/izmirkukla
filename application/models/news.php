<?php

class News extends \EloquentBaseModel\Base
{

    public static $accessible = array('media', 'published_at' );

    static function find_by_slug($slug)
    {
        return static::where_slug($slug)->first();
    }


    public function images()
    {
        return $this->has_many('Image');
    }

}
