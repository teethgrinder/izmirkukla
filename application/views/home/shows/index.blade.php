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
		
		<div class="titlestyle">
		<h2>Oyunlar</h2>
		</div>
 <div id="divContainer">	
 	<table id="Oyunlar"  class="formatHTML5" >
		<thead>
			<tr>
				<th>Grup Adı</th>
                <th>Oyun Adı</th>
				<th>Ülkesi</th>
				 
			
			</tr>
		</thead>
   

    <tbody>
		@foreach($shows as $show)
    <tr>
			<td>{{ HTML::link_to_action('home.shows@show',$show->group->name,array(Str::slug($show->name))) }}</td>
			<td>{{ HTML::link_to_action('home.shows@show',$show->name,array(Str::slug($show->name))) }}</td>
      <td>{{ HTML::link_to_action('home.shows@show',$show->group->country,array(Str::slug($show->name))) }}</td>
    </tr>
		@endforeach
 
    </tbody>
 </table> 
 
 </div>

 </div>
@endsection 

