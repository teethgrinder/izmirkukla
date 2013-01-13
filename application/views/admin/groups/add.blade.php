@layout('layouts.main')
@section('navigation')
	@include('partials.dashnav')
@endsection

@section('content')
 <div class="row">    

     
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="twelve columns">

      
      <h3>YENİ GRUP</h3>
 

{{ Form::open(URL::to_action('admin.groups@add_one')) }}
{{Form::token()}}
	<p>
		Grup Adı: {{ Form::text( 'name', CreateGroupForm::old( 'name' ) ) }}
		{{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
	</p>

	<p>
		Ülke: {{ Form::select( 'country', CreateGroupForm::$country, CreateGroupForm::old( 'country' ) ) }}
		{{ $errors->has( 'country' ) ? $errors->first( 'country' ) : '' }}
	</p>
	<br />
	<p>
	Hakkında: {{ Form::textarea( 'information', CreateGroupForm::old( 'information' ),array()) }}
	{{ $errors->has( 'information' ) ? $errors->first( 'information' ) : '' }}
	 
	</p>
	{{ Form::submit( 'Ekle' ,array('class'=>'button radius')) }}

{{ Form::close() }}
 
</div>
@endsection 
