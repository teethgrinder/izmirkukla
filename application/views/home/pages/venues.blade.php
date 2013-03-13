@layout('layouts.main')

@section('navigation')
@include('partials.navigation')
@endsection

@section('sidebar')
@include('partials.sidebar')
@endsection

@section('content')
 <div class="row">
<div class="nine columns push-three">
    <hr />
    <div class="row">
        <div class="two columns push-four">
            <div class="titlestyle">
                <h2>Venues</h2>
            </div>
        </div>
    </div>
         <div id="contents">

             <div class="eight columns">

                 <table id="Oyunlar"  class="formatHTML5" >
                     <thead>
                     <tr>
                         <th>Venue Name</th>
                         <th>Address</th>
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