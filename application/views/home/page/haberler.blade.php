@layout('layouts.main')

@section('content')
  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div class="nine columns" role="content">
@foreach ($posts as $post)	
      <article>
				
				<div class="row">   
          <div class="six columns offset-by-one">
						
				
        <h3>	<li><a href="<?php echo URL::to('post/'.$post->id); ?>">{{$post->title}}</a></li></h3>
			</div>
			<div class="row"> 
			<div class="six columns offset-by-two">
		{{$post->content}}
	
		 </article>
		 	@endforeach
    </div>
 

     
    <!-- End Main Content -->
 
@endsection
