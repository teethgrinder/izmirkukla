@layout('layouts.dashboard')
@section('navigation')
	@include('partials.dashnav')
@endsection
@section('content')
 <div class="row">    

   
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="twelve columns">
	
        <h3>Grup <small> ve oyunları</small> Hakkında</h3>
 	    <table class="twelve">

          <thead>
            <tr>
                <th> Grup Adı </th>
                <th> Ülkesi </th>
                <th> Düzenle </th>

            </tr>
          </thead>

          <tbody>
            <tr>
                <td> {{ $group->name }}</td>
                <td> {{ $group->country }} / {{ $group->country_english }}</td>
                <td>{{ HTML::link_to_action('admin.groups@edit', 'Düzenle',array($group->id),array('class'=>'button small radius')) }}
                    {{ HTML::link_to_action('admin.groups@delete', 'Sil',array($group->id),array('class'=>'button alert small radius',"onclick"=>"Silmek için onaylayın")) }}
                </td>
            </tr>
          </tbody>

           <br /><br />

             <thead>
             <tr>
                 <th> Grubun Fotoğrafları </th>
                 <th> Fotoğraf yazısı </th>
                 <th> </th>
             </tr>
             </thead>

             <tbody>
             @foreach($images as $image)
             <tr>
                 <td><img src="{{ URL::to_asset('img/uploads/'.$image->id.'/thumb-'.$image->name) }}" alt="" /></td>
                 <td>{{$image->tag}}</td>
                 <td><a class="alert button" href="<?php echo URL::to('deletegroupimage/'.$image->id); ?>" onclick="return confirm('Silmek için onaylayın')">Sil</a></td>
             </tr>
             @endforeach
             </tbody>

            <br /><br />

          <thead>
            <tr>
                <th>Oyunları</th>
                <th>Yaş</th>
                <th>Dili</th>
                <th>Hakkında</th>
                <th>Düzenle</th>
            </tr>
          </thead>

          <tbody>
            @foreach($shows as $show)
            <tr>
                <td>{{HTML::link_to_action('admin.shows@show', $show->name,array($show->slug))}}</td>
                <td>{{HTML::link_to_action('admin.shows@show', $show->age,array($show->slug))}}</td>
                <td>{{HTML::link_to_action('admin.shows@show', $show->language,array($show->slug))}}</td>
                <td>{{HTML::link_to_action('admin.shows@show', $show->information,array($show->slug))}}</td>
            </tr>
            @endforeach
          </tbody>

	    </table>
    </div>
 </div>
 <div class="row">    

    <div class="ten columns centered">
        <div class="button-bar">
         <ul class="button-group radius">
			<li>{{HTML::link_to_action('admin.groups@edit', 'Bilgileri Düzenle',array($group->id),array('class'=>'button radius'))}}</li>
            <li>{{HTML::link_to_action('admin.groups@add_photo', 'Fotoğraf Ekle',array($group->id),array('class'=>'button radius'))}}</li>
			<li>{{HTML::link_to_action('admin.groups@index','Tüm gruplar',array(),array('class' => 'button radius'))}}</li>
		 </ul>
	    </div>

	</div>
@endsection

@section('footer')
@include('partials.dashfooter')
@endsection