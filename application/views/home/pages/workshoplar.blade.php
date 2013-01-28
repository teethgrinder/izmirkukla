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

        <div class="six columns">

            <ul class="postit">

             @foreach($others as $other)
             <li>
                 <div class="post-it">

                     <h6>{{ HTML::link_to_action('home.shows@show',$other->name) }}</h6>
                     <p>{{ HTML::link_to_action('home.shows@show',Str::words(strip_tags($other->information),10)) }}</p>
                     <adress>
                         <p>{{ HTML::link_to_action('home.shows@show',$other->place) }}</p>
                         <p>{{ HTML::link_to_action('home.shows@show',$other->date) }}</p>
                     </adress>


                 </div>
             </li>
             @endforeach

            </ul>
         </div>
         <div class="two columns">
             <div class="titlestyle">
                 <h2>Workshoplar</h2>
             </div>
          </div>

        </div>
    </div>

     @endsection
