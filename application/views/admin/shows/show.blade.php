@layout('layouts.dashboard')
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
			<td> {{HTML::link_to_action('admin.shows@edit', 'Düzenle',array($show->slug),array('class'=>'button small radius'))}} </td>
			<td> {{HTML::link_to_action('admin.groups@delete', 'Sil',array($show->id),array('class'=>'alert small button radius'))}} </td>
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
			<td>{{HTML::link_to_action('admin.shows@deleteshowimage','Kaldır',array($image->id),array('class'=>'alert button small',"onlick"=>"return confirm('Silmek için Onaylayın')"))}}</td>
		</tr>
@endforeach
    </tbody>
 </table>
	<div class="button-bar">
		<ul class="button-group radius">
			<li>{{HTML::link_to_action('admin.shows@add_photo', 'oyun fotoğrafları',array($show->id),array('class'=>'button radius'))}}</li>
			<li>{{HTML::link_to_action('admin.groups@index', 'Tüm gruplar',array(),array('class'=>'button radius'))}}</li>
		</ul>
		</div>
	</div>
@endsection 
