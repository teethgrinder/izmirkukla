<?php

class Pages_Controller extends Base_Controller {
 
	public $restful = true;
	


		public function get_articles()
		
			{ $subject = Subject::find(3);
				$articles =  DB::table('articles')->order_by('id')->get();
			$posts = Post::with('author')->order_by('id','desc')->first();
	 
				return View::make('layouts.default')->nest('content','articles',array('articles'=>$articles,'posts'=>$posts,'subject'=>$subject));
			}
			
		public function get_hakkimizda(){
		$subject = Subject::find(1);
	  return View::make('layouts.default')->nest('content','hakkimizda',array('subject'=>$subject));
		}
		public function get_hizmetlerimiz(){
		$subject = Subject::find(2);
	   return View::make('layouts.default')->nest('content','services',array('subject'=>$subject));
		}
		public function get_snt(){
			$subject = Subject::find(2);
			return View::make('layouts.default')->nest('content','snt',array('subject'=>$subject));
		}
		public function get_neurofeedback(){
		$article = Article::find(5);
	   return View::make('layouts.default')->nest('content','neuro',array('article'=>$article));
		}
		public function get_biofeedback(){
		$article = Article::find(6);
	   return View::make('layouts.default')->nest('content','bio',array('article'=>$article));
		}
		public function get_iletisim(){
 
	   return View::make('layouts.default')->nest('content','contact');
		}
		public function get_harita(){
 
	  return View::make('layouts.default')->nest('content','map');
		}
		public function get_tur(){
 
	  return View::make('layouts.default')->nest('content','tur');
		}
		
		public function get_haberler(){
			$posts = Post::with('author')->order_by('id','desc')->get();
			 return View::make('layouts.default')->nest('content','haberler',array('posts'=>$posts));
		}
		public function get_galeri(){
	$imgs=  DB::table('imgs')->order_by('id','desc')->get();
			  return View::make('layouts.default')->nest('content','galeri', array('imgs'=>$imgs));
		}
		public function get_galeritam(){
	$imgs=  DB::table('imgs')->order_by('id','desc')->get();
			  return View::make('layouts.default')->nest('content','galeritam', array('imgs'=>$imgs));
		}
		public function get_heroes(){
		 
			  return View::make('layouts.default')->nest('content','heroes');
		}
		public function get_photo(){
		 $imgs = Img::with('author')->order_by('id','desc')->first();
			  return View::make('layouts.default')->nest('content','photo');
		}
		public function post_photo_upload($page_id) {
		$path = path('base').'/public/img/page/' . (int)$page_id;
		$filename = uniqid() . '.jpg';

		Input::upload('file', $path, Input::file('file.name'));

		$success = Resizer::open( $path . '/' . Input::file('file.name') )
					->resize( 800 , 600 , 'auto' )
					->save( $path . '/' . $filename , 90 );

		File::delete( $path . '/' . Input::file('file.name'));

		die('{ "filelink": "/img/page/' . (int)$page_id . '/' . $filename . '" }');
	}
	public function post_photo_uploader($page_id) {
		$path = path('base').'/public/img/page/' . (int)$page_id;
		$filename = uniqid() . '.jpg';
		// Create the big image
		$big = Resizer::open( $path . '/' . Input::file('file.name') )
					->resize( 800 , 600 , 'auto' )
					->save( $path . '/' . $filename , 90 );
		// Create a thumb
		$thumb = Resizer::open( $path . '/thumb/' . Input::file('file.name') )
					->resize( 200 , 200 , 'auto' )
					->save( $path . '/' . $filename , 90 );
		// Call your model were you save the image and parse the image name to save it into the database
		Img::save($filename);
		File::delete( $path . '/' . Input::file('file.name'));
		die('{ "filelink": "/img/page/' . (int)$page_id . '/' . $filename . '" }');
	}
}
