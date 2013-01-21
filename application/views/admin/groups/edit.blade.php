@layout('layouts.main')
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
	{{Form::token()}}

	<p>
		Grup Adı: {{ Form::text( 'name', (Input::old('name') ?  Input::old('name') : $group->name)) }}
		{{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
	</p>

	<p>
		Ülke: {{ Form::select( 'country', (CreateGroupForm::$country ? CreateGroupForm::$country : $group->country )) }}
		{{ $errors->has( 'country' ) ? $errors->first( 'country' ) : '' }}
	</p>
	<p>
		Grup Adı: {{ Form::textarea( 'information', (Input::old('information') ?  Input::old('information') : $group->information)) }}
		{{ $errors->has( 'information' ) ? $errors->first( 'information' ) : '' }}
	</p>
    <h6>İngilizce Bilgiler</h6>



        <p>
           Country: {{ Form::select( 'country_english', (CreateGroupForm::$country_english ? CreateGroupForm::$country_english : $group->country_english )) }}
            {{ $errors->has( 'country' ) ? $errors->first( 'country' ) : '' }}
        </p>
        <p>
            About: {{ Form::textarea( 'information_english', (Input::old('information_english') ?  Input::old('information_english') : $group->information_english)) }}
            {{ $errors->has( 'information_english' ) ? $errors->first( 'information_english' ) : '' }}
	    {{ Form::submit( 'Değiştir' ,array('class'=>'button radius') ) }}
    {{HTML::link_to_action('admin.groups@index','Gruplara Dön',array(),array('class' => 'button radius'))}}
{{ Form::close() }}
 
</div>
@endsection
