@layout('layouts.main')
@section('navigation')
@include('partials.dashnav')
@endsection
@section('content')

<!-- Main Content Section -->
<!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="twelve columns ">
        <h3>Add Exhibition</h3>
        {{ Form::open(URL::to_action('admin.others@add_other_english')) }}
        {{Form::token()}}
        {{Form::hidden('slug','exhibitions') }}
        <div class="row">
            <p>
            <h6>Sergi İngilizce Adı:</h6>{{ Form::text( 'name_english', CreateOtherForm::old( 'name_english' ) ) }}
            {{ $errors->has( 'name_english' ) ? $errors->first( 'name_english' ) : '' }}
            </p>
            <p>

            <h6>Sergi Sahibi:</h6>{{ Form::text( 'actor', CreateOtherForm::old( 'actor' ) ) }}
            {{ $errors->has( 'actor' ) ? $errors->first( 'actor' ) : '' }}
            </p>
            <p>
            <h6>About:</h6>{{ Form::textarea( 'information_english', CreateOtherForm::old( 'information_english' ) ) }}
            {{ $errors->has( 'information_english' ) ? $errors->first( 'information_english' ) : '' }}
            </p>
            {{Form::hidden('slug','exhibitions') }}


            <p>

            <h6>Yer:</h6>{{ Form::text( 'place', CreateOtherForm::old( 'place' ) ) }}
            {{ $errors->has( 'place' ) ? $errors->first( 'place' ) : '' }}
            </p>
            <p>

            <h6>Tarih:</h6>{{ Form::text( 'date', CreateOtherForm::old( 'date' ) ) }}
            {{ $errors->has( 'date' ) ? $errors->first( 'date' ) : '' }}
            </p>
            {{ Form::submit( 'Ekle' ,array('class'=>'button radius')) }}

            {{ Form::close() }}

        </div>
        @endsection