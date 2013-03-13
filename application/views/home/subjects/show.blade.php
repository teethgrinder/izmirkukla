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
                             {{ HTML::image('laravel/img/'.$subject->image)}}
                         </div>
                         <div class="profiltext">
                             <br />
                             <h6>{{ $subject->writer }}</h6>
                             <br />
                         </div>
                     </div>
                 </div>

             <div class="four columns push-three">
                 @if($subject)
                 <div class="titlestyle">
                     <h1>Makale</h1>
                 </div>

             </div>
             <hr class="special" />
             <br />
             <div class="article">
             <h2 class="makale">{{ $subject->title }}</h2>
                 <br />
                 <br />
                 <p>{{ $subject->content }}</p>
             </div>
             @endif
             <br />
             <br />

             {{HTML::link_to_action('home.pages@view','Geri',array(Lang::line('izmirkukla.articles')->get()),array('class'=>'specialbutton'))}}
         </div>
     </div>
     @endsection

     @section('footer')
     @include('partials.footer')
     @endsection