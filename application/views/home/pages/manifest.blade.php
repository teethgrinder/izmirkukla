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

         <div id="contents">
             <hr />

             <div class="row">
                 <div class="eight columns">


                     @if($subject)
                     <p>{{ $subject->content }}</p>
                 </div>
                 <div class="two columns ">
                     <div class="titlestyle">
                         <h1>{{$subject->title}}</h1>
                     </div>
                 </div>
             </div>


             @endif
         </div>
     </div>
     @endsection
