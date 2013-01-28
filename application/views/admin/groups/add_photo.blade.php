@layout('layouts.dashboard')
@section('navigation')
	@include('partials.dashnav')
@endsection
@section('content')
 <div class="row">    

    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="twelve columns ">

        <h3>Grupla İlgili Fotoğraflar</h3>
 
 <!--   {{ Form::open_for_files('photogroup/'.$id,'POST') }}-->
        {{ Form::open_for_files(URL::to_action('admin.groups@add_photo',array($group->id))) }}
        {{ Form::token() }}

	    <p>
	    Fotoğraf tagı:
        {{ Form::text('tag', Input::old('tag')) }}
        </p>

        <p>
        Fotoğraf seçmek için :
        {{  Form::file('picture') }}
        </p>

        <p>
	    {{ Form::submit( 'Ekle',array('class'=>'button radius'))  }}
        </p>
        {{ Form::close() }}
   </div>
@endsection

@section('footer')
@include('partials.dashfooter')
@endsection