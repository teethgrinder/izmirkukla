<?php

	class CreateGroupForm extends FormBaseModel\Base
	{
		 
		public static $rules = array(
            'name' 				=> 'required',
            'country'           => 'required',
            'country_english'   => 'required',
        );
		public static $country = array(
            ''	                                => 	'Ülke Seçin',
            'Almanya'		                    => 	'Almanya',
            'Amerika Birleşik Devletleri'		=> 	'Amerika Birleşik Devletleri',
            'Arjantin'		                    => 	'Arjantin',
            'Avustralya'		                => 	'Avustralya',
            'Belçika'		                    => 	'Belçika',
            'Brezilya'		                    => 	'Brezilya',
            'Bulgaristan'	                    => 	'Bulgaristan',
            'Fransa'		                    =>	'Fransa',
            'Hollanda'		                    =>	'Hollanda',
            'Hırvatistan'	                    =>	'Hırvatistan',
            'İngiltere'	                        => 	'İngiltere',
            'İran'	                            => 	'İran',
            'İspanya'	                        => 	'İspanya',
            'İsrail'	                        => 	'İsrail',
            'İsviçre'	                        =>	'İsviçre',
            'İtalya'	                        => 	'İtalya',
            'Japonya'                       	=> 	'Japonya',
            'Güney Kore'                       	=> 	'Güney Kore',
            'Macaristan'	                    => 	'Macaristan',
            'Peru'                          	=>	'Peru',
            'Slovenya'                      	=>	'Slovenya',
            'Türkiye'	                        =>	'Türkiye',
            'Yunanistan' 	                    =>	'Yunanistan',
            'Yeni Zelanda'                  	=>	'Yeni Zelanda',
		);

        public static $country_english = array(
            ''	                                => 	'Choose Country',

            'Argentina'		                    => 	'Argentina',
            'Australia' 		                => 	'Australia',
            'Belgium'		                    => 	'Belgium',
            'Brazil'		                    => 	'Brazil',
            'Bulgaria'	                        => 	'Bulgaria',
            'Crotia'    	                    =>	'Crotial',
            'England'	                        => 	'England',
            'France'		                    =>	'France',
            'Germany'		                    => 	'Germany',
            'Greece'     	                    =>	'Greece',
            'Holland'		                    =>	'Holland',
            'Iran'	                            => 	'Iran',
            'Israel'	                        => 	'Israel',
            'Italy'	                            => 	'Italy',
            'Japan'                            	=> 	'Japan',
            'Hungary'   	                    => 	'Hungary',
            'New Zelland'                    	=>	'New Zelland',
            'Peru'                          	=>	'Peru',
            'Slovenya'                      	=>	'Slovenya',
            'South Korea'                      	=> 	'South Korea',
            'Spain'	                            => 	'Spain',
            'Switzerland'	                    =>	'Switzerland',
            'Turkey'	                        =>	'Turkey',
            'USA'		                        => 	'USA',
        );
	}
	
	
