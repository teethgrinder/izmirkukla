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
{{ Form::open(URL::to_action('admin.shows@edit',array($show->id)), 'PUT') }}
 
	<input type="hidden" name="_method" value="PUT">
	{{Form::token()}}
	<p>
		Oyun Adı: {{ Form::text( 'name', (Input::old('name') ?  Input::old('name') : $show->name)) }}
		{{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
	</p>

	<p>
		Yaş: {{ Form::text( 'age', (Input::old('age') ?  Input::old('age') : $show->age)) }}
		{{ $errors->has( 'age' ) ? $errors->first( 'age' ) : '' }}
	</p>
	<p>
		Dil: {{ Form::text( 'language', (Input::old('language') ?  Input::old('language') : $show->language)) }}
		{{ $errors->has( 'language' ) ? $errors->first( 'language' ) : '' }}
	</p>
	<p>
		Dil: {{ Form::text( 'duration', (Input::old('duration') ?  Input::old('duration') : $show->duration)) }}
		{{ $errors->has( 'duration' ) ? $errors->first( 'duration' ) : '' }}
	</p>
	<p>
		Bilgiler: {{ Form::textarea( 'information', (Input::old('information') ?  Input::old('information') : $show->information)) }}
		{{ $errors->has( 'information' ) ? $errors->first( 'information' ) : '' }}
	</p>
	{{ Form::submit( 'Değiştir' ,array('class'=>'button radius') ) }}
	{{HTML::link_to_action('admin.shows@index','Tüm Oyunlar',array(),array('class'=>'button radius'))}}
 
 
{{ Form::close() }}
 
</div>
@endsection
