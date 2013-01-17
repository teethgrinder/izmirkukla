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

         <h3>Konferanslar</h3>
         <div id="contenta">
             <table id="conference"  class="formatHTML5" >
                 <thead>
                 <tr>
                     <th>Anlatan</th>
                     <th>Konu</th>
                     <th>Ülkesi</th>
                     <th>Mekan</th>
                     <th>Tarih</th>


                 </tr>
                 </thead>


                 <tbody>
                 @foreach($shows as $show)
                 <tr>
                     <td>{{ HTML::link_to_action('home.shows@show',$group->name,array(Str::slug($show->name))) }}</td>
                     <td>{{ HTML::link_to_action('home.shows@show',$show->name,array($show->id)) }}</td>
                     <td>{{ HTML::link_to_action('home.shows@show',$group->country,array($show->id)) }}</td>
                 </tr>
                 @endforeach

                 </tbody>
             </table>

         </div>
     </div>
     @endsection
