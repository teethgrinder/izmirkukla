<?php
class Home_Pages_Controller extends Base_Controller {
	public $restful = true;
	function __construct()
	{
		parent::__construct();
		$this->filter('before', 'csrf')->on('post');
 
	}
    public function get_intro()

    {

        Auth::logout();
        //$links = DB::table('links')->where('type', '=', '1')->get();
        //$posts = Post::all();

            $page = DB::table('pages')->where('template', '=', 'intro')->first();

		 
        //$types = Type::lists('title', 'id');
        Section::inject('title', $page->meta_title);
        Section::inject('description', $page->meta_description);
        Section::inject('keywords', $page->meta_keywords);

        return View::make('home.pages.intro')->with('page', $page);
        //->with('page', $page)->with('posts',$posts)->with('links',$links);
        //->with('types', $types);
    }
	public function get_homepage()
	
	{

		Auth::logout();
		//$links = DB::table('links')->where('type', '=', '1')->get();
		//$posts = Post::all();
        if (Config::get('application.language') == 'tr')
		$page = DB::table('pages')->where('template', '=', 'anasayfa')->first();
        else
        $page = DB::table('pages')->where('template', '=', 'homepage')->first();
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();

		$title = $page->title;
        //$types = Type::lists('title', 'id');
		Section::inject('title', $page->meta_title);
		Section::inject('description', $page->meta_description);
		Section::inject('keywords', $page->meta_keywords);
	 	 
		return View::make('home.pages.homepage')->with('page', $page)->with('images',$images);
						//->with('page', $page)->with('posts',$posts)->with('links',$links);
						//->with('types', $types);
	}

		public function get_tansas()
	
	{

		Auth::logout();
		//$links = DB::table('links')->where('type', '=', '1')->get();
		//$posts = Post::all();
 
		$page = DB::table('pages')->where('template', '=', 'tansas')->first();
		$subject = DB::table('subjects')->where('slug', '=', 'tansas')->first();
 
        $page = DB::table('pages')->where('template', '=', 'tansasen')->first();
        $subject = DB::table('subjects')->where('slug', '=', 'tansasen')->first();
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();

		$title = "tansas";
        //$types = Type::lists('title', 'id');
		Section::inject('title', $page->meta_title);
		Section::inject('description', $page->meta_description);
		Section::inject('keywords', $page->meta_keywords);
	 	 
		return View::make('home.pages.tansas')->with('page', $page)->with('images',$images)->with('subject',$subject);
				 
	}
	
		public function get_tansas_en()
	
	{

		Auth::logout();
		//$links = DB::table('links')->where('type', '=', '1')->get();
		//$posts = Post::all();
 
		$page = DB::table('pages')->where('template', '=', 'tansas_en')->first();
		$subject = DB::table('subjects')->where('slug', '=', 'tansas_en')->first();
 
  
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();


        //$types = Type::lists('title', 'id');
		Section::inject('title', $page->meta_title);
		Section::inject('description', $page->meta_description);
		Section::inject('keywords', $page->meta_keywords);
	 	 
		return View::make('home.pages.tansas')->with('page', $page)->with('images',$images)->with('subject',$subject);
				 
	}
	
			public function get_forumbornova()
	
	{

		Auth::logout();
		//$links = DB::table('links')->where('type', '=', '1')->get();
		//$posts = Post::all();
 
		$page = DB::table('pages')->where('template', '=', 'forumbornova')->first();
		$subject = DB::table('subjects')->where('slug', '=', 'forumbornova')->first();
 
    
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();

		$title = "tansas";
        //$types = Type::lists('title', 'id');
		Section::inject('title', $page->meta_title);
		Section::inject('description', $page->meta_description);
		Section::inject('keywords', $page->meta_keywords);
	 	 
		return View::make('home.pages.tansas')->with('page', $page)->with('images',$images)->with('subject',$subject);
				 
	}
	
			public function get_forumbornova_en()
	
	{

		Auth::logout();
		//$links = DB::table('links')->where('type', '=', '1')->get();
		//$posts = Post::all();
 
		$page = DB::table('pages')->where('template', '=', 'forumbornova_en')->first();
		$subject = DB::table('subjects')->where('slug', '=', 'forumbornova_en')->first();
 
 
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();


        //$types = Type::lists('title', 'id');
		Section::inject('title', $page->meta_title);
		Section::inject('description', $page->meta_description);
		Section::inject('keywords', $page->meta_keywords);
	 	 
		return View::make('home.pages.forumbornova_en')->with('page', $page)->with('images',$images)->with('subject',$subject);
				 
	}
	
	public function get_view($slug)
	
	{	
		
	//	$links = DB::table('links')->where('type', '=', '1')->get();
		$page = DB::table('pages')->where('slug', '=', $slug)->first();
        $images = DB::table('images')->where('show_id','>',0)->order_by(DB::raw(''),DB::raw('RAND()'))->take(8)->get();
		$subject = DB::table('subjects')->where('slug', '=', $slug)->first();
        $subjects = DB::table('subjects')->where('slug', '=', $slug)->get();
        $others = DB::table('others')->where('slug', '=', $slug)->get();
        $theaters = Theater::order_by('name','asc')->get();
        $shows = DB::table('shows')->where('slug','=',$slug)->get();

        $showings = DB::table('showings')->where('slug', '=', $slug)->first();
		if (! is_object($page))
			return Response::error('404'); 
 
		Section::inject('title', $page->meta_title);
		if (is_file(path('app').'views/home/pages/'.$page->template.'.blade.php'))
		{
			return View::make('home.pages.'.$page->template)->with('page', $page)->with('subjects', $subjects)->with('subject', $subject)->with('images',$images)->with('showings',$showings)->with('shows',$shows)->with('others',$others)->with('theaters',$theaters);
		}
		else
		{
			if (is_file(path('app').'views/home/page/default.blade.php'))
			{
				return View::make('home.page.default')->with('page', $page)->with('subject',$subject);
			}
			else
			{
				return Response::error('404'); 	
			}
		}
	}
	public function get_edit($slug){
		$links = DB::table('links')->where('type', '=', '2')->get();
		$page = DB::table('pages')->where('slug', '=', $slug)->first();
		$subject = DB::table('subjects')->where('slug', '=', $slug)->first();
		if (! is_object($page))
			return Response::error('404'); 
		Section::inject('title', $page->meta_title);
		if (is_file(path('app').'views/home/page/'.$page->template.'.blade.php'))
		{
			return View::make('home.page.edit')->with('page', $page)->with('subject', $subject)->with('links',$links);
		}
		else
		{
			if (is_file(path('app').'views/home/page/default.blade.php'))
			{
				return View::make('home.page.default')->with('page', $page);
			}
			else
			{
				return Response::error('404'); 	
			}
		}
	}

	public function put_edit($slug){
	 
		$subject = Subject::where('slug', '=', $slug)->first();
		$rules = array(
            
            'title'  => 'required|max:255',
            'content' => 'required',
        );
     $validation = Validator::make(Input::all(), $rules);
        if ($validation->fails())
        {
            Messages::add('error',$validation->errors->all());

	   }else{
            $subject->title = Input::get('title');
            $subject->content = Input::get('content');
 
            $subject->save();
      
            return Redirect::to('edit/egitim');
        }
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
	
 
		
	public function post_mail(){
		
		//$transporter = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls')
          //      ->setUsername('burak.akin@gmail.com')
             //   ->setPassword('cr12oma12');

              //  $mailer = Swift_Mailer::newInstance($transporter);
           $mailer = IoC::resolve('mailer');
                $headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
				$headers .= "Message-ID: <".time()." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
				$headers .= "X-Mailer: PHP v".phpversion()."\r\n"; 
          // To use the ArrayLogger
			   //$logger = new Swift_Plugins_Loggers_ArrayLogger();
               //$mailer->registerPlugin(new Swift_Plugins_LoggerPlugin($logger));

				$message = Swift_Message::newInstance('İletişim')
										->setFrom(array(Input::get('email')=> Input::get('name')))
										->setTo(array('info@izmirkuklagunleri.com' => 'info@izmirkuklagunleri.com'   ))
										->addPart('My Plain Text Message','text/plain')
										->setBody(Input::get('message'), 'text/html');

				 $mailer->send($message);
	 
			return Redirect::to( 'iletisim')->with('success','İletisim bilgileriniz alındı');
		  
		   	
		
		
		 
	}
	
	
	public function post_mail_en(){
		
		//$transporter = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls')
          //      ->setUsername('burak.akin@gmail.com')
             //   ->setPassword('cr12oma12');

              //  $mailer = Swift_Mailer::newInstance($transporter);
           $mailer = IoC::resolve('mailer');
                
          // To use the ArrayLogger
			   //$logger = new Swift_Plugins_Loggers_ArrayLogger();
               //$mailer->registerPlugin(new Swift_Plugins_LoggerPlugin($logger));
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
				$headers .= "Message-ID: <".time()." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
				$headers .= "X-Mailer: PHP v".phpversion()."\r\n"; 
				$message = Swift_Message::newInstance('İletişim')
										->setFrom(array(Input::get('email')=> Input::get('name')))
										->setTo(array('info@izmirkuklagunleri.com' => 'izmirkuklagunleri.com'   ))
										->addPart('My Plain Text Message','text/plain')
										->setBody(Input::get('message'), 'text/html');

				 $mailer->send($message);
	 
			return Redirect::to( 'contact')->with('success','Your mail has been sent');
		  
		   	
		
		
		 
	}
	
	}
