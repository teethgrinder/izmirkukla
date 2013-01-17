@layout('layouts.main')
@section('navigation')
	@include('partials.dashnav')
@endsection
 
@section('content')
 <div class="row">    

     
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="twelve columns">

      
<h3>Oyun Fotoğrafı ekle </h3>
 


{{ Form::open_for_files(URL::to_action('admin.shows@add_photo',array($show->id),'POST')) }}
{{Form::token()}}

	<p>
	    Fotoğraf bilgisi girin :

        {{ Form::text('title', Input::old('title')) }}
    </p>

    <p>

        Fotoğraf seçmek için :
    </p>
    <p>
        {{  Form::file('picture') }}

    </p>
 
	{{ Form::submit( 'Ekle',array('class'=>'button radius'))  }}

{{ Form::close() }}
</div>
@endsection 
