					<!-- Top nav bar - responsive -->	
	<div class="fixed contain-to-grid">
	<nav class="top-bar">
		<ul>
			
			<li class="name"><h1><a class="logoukraine" href="{{ URL::to('/') }}">{{HTML::image('laravel/img/ukraynalogo.png')}}</a>	</h1></li>
		<section>
		<ul class="right button-group radius nav-bar">
				@foreach($links as $link)
				<li><a href="<?php echo URL::to($link->title); ?>" class="button radius">{{$link->slug}}</a></li>
				@endforeach
			</ul>
		 
		</ul>
		
			<!--<ul class="right button-group radius">
				<li><a href="<?php echo URL::to('/'); ?>" class="button radius">Anasayfa</a></li>
				<li><a href="<?php echo URL::to('konsolosluk'); ?>" class="button radius">Konsolosluk</a></li>
				<li><a href="<?php echo URL::to('vize'); ?>" class="button radius">Vizeler</a></li>
				<li><a href="{{ URL::to('iletisim') }}" class="button radius">İletişim</a></li>
				<li><a href="{{ URL::to('egitim') }}" class="button radius">Eğitim</a></li>
				<li><a href="{{ URL::to('ticaret') }}" class="button radius">Ticaret</a></li> 
			</ul>-->
			
			
		
	</nav>
	</div>
  <!-- End Nav -->
