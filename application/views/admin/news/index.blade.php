@layout('layouts.main')
@section('navigation')
@include('partials.dashnav')
@endsection
@section('content')
 <div class="row">



     <!-- Main Content Section -->
     <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
     <div class="twelve columns">

         <h3>Basında</h3>

         <table class="twelve">
             <thead>
             <tr>
                 <th>Medya Adı</th>
                 <th>Dil</th>
             </tr>
             </thead>

             <tbody>

             @foreach($news as $new)
             <tr>
                 <td>{{HTML::link_to_action('admin.news@show',$show->media,array($new->slug)) }} </td>
                 <td>{{HTML::link_to_action('admin.news@show',$show->published_at,array($new->slug)) }} </td>


                 <td>{{HTML::link_to_action('admin.news@edit', 'Düzenle',array($new->id),array('class' => 'button small radius')) }}
                     {{HTML::link_to_action('admin.news@delete','Sil',array($new->id),array('class'=>'alert small radius button',"onclick"=>"return confirm('Silmek için onaylayın')"))}}
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
