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
             <div class="five columns">
                 <div class="profil">
                     <div class="profilimage">
                         {{HTML::image('laravel/img/profil.jpg')}}
                     </div>
                     <div class="profiltext">
                         <h6>Selçuk Dinçer</h6>
                         <p>Festival Director</p>
                     </div>
                 </div>
             </div>

             <div class="four columns push-three">
                 @if($subject)
                 <div class="titlestyle">
                     <h1>{{$subject->title}}</h1>
                 </div>
             </div>
             <hr />
             <p>{{ $subject->content }}</p>
             @endif
         </div>
     </div>
     @endsection
