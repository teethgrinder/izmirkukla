@layout('layouts.dashboard')
@section('navigation')
	@include('partials.dashnav')
@endsection
@section('content')
 <div class="row">    

     
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="eight columns push-two">

<h3>oyun Bilgilerini Düzenle</h3>
{{ Form::open(URL::to_action('admin.shows@edit',array($show->id)), 'PUT') }}
 
	<input type="hidden" name="_method" value="PUT">
	{{ Form::token() }}
    <div class="row">
        <div class="three columns">
	    <p>
            <h6>Oyun Adı:</h6>
            {{ Form::text( 'name', (Input::old('name') ?  Input::old('name') : $show->name)) }}
		    {{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
	    </p>

        </div>
        <div class="three columns">

        <p>
            <h6>  Yaş: </h6>
            {{ Form::text( 'age', (Input::old('age') ?  Input::old('age') : $show->age)) }}
		    {{ $errors->has( 'age' ) ? $errors->first( 'age' ) : '' }}
	    </p>
        </div>

        <div class="three columns">
            <p>
            <h6>  Dil: </h6>
            {{ Form::text( 'language', (Input::old('language') ?  Input::old('language') : $show->language)) }}
            {{ $errors->has( 'language' ) ? $errors->first( 'language' ) : '' }}
            </p>
        </div>

        <div class="three columns">
            <p>
            <h6>  Süre: </h6>
            {{ Form::text( 'duration', (Input::old('duration') ?  Input::old('duration') : $show->duration)) }}
            {{ $errors->has( 'duration' ) ? $errors->first( 'duration' ) : '' }}
            </p>
        </div>
    </div>
	    <p>
		    Bilgiler:
            {{ Form::textarea( 'information', (Input::old('information') ?  Input::old('information') : $show->information)) }}
		    {{ $errors->has( 'information' ) ? $errors->first( 'information' ) : '' }}
	    </p>

        <div class="row">

            <div class="three columns">
                <p>
                <h6>Show Name:</h6>
                {{ Form::text( 'name_english', (Input::old('name_english') ?  Input::old('name_english') : $show->name_english)) }}
                {{ $errors->has( 'name_english' ) ? $errors->first( 'name_english' ) : '' }}
                </p>
            </div>

            <div class="three columns">
                <p>
                <h6>  Language: </h6>
                {{ Form::text( 'language_english', (Input::old('language_english') ?  Input::old('language_english') : $show->language_english)) }}
                {{ $errors->has( 'language_english' ) ? $errors->first( 'language_english' ) : '' }}
                </p>
            </div>

            <div class="three columns">
                <p>
                <h6>  Süre: </h6> {{ Form::text( 'duration', (Input::old('duration') ?  Input::old('duration') : $show->duration)) }}
                {{ $errors->has( 'duration' ) ? $errors->first( 'duration' ) : '' }}
                </p>
            </div>
        </div>
            <p>

            About:
            {{ Form::textarea( 'information_english', (Input::old('information_eglish') ?  Input::old('information_english') : $show->information_english)) }}
            {{ $errors->has( 'information_english' ) ? $errors->first( 'information_english' ) : '' }}
         </p>

	{{ Form::submit( 'Değiştir' ,array('class'=>'button radius') ) }}
	{{HTML::link_to_action('admin.shows@index','Tüm Oyunlar',array(),array('class'=>'button radius'))}}

 
{{ Form::close() }}
 
</div>
@endsection

@section('footer')
@include('partials.dashfooter')
@endsection