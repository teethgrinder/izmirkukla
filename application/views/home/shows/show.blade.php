@layout('layouts.main')

@section('navigation')
	@include('partials.navigation')
@endsection

@section('sidebar')
  @include('partials.sidebar')
@endsection

@section('content')
 <div class="row">    

     
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="nine columns push-three">
		
		<br />
        <br />
  <div id="contents">	
 
 <div id="showphotos">

      @foreach($imageshows as $image)
    

     <a href="{{ URL::to_asset('img/uploads/'.$image->id.'/large-'.$image->name) }}" title="" class="thickbox" rel="show-photos"><img src="{{ URL::to_asset('img/uploads/'.$image->id.'/page-'.$image->name) }}" alt="Plant 1" /></a>
     @endforeach 

 </div>

 
	<h4>{{$group->name}}</h4>
 <ul class="group-info">
	<li>Oyun Adı:{{$show->name}}</li>
    <li>Oyun Süresi:{{$show->duration}}</li>
    <li>Yaş Grubu:{{$show->age}}+</li>
    <li>Oyun Dili:{{$show->language}}</li>
 </ul>


	
	<p>{{$show->information}}</p>
 
 </div>
  </div>
  
@endsection 
