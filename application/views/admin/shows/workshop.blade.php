@layout('layouts.main')
@section('navigation')
@include('partials.dashnav')
@endsection
@section('content')

<!-- Main Content Section -->
<!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
<div class="row">
    <div class="twelve columns ">
        <h3>Oyun Ekle</h3>
        {{ Form::open(URL::to_action('admin.shows@add_one')) }}


        {{Form::token()}}
        <div class="row">
            <p>
            <h6>Oyun Adı:</h6>{{ Form::text( 'name', CreateShowForm::old( 'name' ) ) }}
            {{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
            </p>
            <p>

            <h6>Tiyatro Grubu:</h6>


            {{ Form::select( 'group_id', CreateShowForm::group_options(),CreateShowForm::old('group_id') )  }}
            {{ $errors->has( 'group_id' ) ? $errors->first( 'group_id' ) : '' }}


            </p>
            <p>
            <h6> Gösteri türü: </h6>{{ Form::select( 'type', CreateShowForm::$event, CreateShowForm::old( 'type' ) ) }}
            {{ $errors->has( 'type' ) ? $errors->first( 'type' ) : '' }}
            </p>
        </div>
        <div class="row">
            <div class="three columns">
                <h6>  Yaş: </h6>

                {{ Form::text( 'age', CreateShowForm::old( 'age' )) }}
                {{ $errors->has( 'age' ) ? $errors->first( 'age' ) : '' }}
            </div>

            <div class="three columns">
                <h6>  Dil: </h6>


                {{ Form::text( 'language', CreateShowForm::old( 'language' ) ) }}
                {{ $errors->has( 'language' ) ? $errors->first( 'language' ) : '' }}
            </div>
            <div class="three columns">
                <h6>  Language: </h6>


                {{ Form::text( 'language_english', CreateShowForm::old( 'language_english' ) ) }}
                {{ $errors->has( 'language_english' ) ? $errors->first( 'language_english' ) : '' }}
            </div>
            <div class="three columns">
                <h6>  Süre: </h6> {{ Form::text( 'duration', CreateShowForm::old( 'duration' ) ) }}
                {{ $errors->has( 'duration' ) ? $errors->first( 'duration' ) : '' }}
            </div>
        </div>

        <p>
        <h6>  Hakkında: </h6> {{ Form::textarea( 'information', CreateShowForm::old( 'information' ) ) }}
        {{ $errors->has( 'information' ) ? $errors->first( 'information' ) : '' }}
        </p>

        <p>
        <h6>  About: </h6> {{ Form::textarea( 'information_english', CreateShowForm::old( 'information_english' ) ) }}
        {{ $errors->has( 'information_english' ) ? $errors->first( 'information_english' ) : '' }}
        </p>

        {{ Form::submit( 'Ekle' ,array('class'=>'button radius')) }}

        {{ Form::close() }}

    </div>
    @endsection