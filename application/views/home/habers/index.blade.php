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
                     @if (Config::get('application.language') == 'tr')
                     <h2>Basında</h2>
                     @elseif (Config::get('application.language') == 'en')
                     <h2>Newsroom</h2>
                     @endif
                 </div>
             </div>
         </div>
         <div id="contents">

             <div class="eight columns">

                 <table id="Oyunlar"  class="formatHTML5" >
                     <thead>
                     <tr>
                         <th></th>
                         <th></th>


                     </tr>
                     </thead>
                     <tbody>
                     @foreach($habers as $haber)
                     <?php $day=$haber->publish_date;
                           $published =  $haber->get_language($day) ;?>
                     <tr>
                         <td>{{ HTML::link_to_action('home.habers@show',$published,array( $haber->id) ) }}</td>
                         <td>{{ HTML::link_to_action('home.habers@show',$haber->media,array($haber->id) ) }}</td>
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


