@layout('layouts.dashboard')
@section('navigation')
	@include('partials.dashnav')
@endsection
@section('content')
 <div class="row">    
    <div class="eight columns push-two">
      <h3>Grup Bilgilerini Düzenle</h3>
        {{ Form::open(URL::to_action('admin.theaters@edit',array($theater->id))) }}
 
	    <input type="hidden" name="_method" value="PUT">
	    {{ Form::token() }}
	    <p>
		Salon Adı:
        {{ Form::text( 'name', (Input::old('name') ?  Input::old('name') : $theater->name)) }}
		{{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
    	</p>

	    <p>
         Adres:
		{{ Form::text( 'adress', (Input::old('adress') ?  Input::old('adress') : $theater->adress)) }}
		{{ $errors->has( 'adress' ) ? $errors->first( 'adress' ) : '' }}
         </p>
	    {{ Form::submit( 'Değiştir' ,array('class'=>'button radius') ) }}
        {{HTML::link_to_action('admin.theaters@index','Tüm Salonlar',array(),array('class' => 'button radius'))}}
        {{ Form::close() }}
 
    </div>
@endsection

@section('footer')
@include('partials.dashfooter')
@endsection