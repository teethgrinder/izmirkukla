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

         <div class="titlestyle">
             <h2>Salonlar</h2>
         </div>
         <div id="contents">
             @if($theaters)
             @foreach($theaters as $theater)
             <h1>{{$theater->name}}</h1>
             <p>{{ $theater->adress }}</p>
             @endforeach
             @endif

         </div>
     </div>
     @endsection