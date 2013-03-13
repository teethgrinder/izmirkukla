@layout('layouts.dashboard')
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

        {{ Form::token() }}

        <div class="row">
            <p>

            <h6>Tiyatro Grubu:</h6>


            {{ Form::select( 'group_id', CreateShowForm::group_options(),CreateShowForm::old('group_id') )  }}
            {{ $errors->has( 'group_id' ) ? $errors->first( 'group_id' ) : '' }}

            </p>

        </div>

        <div class="row">

            <div class="three columns">

                <h6>Oyun Adı:</h6>
                {{ Form::text( 'name', CreateShowForm::old( 'name' ) ) }}
                {{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
            </div>

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
                <h6>  Süre: </h6>

                {{ Form::text( 'duration', CreateShowForm::old( 'duration' ) ) }}
                {{ $errors->has( 'duration' ) ? $errors->first( 'duration' ) : '' }}

            </div>

        </div>

        <p>
        <h6>  Hakkında: </h6>
        {{ Form::textarea( 'information', CreateShowForm::old( 'information' ) ) }}
        {{ $errors->has( 'information' ) ? $errors->first( 'information' ) : '' }}
        </p>
        <h5>İNGİLİZCE BİLGİLER</h5>
        <br />

        <div class="row">

            <div class="three columns">

                <h6>Show name:</h6>
                {{ Form::text( 'name_english', CreateShowForm::old( 'name_english' ) ) }}
                {{ $errors->has( 'name_english' ) ? $errors->first( 'name_english' ) : '' }}

            </div>

            <div class="three columns">

                <h6>  Language: </h6>
                {{ Form::text( 'language_english', CreateShowForm::old( 'language_english' ) ) }}
                {{ $errors->has( 'language_english' ) ? $errors->first( 'language_english' ) : '' }}

            </div>

        </div>

        <p>

                <h6>  About: </h6>
                {{ Form::textarea( 'information_english', CreateShowForm::old( 'information_english' ) ) }}
                {{ $errors->has( 'information_english' ) ? $errors->first( 'information_english' ) : '' }}

        </p>
        <p>
			<h6>  Video Link: </h6> {{ Form::text( 'video_link', (Input::old('video_link') ?  Input::old('video_link') : $show->video_link)) }}
            {{ $errors->has( 'video_link' ) ? $errors->first( 'video_link' ) : '' }}
            </p>

        {{ Form::submit( 'Ekle' ,array('class'=>'button radius')) }}
        {{ Form::close() }}

    </div>
    @endsection


@section('footer')
@include('partials.dashfooter')
@endsection
