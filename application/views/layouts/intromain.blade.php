<!DOCTYPE html>
<html lang="tr">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gte IE 9 ]><html class="no-js ie9" lang="tr"> <![endif]-->
<head>

    <meta charset="utf-8">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- if you need normalize.css -->
    {{-- HTML::style('css/foundation/normalize.min.css') }}
    {{ HTML::style('css/foundation/foundation.css') }}


    <!-- {{ HTML::style('js/redactor/redactor.css') }}-->


    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Griffy' rel='stylesheet' type='text/css'>

    <!-- begin javascript -->

    {{ HTML::style('css/foundation/customintro.css') }}


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<!-- begin content -->
<div class="wrapper">


    @yield('content')

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







<!--			 <script type="text/javascript">
				$(document).ready(function()
				{$('#editfield').redactor({ imageUpload: '/home/page/photo_upload/1', lang: 'tr' });});
			</script>
        <!-- end javascript -->
<!-- Put this above your </body> tag -->


<!-- <script>	jQuery('input[type="date"]').live('click', function(e) {e.preventDefault();}).datepicker();</script>
    <script>
$(function() {

    $.datepicker.setDefaults( $.datepicker.regional[ "" ] );
    $( "#datepicker" ).datepicker( );
    $('#timepicker').timepicker();

  });
 </script> -->





<script>$('#action div')
        .hover(function() {
            $(this).animate({ left: 20 }, 'slow');
        }, function() {
            $(this).animate({ left: 0 }, 'slow');
        });</script>

</div>
</body>
</html>
