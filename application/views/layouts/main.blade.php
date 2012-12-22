<!DOCTYPE html>
<html lang="tr">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1; charset=ISO-8859-9">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <!-- if you need normalize.css -->
        {{-- HTML::style('css/foundation/normalize.min.css') }}
        {{ HTML::style('css/foundation/foundation.css') }}  
        {{ HTML::style('css/foundation/app.css') }}  
        {{ HTML::style('js/redactor/redactor.css') }}
        {{ HTML::style('css/foundation/custom.css') }}
       
        
        <!-- begin javascript -->
        {{ HTML::script('js/foundation/modernizr.foundation.js') }}
      
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        
        <!-- begin content -->
        <div class="wrapper">

						@include('partials.navigation')
            @yield('content')
            @include('partials.sidebar')
            @include('partials.footer')
        </div>
        <!-- end content -->
         <!-- Use Googles online jQuery lib -->
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>  
        <!-- Use local jQuery lib -->
      <!--  {{ HTML::script('js/foundation/jquery.js') }}-->
        <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script> -->
        {{ HTML::script('js/redactor/redactor.js') }}
        {{ HTML::script('js/foundation/foundation.min.js') }}
 
        {{ HTML::script('js/foundation/app.js') }}
        
        {{ HTML::script('js/plugins.js') }}
        {{ HTML::script('js/main.js') }}
        
        
     <!--   <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <!-- Put this above your </body> tag -->
		 
			 <script type="text/javascript">
				$(document).ready(function()
				{$('#editfield').redactor({ imageUpload: '/home/page/photo_upload/1', lang: 'tr' });});
			</script>
        <!-- end javascript -->
        <!-- Put this above your </body> tag -->
		<script type="text/javascript">
			$(window).load(function() {
				$('#slider').orbit();
			});
		</script>
    </body>
</html>
