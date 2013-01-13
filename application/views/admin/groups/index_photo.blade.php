@layout('layouts.main')
@section('navigation')
	@include('partials.dashnav')
@endsection
@section('content')
 <div class="row">    
@if(Session::has('success')) 
{{ Session::get('success') }}
@endif
   
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="twelve columns">
	
<h3>Grup Bilgileri</h3>
 	<table class="twelve">
  <thead>
    <tr>
      <th>Grup Adı</th>
      <th>Ülkesi</th>
			<th>Hakkında</th>
    </tr>
  </thead>
  <tbody>
		<tr>
			<td>{{$group->name}}</td>
			<td>{{$group->country}}</td>
			<td>{{$group->information}}</td>
		
		</tr>
    </tbody>
 

 	 <thead>
    <tr>
      <th>Fotoğraflar</th>
      <th>Fotoğraf tagları</th>
      <th>Silmek için</th>
  
	 
    </tr>
  </thead>
   <tbody> 
  
		<tr>
			@foreach($images as $image)
			<td><a href="<?php echo URL::to('showgroup/'.$group->id); ?>"><img src="{{ URL::to_asset('img/uploads/'.$image->id.'/thumb-'.$image->name) }}" alt="" /></a></td>
			<td><a href="<?php echo URL::to('showgroup/'.$group->id); ?>">{{$image->title}}</a></td>
			<td>{{HTML::link_to_action('admin.groups@delete_photo','Sil',array($image->id),array('class'=>'alert button',"onclick"=>"return confirm('Silmek için onaylayın')"))}}</td>
			@endforeach
		</tr>

    </tbody>
	</table>
<div class="button-bar">
 <ul class="button-group radius">
			
 
			<li>{{HTML::link_to_action('admin.groups@add_photo', 'Fotoğraf Ekle',array($group->id),array('class'=>'button radius'))}}</li>
			<li>{{HTML::link_to_action('admin.groups@show', 'Grup Bilgiler',array($group->id),array('class'=>'button radius'))}}</li>
			<!--<li><a class="button radius" href="<?php echo URL::to('newshow'); ?>">Yeni Oyun Ekle</a></li>-->

			<li>{{HTML::link_to_action('admin.groups@index','Tüm Gruplar',array(),array('class' => 'button radius'))}}</li>
			
			</ul>
			</div>
	</div>
@endsection 
