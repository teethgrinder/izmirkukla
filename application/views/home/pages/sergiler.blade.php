@layout('layouts.main')

@section('navigation')
	@include('partials.navigation')
@endsection

@section('sidebar')
  @include('partials.sidebar')
@endsection

@section('content')
 <div class="row">    

     
    <br />
    <br />
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="nine columns push-three">
		
		<div class="titlestyle">
		<h2>Sergiler</h2>
		</div>
<div id="divContainer">	
 	<table id="Oyunlar"  class="formatHTML5" >
		<thead>
			<tr>
				<th>Sergi Adı</th>
                <th>Konu</th>
				<th>Yer</th>
				<th>tarih</th>
			</tr>
		</thead>
   

    <tbody>
    
    <tr>
			<td>{{ HTML::link_to_action('home.shows@show',$other->name) }}</td>
			<td>{{ HTML::link_to_action('home.shows@show',$other->information) }}</td>
			<td>{{ HTML::link_to_action('home.shows@show',$other->place) }}</td>
			<td>{{ HTML::link_to_action('home.shows@show',$other->date) }}</td>

    </tr>

 
    </tbody>
 </table>
 
 </div>
 </div>
@endsection 

