@layout('layouts.dashboard')
@section('navigation')
	@include('partials.dashnav')
@endsection

@section('content')
 <div class="row">    

     
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="eight columns push-two">

      
      <h3>YENİ Gösteri</h3>
 

        {{ Form::open(URL::to_action('admin.showings@add')) }}
        {{ Form::token() }}


	    <p>
		Oyun:
        {{ Form::select( 'show_id', CreateShowingForm::show_options(), CreateShowingForm::old( 'show_id' ) ) }}
		{{ $errors->has( 'show_id' ) ? $errors->first( 'show_id' ) : '' }}
	    </p>
	    <p>
	    Salon:
    	{{ Form::select( 'theater_id', CreateShowingForm::theater_options(),CreateShowingForm::old('theater_id') )  }}
    	{{ $errors->has( 'theater_id' ) ? $errors->first( 'theater_id' ) : '' }}
    	</p>
        <!--{{ Form::date('performance_date', Input::old('performance_date') )   }} -->
	    <div class="row">
            <div class="six columns">
			    Tarih: <input type="text" id="datepicker" name="performance_date" />
	        </div>
    	</div>
		<p>
		Ücreti:
        {{ Form::text( 'price', CreateShowingForm::old( 'price' ) ) }}
		{{ $errors->has( 'price' ) ? $errors->first( 'price' ) : '' }}
	    </p>
	    {{ Form::submit( 'Ekle' ,array('class'=>'button radius')) }}
        {{ Form::close() }}
 
    </div>
@endsection


@section('footer')
@include('partials.dashfooter')
@endsection