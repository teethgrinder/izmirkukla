    <!-- Nav Sidebar -->
 
    <!-- This is source ordered to be pulled to the left on larger screens -->
 
 
<div class="three columns pull-nine">
<div class="shadowblockmenu-v">
	<hr>
<ul id="example2">
 
<li class="yt"><h5>{{HTML::link_to_action('home.pages@homepage','Anasayfa',array(),array('class'=>'yt'))}}</h5></li>
 <li>
	<!-- <div class="arrow-down"></div>-->
       <h6>Festival </h6>   
      
    
		<ul  class="panel loading">
		<!--	<li> <a href="/groups">Gruplar</a></li>-->

			<li> {{HTML::link_to_action('home.pages@view','Sunuş',array('presentation'))}}</li>
			<li> {{HTML::link_to_action('home.shows@index','Oyunlar')}}</li>
			<li> {{HTML::link_to_action('home.showings@index','Program')}}</li>
			<li> <a href="#">Sergiler</a></li>
			<li> <a href="#">Workshoplar</a></li>
			<li> <a href="#">Konferanslar</a></li>
		</ul>
  </li>
  <li>
  <h6>Dökümanlar  </h6>  
		<ul class="panel loading">
			<li> <a href="#">Manifesto</a></li>
			<li> <a href="#">Arşiv</a></li>
			<li> <a href="#">Makaleler</a></li>
			<li> <a href="#">Basında</a></li>
			<li> <a href="#">Ekip</a></li>
			<li> <a href="#">Mekanlar</a></li>
		</ul>
  </li>
        <li><h5><a class="yt" href="#">Destekleyenler</a></h5></li>
 
        <li><h5><a class="yt" href="#">İletişim</a></h5></li>

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

