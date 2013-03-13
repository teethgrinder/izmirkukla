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

         <div class="row">
             <div class="crew">
             <div class="two columns push-five">
                 <div class="titlestyle">
                     <h2>Crew</h2>
                 </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="twelve columns">
                     @if($subject)
            <div class="crew">
             <p>{{ $subject->content }}</p>
             </div>
             @endif

                 </div>


                </div>
     </div>
@endsection

@section('footer')
@include('partials.footer')
@endsection
