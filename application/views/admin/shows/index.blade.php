@layout('layouts.dashboard')
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
          <th>İngilizce</th>
          <th>Düzenle/Sil</th>

        </tr>
      </thead>
 
     <tbody>
 
    @foreach($shows as $show)
		<tr>
            <td>{{HTML::link_to_action('admin.shows@show',$show->name,array($show->slug)) }} /
                {{HTML::link_to_action('admin.shows@show',$show->name_english,array($show->slug)) }} </td>
            <td>{{HTML::link_to_action('admin.shows@show',$show->age,array($show->slug)) }}</td>
            <td>{{HTML::link_to_action('admin.shows@show',$show->language,array($show->slug))}} /
                {{HTML::link_to_action('admin.shows@show',$show->language_english,array($show->slug))}}</td>
            <td>{{HTML::link_to_action('admin.shows@show',$show->information,array($show->slug))}}</td>
            <td>{{HTML::link_to_action('admin.shows@show',$show->information_english,array($show->slug))}}</td>
            <td>{{HTML::link_to_action('admin.shows@show',$show->type,array($show->slug))}}</td>

            <td>{{HTML::link_to_action('admin.shows@edit', 'Düzenle',array($show->slug),array('class' => 'button small radius')) }}
                {{HTML::link_to_action('admin.shows@delete','Sil',array($show->id),array('class'=>'alert small radius button',"onclick"=>"return confirm('Silmek için onaylayın')"))}}
            </td>
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

@section('footer')
@include('partials.dashfooter')
@endsection
