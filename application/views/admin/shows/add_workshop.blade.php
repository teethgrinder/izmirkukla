@layout('layouts.main')
@section('navigation')
@include('partials.dashnav')
@endsection
@section('content')

<!-- Main Content Section -->
<!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="twelve columns ">
        <h3>Workshop  Ekle</h3>
        {{ Form::open(URL::to_action('admin.others@add_other')) }}
        {{Form::token()}}
        {{Form::hidden('slug','workshoplar') }}
        <div class="row">
            <p>
            <h6>Workshop Adı:</h6>{{ Form::text( 'name', CreateOtherForm::old( 'name' ) ) }}
            {{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
            </p>

            <p>

            <h6>Anlatan:</h6>{{ Form::text( 'actor', CreateOtherForm::old( 'actor' ) ) }}
            {{ $errors->has( 'actor' ) ? $errors->first( 'actor' ) : '' }}
            </p>

            <p>
            <p>

            <h6>Konusu:</h6>{{ Form::textarea( 'information', CreateOtherForm::old( 'information' ) ) }}
            {{ $errors->has( 'information' ) ? $errors->first( 'information' ) : '' }}
            </p>

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