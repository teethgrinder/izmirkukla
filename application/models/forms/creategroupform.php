<?php

	class CreateGroupForm extends FormBaseModel\Base
	{
		 
		public static $rules = array(
            'name' 				=> 'required',
            'country'           => 'required',
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
            'Germany'		                    => 	'Germany',
            'USA'		                        => 	'USA',
            'Argentina'		                    => 	'Argentina',
            'Australia' 		                => 	'Australia',
            'Belgium'		                    => 	'Belgium',
            'Brazil'		                    => 	'Brazil',
            'Bulgaria'	                        => 	'Bulgaria',
            'France'		                    =>	'France',
            'Holland'		                    =>	'Holland',
            'Crotia'    	                    =>	'Crotial',
            'England'	                        => 	'England',
            'Iran'	                            => 	'Iran',
            'Spain'	                            => 	'Spain',
            'Israel'	                        => 	'Israel',
            'Switzerland'	                    =>	'Switzerland',
            'Italy'	                            => 	'Italy',
            'Japan'                            	=> 	'Japan',
            'South Korea'                      	=> 	'South Korea',
            'Hungary'   	                    => 	'Hungary',
            'Peru'                          	=>	'Peru',
            'Slovenya'                      	=>	'Slovenya',
            'Turkey'	                        =>	'Turkey',
            'Greece'     	                    =>	'Greece',
            'New Zelland'                    	=>	'New Zelland',
        );
	}
	
	
