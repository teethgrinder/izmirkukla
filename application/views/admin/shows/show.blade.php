@layout('layouts.main')
@section('navigation')
	@include('partials.dashnav')
@endsection
 
@section('content')
 <div class="row">    

   
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="ten columns push-one">
			
<h3>Oyun Bilgileri</small></h3>
 	<table class="twelve">
  <thead>
    <tr>
      <th>Oyun Adı</th>
      <th>Yaş</th>
			<th>Dil</th>
			<th>Hakkında</th>
    </tr>
  </thead>
 
     <tbody>
 
   
		<tr>
			<td> {{$show->name}} </td>
			<td> {{$show->age}} </td>
			<td> {{$show->language}} </td>
			<td>{{$show->information}}</a></td>
			<td> {{HTML::link_to_action('admin.groups@delete', 'Sil',array($show->id),array('class'=>'alert button radius'))}} </td>
		</tr>
	 
    </tbody>
	 <thead>
    <tr>
      <th>Oyunun Fotoğrafları</th>
     
			<th>Fotoğraf yazısı </th>
      <th> </th>
      <th> </th>
  
	 
    </tr>
  </thead>
   <tbody> 
  @foreach($images as $image)
		<tr>
			
			<td><img src="{{ URL::to_asset('img/uploads/'.$image->id.'/thumb-'.$image->name) }}" alt="" /></td>
 
			<td>{{$image->title}}</td>
			<td></td>
			<td><a class="alert button" href="<?php echo URL::to('deleteshowimage/'.$image->id); ?>" onclick="return confirm('Silmek için onaylayın')">Sil</a></td>
			
		</tr>
@endforeach
    </tbody>
 </table>
<div class="button-bar">
 <ul class="button-group radius">
			<li>{{HTML::link_to_action('admin.shows@add', 'Yeni Oyun Ekle',array($group->id),array('class'=>'button radius'))}}</li>
			<li>{{HTML::link_to_action('admin.shows@add_photo', 'Foto Ekle',array($show->id),array('class'=>'button radius'))}}</li>
			<li>{{HTML::link_to_action('admin.shows@edit', 'Bilgileri Düzenle',array($show->id),array('class'=>'button radius'))}}</li>
			
			<!--<li><a class="button radius" href="<?php echo URL::to('newshow'); ?>">Yeni Oyun Ekle</a></li>-->

			<li><a class="button radius" href="<?php echo URL::to('groupslist'); ?>">Tüm Gruplar</a></li>
			
			</ul>
			</div>
	</div>
@endsection 
