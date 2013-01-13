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
{{ Form::open(URL::to_action('admin.theaters@edit',array($theater->id))) }}
 
	<input type="hidden" name="_method" value="PUT">
	{{Form::token()}}
	<p>
		Salon Adı: {{ Form::text( 'name', (Input::old('name') ?  Input::old('name') : $theater->name)) }}
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
