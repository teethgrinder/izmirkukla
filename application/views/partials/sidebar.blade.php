    <!-- Nav Sidebar -->
 
    <!-- This is source ordered to be pulled to the left on larger screens -->
 
 
<div class="three columns pull-nine">
<div class="shadowblockmenu-v">
	<hr>

<ul id="example2">
 
<li class="yt"><h5 class="yt">{{HTML::link_to_action('home.pages@homepage',Lang::line('izmirkukla.home')->get(),array(),array('class'=>'yt'))}}</h5></li>
 <li>
	<!-- <div class="arrow-down"></div>-->
       <h6>Festival </h6>   
      
    
		<ul  class="panel loading">
		<!--	<li> <a href="/groups">Gruplar</a></li>-->

			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.presentation')->get(),array(Lang::line('izmirkukla.presentation')->get()))}}</li>
			<li> {{HTML::link_to_action('home.shows@index',Lang::line('izmirkukla.shows')->get())}}</li>
			<li> {{HTML::link_to_action('home.showings@index',Lang::line('izmirkukla.program')->get())}}</li>
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.exhibitions')->get(),array(Lang::line('izmirkukla.exhibitions')->get()))}}</li>
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.workshops')->get(),array(Lang::line('izmirkukla.workshops')->get()))}}</li>
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.conferences')->get(),array(Lang::line('izmirkukla.conferences')->get()))}}</li>
		</ul>
  </li>
  <li>
  <h6>{{ Lang::line('izmirkukla.documents') }}  </h6>
		<ul class="panel loading">
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.manifest')->get(),array(Lang::line('izmirkukla.manifest')->get()))}}</li>
			<li> <a href="#">Arşiv</a></li>
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.articles')->get(),array(Lang::line('izmirkukla.articles')->get()))}}</li>
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.pressmenu')->get(),array(Lang::line('izmirkukla.press')->get()))}}</li>
			<li> {{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.crew')->get(),array(Lang::line('izmirkukla.crew')->get()))}}</li>
			<li>{{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.places')->get(),array(Lang::line('izmirkukla.places')->get()))}}</li>
		</ul>
  </li>
        <li><h5>{{HTML::link_to_action('home.pages@view',Lang::line('izmirkukla.supporters')->get(),array(Lang::line('izmirkukla.supporters')->get()),array('class'=>'yt')) }}</h5></li>
 
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
  </div>  
 
</div>

