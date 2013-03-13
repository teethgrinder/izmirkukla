    <!-- Nav Sidebar -->
 
    <!-- This is source ordered to be pulled to the left on larger screens -->
 
 
<div class="three columns pull-nine">
<div class="shadowblockmenu-v">
	<hr>

<ul id="example2">
 
<li class="yt"><h5 class="yt">{{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.homemenu')->get(),array(Lang::line('izmirkukla.home')->get()),array('class'=>'yt')) }}</h5></li>
 <li>
	<!-- <div class="arrow-down"></div>-->
       <h6>Festival </h6>   
      
    
		<ul class="panel loading">
		<!--	<li> <a href="/groups">Gruplar</a></li>-->

			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.presentationmenu')->get(),array(Lang::line('izmirkukla.presentation')->get()),array('class'=>'alt'))}}</li>
			<li> {{HTML::link_to_action('home.shows@index',Lang::line('izmirkukla.showsmenu')->get(),array(Lang::line('izmirkukla.shows')->get()),array('class'=>'alt'))}}</li>
			<li> {{HTML::link_to_action('home.showings@index',Lang::line('izmirkukla.program')->get())}}</li>
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.exhibitionsmenu')->get(),array(Lang::line('izmirkukla.exhibitions')->get()))}}</li>
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.workshopsmenu')->get(),array(Lang::line('izmirkukla.workshops')->get()))}}</li>
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.conferencesmenu')->get(),array(Lang::line('izmirkukla.conferences')->get()))}}</li>

        </ul>
  </li>
  <li>
  <h6>{{ Lang::line('izmirkukla.documents') }}  </h6>
		<ul class="panel loading">
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.manifestmenu')->get(),array(Lang::line('izmirkukla.manifest')->get()))}}</li>
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.archievemenu')->get(),array(Lang::line('izmirkukla.archievemenu')->get()))}}</li>
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.articlesmenu')->get(),array(Lang::line('izmirkukla.articles')->get()))}}</li>
			<li> {{HTML::link_to_action('home.habers@index',Lang::line('izmirkukla.pressmenu')->get(),array(Lang::line('izmirkukla.press')->get()))}}</li>
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.crewmenu')->get(),array(Lang::line('izmirkukla.crew')->get()))}}</li>
			<li>{{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.placesmenu')->get(),array(Lang::line('izmirkukla.places')->get()))}}</li>
		</ul>
  </li>
        <li><h5>{{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.supportersmenu')->get(),array(Lang::line('izmirkukla.supporters')->get()),array('class'=>'yt')) }}</h5></li>
 
        <li><h5>{{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.contactmenu')->get(),array(Lang::line('izmirkukla.contact')->get()),array('class'=>'yt')) }}</h5></li>

      </ul>
      
     
     <!-- <p><img src="http://placehold.it/320x240&text=Ad" /></p>-->
 
 <div id="slides">
	  <div class="slider-wrapper theme-light">
    <div class="ribbon"></div>
    <div id="nivokslider" class="nivoSlider">

     @foreach($images as $image)

         <img src="{{ URL::to_asset('img/uploads/'.$image->id.'/thumb-'.$image->name) }}" alt="" />

     @endforeach

       </div>

 </div>
 </div>
    <br />
    <br />
    <br />
    @if (Config::get('application.language') == 'tr')
    <a href="#" class="buy">{{HTML::image('laravel/img/bilet1.png')}}</a>
    @elseif (Config::get('application.language') == 'en')
    <a href="#" class="buy">{{HTML::image('laravel/img/buyenglish.png')}}</a>
    @endif
  </div>  
 
</div>

