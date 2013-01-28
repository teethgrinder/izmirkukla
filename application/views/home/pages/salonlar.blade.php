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
                 <div class="eight columns">

        <ul class="custom-list">
             @if($theaters)
             @foreach($theaters as $theater)
         <li><div class="theaters">
             <h6>{{$theater->name}}</h6>
             <p>{{ $theater->adress }}</p>
         </div></li>
             @endforeach
             @endif
        </ul>
         </div>

            <div class="two columns push-one">
                 <div class="titlestyle">
                 <h2>Salonlar</h2>
             </div>
             </div>
             </div>



     </div>
     @endsection