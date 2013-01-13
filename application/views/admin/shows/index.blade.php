@layout('layouts.main')
@section('navigation')
	@include('partials.dashnav')
@endsection
@section('content')
 <div class="row">    

   
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="twelve columns">
			
	<h3>Gösteriler</h3>
 
 	<table class="twelve">
  <thead>
    <tr>
      <th>Oyun Adı</th>
      <th>Yaş</th>
      <th>Dil</th>
      <th>Hakkında</th>
      <th>Düzenle</th>
      <th>Sil</th>
    </tr>
  </thead>
 
     <tbody>
 
  @foreach($shows as $show)
		<tr>
            <td>{{HTML::link_to_action('admin.shows@show',$show->name,array($show->id)) }}</td>
            <td>{{HTML::link_to_action('admin.shows@show',$show->age,array($show->id)) }}</td>
            <td>{{HTML::link_to_action('admin.shows@show',$show->language,array($show->language))}}</td>
            <td>{{HTML::link_to_action('admin.shows@show',$show->information,array($show->information))}}</td>

		<!--	<td><a href="<?php echo URL::to('showgroup/'.$show->id); ?>">{{$show->age}}</a></td>
			<td><a href="<?php echo URL::to('showgroup/'.$show->id); ?>">{{$show->language}}</a></td>
			<td><a href="<?php echo URL::to('showgroup/'.$show->id); ?>">{{$show->information}}</a></td>-->
            <td>{{HTML::link_to_action('admin.shows@edit', 'Düzenle',array($show->id),array('class' => 'button radius')) }} </td>           
            <td>{{HTML::link_to_action('admin.shows@delete','Sil',array($show->id),array('class'=>'alert button',"onclick"=>"Silmek için onaylayın"))}}</td>
		</tr>
		@endforeach
    </tbody>
 </table>
 
<!--<div class="button-bar">
 <ul class="button-show radius">
	 <a class="button radius"href="<?php echo URL::to('newgroup'); ?>">Grup Ekle</a> 
				</ul>
			</div>	
	</div>-->
@endsection 