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

         <br />
         <br />
         <div id="contents">

             <div id="showphotos">

                 @foreach($imageshows as $image)


                 <a href="{{ URL::to_asset('img/uploads/'.$image->id.'/large-'.$image->name) }}" title="" class="thickbox" rel="show-photos"><img src="{{ URL::to_asset('img/uploads/'.$image->id.'/page-'.$image->name) }}" alt="Plant 1" /></a>
                 @endforeach

             </div>


             <h4>{{$group->name}} KUKLA TİYATROSU</h4>
             <ul class="group-info">
                 <li>Oyun Adı:&nbsp;&nbsp;&nbsp;&nbsp;  {{$show->name}}</li>
                 <li>Oyun Süresi:&nbsp;&nbsp;&nbsp;&nbsp;{{$show->duration}}&nbsp;dakika</li>
                 <li>Yaş Grubu:&nbsp;&nbsp;&nbsp;&nbsp;{{$show->age}}+</li>
                 <li>Oyun Dili:&nbsp;&nbsp;&nbsp;&nbsp;{{$show->language}}</li>
             </ul>

             <br /><br />

             <p>{{$show->information}}</p>

         </div>
     </div>

     @endsection

     @section('footer')
     @include('partials.footer')
     @endsection
