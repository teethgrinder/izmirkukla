@layout('layouts.main')
@section('content')
 <div class="row">    

     
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="six columns push-four">

      
      <h3>GRUP EKLE<small>Page subtitle</small></h3>
 

{{ Form::open(URL::to_action('admin.groups@add_one')) }}

	<p>
		Grup Adı: {{ Form::text( 'name', CreateGroupForm::old( 'name' ) ) }}
		{{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
	</p>

	<p>
		Ülke: {{ Form::select( 'country', CreateGroupForm::$country, CreateGroupForm::old( 'country' ) ) }}
		{{ $errors->has( 'country' ) ? $errors->first( 'country' ) : '' }}
	</p>


	{{ Form::submit( 'Ekle' ) }}

{{ Form::close() }}
</div>
@endsection 
