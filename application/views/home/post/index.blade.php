@layout('layouts.main')

@section('content')
  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div class="nine columns" role="content">

      <article>
				<div class="row">   
          <div class="six columns offset-by-one">
				@foreach ($posts as $post)	
        <h3>{{$post->title}}</h3>
			</div>
			<div class="row"> 
			<div class="six columns offset-by-two">
		{{$post->content}}
		@endforeach
		 </article>
    </div>
 

     
    <!-- End Main Content -->
 
@endsection
