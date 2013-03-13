<!DOCTYPE html>
<html lang="tr">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gte IE 9 ]><html class="no-js ie9" lang="tr"> <![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="7. İzmir Uluslararası Kukla Günleri internet sitesi.Festival programı, sergilenecek oyunlar, eski festivaller, iletişim bilgileri ve ihtiyacınız olan herşey.">
    <meta name="keywords" content="izmir,kukla,günleri,kukla günleri,festival,kukla festivali,puppet,days,puppet festival,turkey,türkiye,selçuk,dinçer,uluslararası,international">

        <meta charset="utf-8">
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <title>{{ $page->title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <!-- if you need normalize.css -->
        {{-- HTML::style('css/foundation/normalize.min.css') }}
        {{ HTML::style('css/foundation/foundation.css') }}  
        {{ HTML::style('css/foundation/app.css') }}  
       
        <!-- {{ HTML::style('js/redactor/redactor.css') }}-->
        

        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Griffy' rel='stylesheet' type='text/css'>

        <!-- begin javascript -->
        {{ HTML::script('js/foundation/modernizr.foundation.js') }}
	    {{ HTML::style('laravel/css/jquery-ui.css') }}
        {{ HTML::style('css/foundation/webicons.css') }}
	    {{ HTML::style('js/nivo-slider/nivo-slider.css') }}
	    {{ HTML::style('js/nivo-slider/themes/light/light.css') }}
	    {{ HTML::style('js/hallo/examples/fontawesome/css/font-awesome.css') }}
    	{{ HTML::style('js/thickbox.css') }}
        {{ HTML::style('css/foundation/custom.css') }}
	    {{ HTML::style('js/calendar/css/common.css') }}

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        
        <!-- begin content -->
        <div class="wrapper">

			@yield('navigation')
            @yield('content')
            @include('partials.sidebar')
            @yield('footer')
        </div>
        <!-- end content -->
         <!-- Use Googles online jQuery lib -->




        <!-- Use local jQuery lib -->
       <!--{{ HTML::script('js/foundation/jquery.js') }}
        <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script> -->
       <!-- {{ HTML::script('js/redactor/redactor.js') }}-->

        {{ HTML::script('js/foundation/foundation.min.js') }}
        {{ HTML::script('js/foundation/app.js') }}
        {{ HTML::script('js/accordionGallery.js') }}
        {{ HTML::script('js/nivo-slider/jquery.nivo.slider.pack.js') }}

		{{ HTML::script('js/thickbox.js') }}
        {{ HTML::script('js/infogrid.js') }}
        {{ HTML::script('js/calendar/scripts/jquery.cookie.js') }}
        {{ HTML::script('js/calendar/scripts/common.js') }}
        {{ HTML::script('js/ckeditor/ckeditor.js') }}
        {{ HTML::script('js/jquery-ui.js') }}
		{{ HTML::script('js/jquery-ui-timepicker-addon.js') }}
		{{ HTML::script('js/jquery.ui.datepicker-tr.js') }}
		{{ HTML::script('js/accordion/jquery.accordion.2.0.js') }}


        <script type="text/javascript">
            $('#example2').accordion({

                canToggle: true, // Default: false

            });

        </script>
 


 
<!--			 <script type="text/javascript">
				$(document).ready(function()
				{$('#editfield').redactor({ imageUpload: '/home/page/photo_upload/1', lang: 'tr' });});
			</script>
        <!-- end javascript -->
        <!-- Put this above your </body> tag -->
		<script type="text/javascript">
			$(window).load(function() {
				$('#slider').orbit();
				$('#slider2').orbit();
				 
			});
		</script>
		<script> 
		$(window).load(function() { 
			$('#myGallery').spacegallery({loadingClass: 'loading'});
			});
		 </script> 
		
		<!-- <script>	jQuery('input[type="date"]').live('click', function(e) {e.preventDefault();}).datepicker();</script>
			<script>
        $(function() {

            $.datepicker.setDefaults( $.datepicker.regional[ "" ] );
            $( "#datepicker" ).datepicker( );
            $('#timepicker').timepicker();

          });
         </script> -->
        
  
        <script type="text/javascript">
 
		$('#nivokslider').nivoSlider({
         effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 500, // Slide transition speed
        pauseTime: 3000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
				});


		</script>
        <script type="text/javascript">
            $('#showslides').nivoSlider({
                effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
                slices: 15, // For slice animations
                boxCols: 8, // For box animations
                boxRows: 4, // For box animations
                animSpeed: 500, // Slide transition speed
                pauseTime: 3000, // How long each slide will show
                startSlide: 0, // Set starting Slide (0 index)
                directionNav: true, // Next & Prev navigation
                controlNav: true, // 1,2,3... navigation
                controlNavThumbs: false, // Use thumbnails for Control Nav
                pauseOnHover: true, // Stop animation while hovering
                manualAdvance: false, // Force manual transitions
                prevText: 'Prev', // Prev directionNav text
                nextText: 'Next', // Next directionNav text
                randomStart: false, // Start on a random slide
                beforeChange: function(){}, // Triggers before a slide transition
                afterChange: function(){}, // Triggers after a slide transition
                slideshowEnd: function(){}, // Triggers after all slides have been shown
                lastSlide: function(){}, // Triggers when last slide is shown
                afterLoad: function(){} // Triggers when slider has loaded
            });
        </script>
		<script>
                CKEDITOR.replace( 'information',{
                    toolbar: 'Full',
                    enterMode : CKEDITOR.ENTER_BR,
                    shiftEnterMode: CKEDITOR.ENTER_P

                } );
               
        </script>
        <script>
            CKEDITOR.replace( 'information_english',{
                toolbar: 'Full',
                enterMode : CKEDITOR.ENTER_BR,
                shiftEnterMode: CKEDITOR.ENTER_P
            } );

        </script>
        <script>
                CKEDITOR.replace( 'content',{
                    toolbar: 'Full',
                    enterMode : CKEDITOR.ENTER_BR,
                    shiftEnterMode: CKEDITOR.ENTER_P
                } );
               
        </script>
        <script> $('#datepicker').datetimepicker({
			 
			timeFormat: 'H:mm'
			});
			var dateFormat = $( "#datepicker" ).datetimepicker( "option", "dateFormat" );
			$( "#datepicker" ).datetimepicker( "option", "dateFormat", 'yy-mm-dd' );
			 </script>
         <script>$('#accordion-1').easyAccordion({
                     autoStart: true,
                    slideInterval: 5000
         });</script>
        <script type="text/javascript">

                     $("#info").click(function() {
                    $("#myModal").reveal();
                });

        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#buttonForModal").click(function() {
                    $("#myModal").reveal();
                });
            });
        </script>
        <script type="text/javascript">

			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-356494-4']);
			  _gaq.push(['_trackPageview']);

			  (function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();

</script>

    </div>
    </body>
</html>
