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
             <div class="two columns push-four ">
                 <div class="titlestyle">
                     <h2>Shows</h2>
                 </div>
             </div>
         </div>
         <div class="row">

             <div class="nine columns">

                 <table id="Oyunlar"  class="formatHTML5" >
                     <thead>
                     <tr>
                         <th>Group Name</th>
                         <th>Show Name</th>
                         <th>Origin</th>


                     </tr>
                     </thead>


                     <tbody>
                     @foreach($shows as $show)
                     <tr>
                         <td>{{ HTML::link_to_action('home.shows@show',$show->group_name,array(Str::slug($show->name)),array('class'=>'info')) }}</td>
                         <td>{{ HTML::link_to_action('home.shows@show',$show->name_english,array(Str::slug($show->name)),array('class'=>'info')) }}</td>
                         <td>{{ HTML::link_to_action('home.shows@show',$show->country_english,array(Str::slug($show->name)),array('class'=>'info')) }}</td>

                     </tr>
                     @endforeach

                     </tbody>
                 </table>

             </div>



     </div>
@endsection

@section('footer')
@include('partials.footer')
@endsection

