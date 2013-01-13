@layout('layouts.main')
@section('content')
 <div class="row">    

     
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="eight columns push-four">

      
      <h3>GRUP Bilgileri<small>Page subtitle</small></h3>
 

{{ Form::open_for_files(URL::to_action('admin.groups@add_two')) }}
{{Form::token()}}

	<p>{{ Form::text('name', Input::old('name')) }}
	{{  Form::file('picture') }}
	</p>
 
	{{ Form::submit( 'Ekle',array('class'=>'button radius'))  }}

{{ Form::close() }}
</div>
@endsection 
