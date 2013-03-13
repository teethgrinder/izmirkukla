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


         <div id="slider">
             {{HTML::image('laravel/img/afisizmir.png')}}
             {{HTML::image('laravel/img/afisbornova.png')}}
             {{HTML::image('laravel/img/afistansas.png')}}
             {{HTML::image('laravel/img/bnrgruplar.png')}}
             {{HTML::image('laravel/img/bnrsergi.png')}}





         </div>
         <br/>

         <div class="information">
             <h1 class="welcome">7. İzmir Uluslararası Kukla Günleri <br /><br />  7 Mart'ta Başlıyor...</h1>
         </div>
         <div class="row">


             <div class="five columns">

                 <div class="panel">
                     <a href="#" data-reveal-id="forumbornova">{{HTML::image('laravel/img/banertansas2.png')}} <h6>Tansaş Kukla Şenliği</h6></a>
                 </div>
             </div>

             <div class="five columns">

                 <div class="panel">

                     <a href="#" data-reveal-id="forumbornova">{{HTML::image('laravel/img/bnrbornova2.png')}} <h6>V. Forum Bornova Kukla Oyunu Yarışması</h6></a>


                 </div>
             </div>




         </div>
     </div>
     @endsection

     @section('footer')
     @include('partials.footer')
     @endsection
