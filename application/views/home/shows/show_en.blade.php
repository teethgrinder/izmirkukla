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

         <br />
         <br />
         <div id="contents">

             <div id="showphotos">

                 @foreach($imageshows as $image)


                 <a href="{{ URL::to_asset('img/uploads/'.$image->id.'/large-'.$image->name) }}" title="" class="thickbox" rel="show-photos"><img src="{{ URL::to_asset('img/uploads/'.$image->id.'/page-'.$image->name) }}" alt="Plant 1" /></a>
                 @endforeach

             </div>


             <h4>{{$group->name}} PUPPET THEATRE</h4>
             <ul class="group-info">
                 <li>Show Name:&nbsp;&nbsp;&nbsp;&nbsp;
                     @if($show->name_english)
                     {{$show->name_english}}</li>
                     @else
                    {{$show->name }}
                    @endif
                 <li>Show Duration:&nbsp;&nbsp;&nbsp;&nbsp;{{$show->duration}}&nbsp;minutes</li>
                 <li>For ages:&nbsp;&nbsp;&nbsp;&nbsp;{{$show->age}}+</li>
                 <li>Show Language:&nbsp;&nbsp;&nbsp;&nbsp;{{$show->language_english}}</li>
             </ul>

             <br /><br />

             <p>{{$show->information_english}}</p>

         </div>
     </div>

     @endsection
