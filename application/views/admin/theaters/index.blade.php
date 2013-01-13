@layout('layouts.main')
@section('navigation')
	@include('partials.dashnav')
@endsection
@section('content')
<div class="row">    
<!-- Main Content Section -->
<!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
	<div class="twelve columns">
		
		<h3>Salonlar</h3>
 
	<table class="twelve">
		<thead>
			<tr>
				<th>Salon Adı</th>
				<th>Adresi</th>
				<th>Düzenle</th>
				<th>Listeden Kaldır</th>
			
			</tr>
		</thead>
   

    <tbody>
		@foreach($theaters as $theater)
    <tr>
      <td><a href="<?php echo URL::to('showtheater/'.$theater->id); ?>">{{$theater->name}}</a></td>
      <td><a href="<?php echo URL::to('showtheater/'.$theater->id); ?>">{{$theater->adress}}</a></td>
      <td>{{HTML::link_to_action('admin.theaters@edit', 'Düzenle',array($theater->id),array('class'=>'button radius'))}} </td>
			<td><a class="alert button" href="<?php echo URL::to('deletetheater/'.$theater->id); ?>" onclick="return confirm('Silmek için onaylayın')">Sil</a></td>
    </tr>
		@endforeach
 
    </tbody>
 </table>
 
	<div class="button-bar">
	 <ul class="button-group radius">
		 <!--<a class="button radius"href="<?php echo URL::to('newgroup'); ?>">Grup Ekle</a>--> 
		<li>{{HTML::link_to_action('admin.theaters@add', 'Yeni Salon',array(),array('class'=>'button radius'))}} </li>  
		</ul>
	</div>	
</div>
@endsection 
