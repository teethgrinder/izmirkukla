@layout('layouts.main')
@section('navigation')
	@include('partials.dashnav')
@endsection
@section('content')
 <div class="row">    

   
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="twelve column">
	
<h3>Grup Bilgileri</h3>
 	<table class="twelve">
  <thead>
    <tr>
      <th>Grup Adı</th>
 
    </tr>
  </thead>
  <tbody>
		<tr>
			<td>{{$group->name}}</td>
			 
		
		</tr>
    </tbody>
 

 	 <thead>
    <tr>
      <th>Fotoğraflar</th>
      <th>Fotoğraflar</th>
      <th>Fotoğraflar</th>
  
	 
    </tr>
  </thead>
   <tbody> 
  
		<tr>
			@foreach($images as $image)
			<td><a href="{{ URL::to_asset('img/uploads/'.$image->id.'/thumb-'.$image->name) }}"><img src="{{ URL::to_asset('img/uploads/'.$image->id.'/thumb-'.$image->name) }}" alt="" /></a>{{HTML::link_to_action('admin.groups@delete_photo', 'Fotoğraf Kaldır',array($group->id),array('class'=>'button radius'))}}</td>
			
			@endforeach
		</tr>

    </tbody>
	</table>
<div class="button-bar">
 <ul class="button-group radius">
			
			<li>{{HTML::link_to_action('admin.groups@edit', 'Fotoğraf Kaldır',array($group->id),array('class'=>'button radius'))}}</li>
			<li>{{HTML::link_to_action('admin.groups@add_photo', 'Fotoğraf Ekle',array($group->id),array('class'=>'button radius'))}}</li>
			<li>{{HTML::link_to_action('admin.groups@show', 'Grup Bilgiler',array($group->id),array('class'=>'button radius'))}}</li>
			<!--<li><a class="button radius" href="<?php echo URL::to('newshow'); ?>">Yeni Oyun Ekle</a></li>-->

			<li>{{HTML::link_to_action('admin.groups@index','Gruplara Dön',array(),array('class' => 'button radius'))}}</li>
			
			</ul>
			</div>
	</div>
@endsection 
