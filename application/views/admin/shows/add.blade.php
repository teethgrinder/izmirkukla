@layout('layouts.main')
@section('navigation')
	@include('partials.dashnav')
@endsection
@section('content')

<!-- Main Content Section -->
<!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
<div class="row">    
	<div class="twelve columns ">
	<h3>Oyun Ekle</h3>
	{{ Form::open(URL::to_action('admin.shows@add_one')) }}
	{{ Form::hidden('group_id', $group->id) }}
	
	{{Form::token()}}
<div class="row">
	<p>
		Oyun Adı: {{ Form::text( 'name', CreateShowForm::old( 'name' ) ) }}
		{{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
	</p>
    <p>
        Gösteri türü: {{ Form::select( 'type', CreateShowForm::$event, CreateShowForm::old( 'type' ) ) }}
        {{ $errors->has( 'type' ) ? $errors->first( 'type' ) : '' }}
    </p>
</div>
<div class="row">
	<div class="three columns">
   Yaş: 
   
		{{ Form::text( 'age', CreateShowForm::old( 'age' )) }}
		{{ $errors->has( 'age' ) ? $errors->first( 'age' ) : '' }}
	  </div>
 
	 <div class="three columns">
    Dil: 
  
 
{{ Form::text( 'language', CreateShowForm::old( 'language' ) ) }}
{{ $errors->has( 'language' ) ? $errors->first( 'language' ) : '' }}
    </div>
    <div class="three columns">
       Language:


        {{ Form::text( 'language_english', CreateShowForm::old( 'language_english' ) ) }}
        {{ $errors->has( 'language_english' ) ? $errors->first( 'language_english' ) : '' }}
    </div>
     <div class="three columns">
			 Süre: {{ Form::text( 'duration', CreateShowForm::old( 'duration' ) ) }}
		{{ $errors->has( 'duration' ) ? $errors->first( 'duration' ) : '' }}
		</div>
    </div>
 
  <p>
	Hakkında: {{ Form::textarea( 'information', CreateShowForm::old( 'information' ) ) }}
	{{ $errors->has( 'information' ) ? $errors->first( 'information' ) : '' }}
	</p>
	


	{{ Form::submit( 'Ekle' ,array('class'=>'button radius')) }}
 
{{ Form::close() }}
   
 </div>
@endsection 
