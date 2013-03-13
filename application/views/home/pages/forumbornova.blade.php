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
         <hr />
         <br />
         <div class="row">
             <div class="ten columns offset-by-one">
                 <div class="titlestyle">
                     <h4>{{$subject->title}}</h4>
                 </div>
             </div>
             </div>
         <br />
         <br />
         <br />
         <br />
         <div class="row">



                 <div class="ten columns offset-by-one">


                 @if($subject)
                  <div class="article">
                     <p>{{ $subject->content }}</p>
                  </div>


                 </div>




             @endif
         </div>
     </div>
@endsection

@section('footer')
@include('partials.footer')
@endsection
