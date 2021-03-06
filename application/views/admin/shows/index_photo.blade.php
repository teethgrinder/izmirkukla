@layout('layouts.dashboard')
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
    <div class="eight columns push-two">
	
<h3>Oyun Bilgileri</h3>
 	<table class="twelve">
      <thead>
        <tr>
          <th>Oyun Adı</th>
          <th>Dili</th>
                <th>Hakkında</th>
        </tr>
      </thead>
      <tbody>
            <tr>
                <td>{{$show->name}}</td>
                <td>{{$show->language}}</td>
                <td>{{$show->information}}</td>

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
			<td><a href="<?php echo URL::to('show/'.$show->id); ?>"><img src="{{ URL::to_asset('img/uploads/'.$image->id.'/thumb-'.$image->name) }}" alt="" /></a></td>
			@endforeach
		</tr>

    </tbody>
	</table>
<div class="button-bar">
 <ul class="button-group radius">
			
 
			<li>{{HTML::link_to_action('admin.groups@add_photo', 'Fotoğraf Ekle',array($group->id),array('class'=>'button radius'))}}</li>
			<li>{{HTML::link_to_action('admin.groups@show', 'Grup Bilgiler',array($group->id),array('class'=>'button radius'))}}</li>
			<!--<li><a class="button radius" href="<?php echo URL::to('newshow'); ?>">Yeni Oyun Ekle</a></li>-->

			<li><a class="button radius" href="<?php echo URL::to('groupslist'); ?>">Tüm Gruplar</a></li>
			
			</ul>
			</div>
	</div>
@endsection

@section('footer')
@include('partials.dashfooter')
@endsection