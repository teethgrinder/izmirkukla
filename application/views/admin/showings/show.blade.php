@layout('layouts.main')
@section('navigation')
	@include('partials.dashnav')
@endsection
 
@section('content')
 <div class="row">    

   
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="ten columns push-one">
			
<h3>Gösteri Bilgileri</small></h3>
 	<table class="twelve">
  <thead>
    <tr>
      <th>Oyun Adı</th>
      <th>Yaş</th>
			<th>Dil</th>
			<th>Hakkında</th>
			<th>Salon</th>
			<th>Ücret</th>
			<th>Tarih</th>
			<th>Saat</th>
			
    </tr>
  </thead>
 
     <tbody>
 
   
		<tr>
			<td> {{$show->name}} </td>
			<td> {{$show->age}} </td>
			<td> {{$show->language}} </td>
			<td>{{$show->information}}</a></td>
			<td>{{$theater->name}}</a></td>
			<td>{{$showing->price}} tl</a></td>
			<td>{{$showing->performance_date}} </a></td>
		 
		</tr>
	 
    </tbody>
	 
 </table>
<div class="button-bar">
 <ul class="button-group radius">
			<li>{{HTML::link_to_action('admin.shows@add', 'Yeni Oyun Ekle',array(),array('class'=>'button radius'))}}</li>
			<li>{{HTML::link_to_action('admin.shows@add_photo', 'Foto Ekle',array($showing->id),array('class'=>'button radius'))}}</li>
			<li>{{HTML::link_to_action('admin.shows@edit', 'Bilgileri Düzenle',array($showing->id),array('class'=>'button radius'))}}</li>
			<li>{{HTML::link_to_action('admin.groups@delete', 'Oyunu Kaldır',array($showing->id),array('class'=>'button radius'))}}</li>
			<!--<li><a class="button radius" href="<?php echo URL::to('newshow'); ?>">Yeni Oyun Ekle</a></li>-->

			<li><a class="button radius" href="<?php echo URL::to('groupslist'); ?>">Tüm Gruplar</a></li>
			
			</ul>
			</div>
	</div>
@endsection 
