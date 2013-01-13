<?php

class CreateSubjectForm extends FormBaseModel\Base
{

    public static $rules = array(
        'title' 		=> 'required',
        'content' 		=> 'required',
        'page_id'       => 'required',
    );
    public static function theater_options()
    {
        return array('' => 'Bir Sayfa Seçin') + Page::lists('slug', 'id');
    }
}