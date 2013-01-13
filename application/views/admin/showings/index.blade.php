@layout('layouts.main')
@section('navigation')
	@include('partials.dashnav')
@endsection
@section('content')
<div class="row">    
<!-- Main Content Section -->
<!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
	
		<div class="twelve columns">
		<h3>Program</h3>
		<br />
		</div>
 <div class="twelve columns">
	<table class="twelve">
		<thead>
			<tr>
				<th>Grup Adı</th>
				<th>Oyun Adı</th>
				<th>Tarihi</th>
				<th>Salon</th>
				<th>Fiyat</th>
			
			</tr>
		</thead>
   

    <tbody>
		@foreach($showings as $showing)
        <tr>
          <td>{{ HTML::link_to_action('admin.groups@show',$group->name,array($group->id)) }}</td>
          <td>{{ HTML::link_to_action('admin.shows@show',$show->name,array($show->id)) }}</td>
          <td>{{ HTML::link_to_action('admin.shows@show',$showing->performance_date,array($show->id)) }}</td>
          <td>{{ HTML::link_to_action('admin.theaters@show',$theater->name,array($theater->id)) }}</td>
          <td>{{ HTML::link_to_action('admin.shows@show',$showing->price , array($show->id)) }}</td>
          <td>{{ HTML::link_to_action('admin.showings@edit','Düzenle',array($showing->id),array('class'=>'small  round button')) }}</td>
          <td>{{ HTML::link_to_action('admin.showings@delete','Sil',array($showing->id),array('class'=>'small alert round button',"onclick"=>"Silmek için Onaylayın")) }}</td>

        </tr>
		@endforeach
 
    </tbody>
 </table>
 
	<div class="button-bar">
	 <ul class="button-group radius">
		 <!--<a class="button radius"href="<?php echo URL::to('newgroup'); ?>">Grup Ekle</a>--> 
		<li>{{HTML::link_to_action('admin.showings@add', 'Programa Oyun Ekle',array(),array('class'=>'button radius'))}} </li> 

		</ul>
	</div>	
</div>
@endsection 
