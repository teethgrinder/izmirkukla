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
         <br />
         <br />
         <div id="contents">

             <div id="showphotos">

                 @foreach($imageshows as $image)


                 <a href="{{ URL::to_asset('img/uploads/'.$image->id.'/large-'.$image->name) }}" title="" class="thickbox" rel="show-photos"><img src="{{ URL::to_asset('img/uploads/'.$image->id.'/page-'.$image->name) }}" alt="Plant 1" /></a>
                 @endforeach

             </div>
             <br />
             <br />
             <br />
             <br />

             <div class="four columns push-one">

                 <h4>{{ $group->name }}</h4>
             </div>
             <div class="three columns">

                 <h4><a href="#" >{{HTML::image('laravel/img/buybilet_en.png')}}</a></h4>
             </div>

         </div>
         <br />
         <br /> <br />
         <br />
         <br />

             <table class="formatHTML5-show">
                 <thead>
                 <tr>
                     <th> Country </th>
                     <th> Show Name</th>
                     <th> Time </th>
                     <th> Age </th>
                     <th> Language </th>


                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <td>{{ $show->country_english }}</td>
                     <td>{{ $show->name_english }}</td>
                     <td>{{ $show->duration }}&nbsp;minutes</td>
                     <td>{{ $show->age }}</td>
                     <td>{{ $show->language_english }}</td>


                 </tr>

                 </tbody>
             </table>


             <br /><br />
             <div class="information">
                 <p>{{ $show->information_english }}</p>
             </div>

             <div class="row">
                 <div class="six columns offset-by-one">
                     {{ $show->video_link }}
                 </div>
             </div>
         <br />
         <br />
         <br />
        
         </div>

         @endsection

         @section('footer')
         @include('partials.singleshowfooter')
         @endsection
