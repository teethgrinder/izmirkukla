@layout('layouts.main')
@section('navigation')
@include('partials.dashnav')
@endsection
@section('content')

<!-- Main Content Section -->
<!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
<div class="row">
    <div class="twelve columns ">
        <h3>Haber Ekle</h3>
        {{ Form::open_for_files(URL::to_action('admin.shows@add_one')) }}


        {{Form::token()}}


        <div class="row">
            <div class="three columns">


                <h6>Medya:</h6>{{ Form::text( 'media', CreateShowForm::old( 'media' ) ) }}
                {{ $errors->has( 'media' ) ? $errors->first( 'media' ) : '' }}
            </div>
            <div class="three columns pull-five">


                    Tarih: <input type="text" id="datepicker" name="published_at" />


            </div>
        </div>
        <div class="row">
            <div class="three columns">
               Fotoğraf tagı:

                {{ Form::text('tag', Input::old('tag')) }}
            </div>

        </div>
        </div>

        <p>
        <p>

            Fotoğraf seçmek için :
        </p>
        <p>
            {{  Form::file('picture') }}

        </p>



        {{ Form::submit( 'Ekle' ,array('class'=>'button radius')) }}

        {{ Form::close() }}


    @endsection