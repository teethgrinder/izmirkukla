<?php

class CreateSubjectForm extends FormBaseModel\Base
{

    public static $rules = array(
        'title' 		=> 'required',
        'content' 		=> 'required',

    );

    public static function page_options()
    {
        return array('' => 'Hangi Sayfada Yayınlansın') + Page::lists('slug', 'id');
    }
}
