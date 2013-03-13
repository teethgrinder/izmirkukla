@layout('layouts.dashboard')
@section('navigation')
	@include('partials.dashnav')
@endsection
@section('content')

<!-- Main Content Section -->
<!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
<div class="row">    
	<div class="twelve">
	<h3>Sahne Ekle </h3>
	{{ Form::open(URL::to_action('admin.theaters@add_one')) }}
 
	{{Form::token()}}
 
	<p>
		Salon Adı: {{ Form::text( 'name', CreateTheaterForm::old( 'name' ) ) }}
		{{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
	</p>
 
     <p>
         Adres:
   
		{{ Form::text( 'adress', CreateTheaterForm::old( 'adress' )) }}
		{{ $errors->has( 'adress' ) ? $errors->first( 'adress' ) : '' }}
 
         </p>
	{{ Form::submit( 'Ekle' ,array('class'=>'button radius')) }}
 
    {{ Form::close() }}
   
 </div>
@endsection

@section('footer')
@include('partials.dashfooter')
@endsection