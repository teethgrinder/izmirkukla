@layout('layouts.main')

@section('navigation')
@include('partials.navigation')
@endsection

@section('sidebar')
@include('partials.sidebar')
@endsection

@section('content')

 <div class="row">
     <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
     <div class="nine columns push-three">
         <hr />
         <div class="row">
             <div class="two columns push-four">
                 <div class="titlestyle">
                     <h2>Newsroom</h2>
                 </div>
             </div>
         </div>
         <div id="contents">
             @if($subject)
             <h1>{{$subject->title}}</h1>
             <p>{{ $subject->content }}</p>
             @endif

         </div>
     </div>
@endsection

@section('footer')
@include('partials.footer')
@endsection