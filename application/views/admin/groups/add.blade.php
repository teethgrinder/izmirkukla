@layout('layouts.dashboard')

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
        {{ Form::token() }}

         <p>
        Grup Adı:

        {{ Form::text( 'name', CreateGroupForm::old( 'name' ) ) }}
        {{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
        </p>

        <h5>Türkçe Bilgiler</h5>
	    <p>
		Ülke:
        {{ Form::select( 'country', CreateGroupForm::$country, CreateGroupForm::old( 'country' ) ) }}
		{{ $errors->has( 'country' ) ? $errors->first( 'country' ) : '' }}
	    </p>

        <h5>İngilizce Bilgiler</h5>

        <p>
        Country:
        {{ Form::select( 'country_english', CreateGroupForm::$country_english, CreateGroupForm::old( 'country_english' ) ) }}
        {{ $errors->has( 'country_english' ) ? $errors->first( 'country_english' ) : '' }}
        </p>
	    <br />
	    {{ Form::submit( 'Ekle' ,array('class'=>'button radius')) }}
        {{ Form::close() }}
 
    </div>
@endsection

@section('footer')
@include('partials.dashfooter')
@endsection