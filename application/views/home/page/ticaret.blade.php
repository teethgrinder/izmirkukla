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
			<div class="six columns offset-by-two">
		{{$subject->content}}
		 </article>
    </div>
 

     
    <!-- End Main Content -->
 
@endsection
