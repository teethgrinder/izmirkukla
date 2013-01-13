<?php

class Subject extends \EloquentBaseModel\Base
{

    public static $accessible = array('title','content','page_id', 'user_id','slug');

    public function page()
    {
        return $this->belongs_to('Page');
    }

    public function author()
    {
        return $this->belongs_to('User','author_id');
    }

}