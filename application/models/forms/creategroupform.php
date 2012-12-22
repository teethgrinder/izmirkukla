<?php

	class CreateGroupForm extends FormBaseModel\Base
	{
		 
		public static $rules = array(
		'name' 				=> 'required',
		'country'     => 'required',
		);
		public static $country = array(
		''	=> 	'Ülke Seçin',
		1		=> 	'Almanya',
		2		=> 	'Amerika Birleşik Devletleri',
		3		=> 	'Arjantin',
		4		=> 	'Avustralya',
		5		=> 	'Belçika',
		6		=> 	'Brezilya',
		7		=> 	'Bulgaristan',
		8		=>	'Fransa',
		9		=>	'Hollanda',
		10	=>	'Hırvatistan',
		11	=> 	'İngiltere',
		12	=> 	'İran',
		13	=> 	'İspanya',
		13	=> 	'İsrail',
		14	=>	'İsviçre',
		15	=> 	'İtalya',
		16	=> 	'Japonya',
		17	=> 	'Güney Kore',
		18	=> 	'Macaristan',
		19	=>	'Peru',
		20	=>	'Slovenya',
		21	=>	'Türkiye',
		22 	=>	'Yunanistan',
		24	=>	'Yeni Zelanda',
		);
	}
	
	
