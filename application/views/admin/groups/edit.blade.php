@layout('layouts.dashboard')
@section('navigation')
	@include('partials.dashnav')
@endsection
@section('content')
 <div class="row">    

    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="eight columns push-two">

      
        <h3>Grup Bilgilerini Düzenle</h3>
        {{ Form::open(URL::to_action('admin.groups@edit',array($group->id)), 'PUT') }}
 
	    <input type="hidden" name="_method" value="PUT">
	    {{ Form::token() }}

	    <p>
		Grup Adı:
        {{ Form::text( 'name', (Input::old('name') ?  Input::old('name') : $group->name)) }}
		{{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
	    </p>

	    <p>
		Ülke:
        {{ Form::text( 'country', (Input::old('country') ? Input::old('country')  : $group->country )) }}
		{{ $errors->has( 'country' ) ? $errors->first( 'country' ) : '' }}
	    </p>


        <h6>İngilizce Bilgiler :</h6>

        <p>
        Country:
        {{ Form::text( 'country_english', (Input::old('country_english')  ? Input::old('country_english') : $group->country_english )) }}
        {{ $errors->has( 'country' ) ? $errors->first( 'country' ) : '' }}
        </p>


        {{ Form::submit( 'Değiştir' ,array('class'=>'button radius') ) }}
        {{HTML::link_to_action('admin.groups@index','Gruplara Dön',array(),array('class' => 'button radius'))}}

        {{ Form::close() }}
 
    </div>
@endsection


@section('footer')
@include('partials.dashfooter')
@endsection
