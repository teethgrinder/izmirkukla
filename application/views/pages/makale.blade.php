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
             <div class="five columns">
                 <div class="profil">
                     <div class="profilimage">
                         {{HTML::image('laravel/img/profil.jpg')}}
                     </div>
                     <div class="profiltext">
                         <h6>{{ $subject->writer }}</h6>
                     </div>
                 </div>
             </div>

             <div class="four columns push-three">
                 @if($subject)

             </div>
             <hr />
         <div class="article">
             <p>{{ $subject->content }}</p>
         </div>
             @endif
         </div>
         </div>
         </div>
     </div>
     @endsection

     @section('footer')
     @include('partials.footer')
     @endsection