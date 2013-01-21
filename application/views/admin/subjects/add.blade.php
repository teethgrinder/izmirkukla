@layout('layouts.main')
@section('navigation')
	@include('partials.dashnav')
@endsection

@section('content')
 <div class="row">    

     
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="twelve columns">

      
      <h3>{{ $slug }}</h3>
 

{{ Form::open(URL::to_action('admin.subjects@add_one',array($slug))) }}
{{Form::token()}}
	<p>

    <h6>Başlık:</h6>
        <br />{{ Form::text( 'title', CreateSubjectForm::old( 'name' ) ) }}
           {{ $errors->has( 'title' ) ? $errors->first( 'title' ) : '' }}

	</p>

<!--	<p>
	Sayfa: {{ Form::select( 'page_id', CreateSubjectForm::page_options(),CreateSubjectForm::old('page_id') )  }}
	{{ $errors->has( 'page_id' ) ? $errors->first( 'page_id' ) : '' }}
	</p>-->
	<br />
	<p>
	<h6>İçerik:</h6>
        <br />
           {{ Form::textarea( 'content', CreateSubjectForm::old( 'content' ),array()) }}
	       {{ $errors->has( 'content' ) ? $errors->first( 'content' ) : '' }}

	</p>
	{{ Form::submit( 'Ekle' ,array('class'=>'button radius')) }}

{{ Form::close() }}
 
</div>
@endsection 
