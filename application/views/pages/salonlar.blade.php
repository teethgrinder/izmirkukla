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
         <div class="row">
             <div class="two columns push-four">
                 <div class="titlestyle">
                     <h2>Salonlar</h2>
                 </div>
             </div>
         </div>
         <div id="contents">

             <div class="seven columns">

                 <table id="Oyunlar"  class="formatHTML5" >
                     <thead>
                     <tr>
                     <th>SALON ADI</th>
                     <th>ADRES</th>
                     </tr>
                     </thead>
                     <tbody>

                 @foreach($theaters as $theater)
                     <tr>
                        <td>{{ $theater->name }} </td>
                        <td>{{ $theater->adress }} </td>

                     </tr>
                @endforeach

                     </tbody>
                 </table>
             </div>


        </div>
     </div>
@endsection

@section('footer')
@include('partials.footer')
@endsection