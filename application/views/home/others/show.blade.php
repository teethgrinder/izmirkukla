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

         <div id="contents">

            <hr />
             <br />
             <br />

             <br />
             <br />
             <br />
             <br />
             <div class="information">

             </div>


             <ul class="button-group">

                 <li>{{ HTML::link_to_action('home.pages@view','Tüm Sergiler',array( Lang::line('izmirkukla.exhibitions')->get() ),array('class'=>'specialbutton')) }}</li>

             </ul>
             <div class="row">

             </div>
         </div>
     </div>

     @endsection

     @section('footer')
     @include('partials.showfooter')
     @endsection
