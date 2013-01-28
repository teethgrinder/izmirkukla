<!DOCTYPE html>
<html lang="tr">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1;">
    <title></title>
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

    {{ HTML::style('js/hallo/examples/fontawesome/css/font-awesome.css') }}
    {{ HTML::style('js/thickbox.css') }}
    <!--{{ HTML::style('css/foundation/custom.css') }}-->
    {{ HTML::style('js/calendar/css/common.css') }}
    {{ HTML::style('js/horizontal.css') }}


</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<!-- begin content -->
<div class="wrapper">

    @yield('navigation')
    @yield('content')
    @yield('sidebar')
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




{{HTML::script('js/thickbox.js')}}

{{HTML::script('js/infogrid.js')}}


{{HTML::script('js/calendar/scripts/jquery.cookie.js')}}
{{HTML::script('js/calendar/scripts/common.js')}}
{{ HTML::script('js/ckeditor/ckeditor.js') }}
{{ HTML::script('js/jquery-ui.js') }}
{{ HTML::script('js/jquery-ui-timepicker-addon.js') }}
{{ HTML::script('js/jquery.ui.datepicker-tr.js') }}
{{ HTML::script('js/accordion/jquery.accordion.2.0.js') }}
{{ HTML::script('js/jquery.horizontalaccordion.js') }}





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


<!-- <script>	jQuery('input[type="date"]').live('click', function(e) {e.preventDefault();}).datepicker();</script>
    <script>
$(function() {

    $.datepicker.setDefaults( $.datepicker.regional[ "" ] );
    $( "#datepicker" ).datepicker( );
    $('#timepicker').timepicker();

  });
 </script>-->



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



</body>
</html>
