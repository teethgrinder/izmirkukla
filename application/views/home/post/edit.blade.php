@layout('layouts.main')

@section('content')
  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div class="nine columns" role="content">

      <article>
				
				<div class="row">   
          <div class="six columns offset-by-one">
					
        <h3>{{$subject->title}}</h3>
			</div>
			
			<div class="row"> 
			<div class="eight columns offset-by-one">

				{{ Form::open('edit/'.$post->id,'PUT') }}
				 <!-- author -->
			  <input type="hidden" name="_method" value="PUT">
				<!-- title field -->
				<p>{{ Form::label('title', 'Başlık') }}</p>
				{{ $errors->first('title', '<p class="error">:message</p>') }}
				<p>{{ Form::text('title', (Input::old('title') ? Input::old('title') : $subject->title)) }}</p>
				<!-- body field -->
				 
				<p>{{ Form::label('content', 'Makale') }}</p>
				{{ $errors->first('content', '<p class="error">:message</p>') }}
				<div id="editfield">
				<p>{{ Form::textarea('content', (Input::old('content') ? Input::old('content') : $subject->content))  }}</p>
				<!-- submit button -->
				<p>{{ Form::submit('Oluştur') }}</p>
				{{ Form::close() }}
				</div>
				</div>
 
		 </article>
    </div>

    <!-- End Main Content -->
 
@endsection
