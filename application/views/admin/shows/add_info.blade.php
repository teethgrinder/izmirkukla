@layout('layouts.main')
@section('content')
 <div class="row">    

     
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="six columns push-four">

      
      <h3>Oyun Bilgileri<small>Page subtitle</small></h3>
 

{{ Form::open_for_files(URL::to_action('admin.shows@add_two')) }}

	<p>
	Oyun bilgileri: {{ Form::textarea( 'information', CreateShowForm::old( 'information' ) ) }}
	{{ $errors->has( 'information' ) ? $errors->first( 'information' ) : '' }}
	</p>
	<p>{{ Form::text('name', Input::old('name')) }}
	{{  Form::file('picture') }}
	</p>
 
	{{ Form::submit( 'Ekle' ) }}

{{ Form::close() }}
</div>
@endsection 
