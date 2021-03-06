@layout('layouts.dashboard')
@section('navigation')
	@include('partials.dashnav')
@endsection
 
@section('content')
<div class="row">    
<!-- Main Content Section -->
<!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
	<div class="twelve columns ">
		
		<h3>Kukla Grupları</h3>

        @if(Session::has('success'))
        {{ Session::get('success') }}
        @endif

        <table class="twelve">

            <thead>

            <tr>
				<th>Grup Adı</th>
				<th>Ülkesi</th>
				<th>Hakkında</th>
				<th>Durum</th>
			</tr>

            </thead>
   
           <tbody>

		     @foreach($groups as $group)
            <tr>
              <td><a href="<?php echo URL::to('showgroup/'.$group->id); ?>">{{$group->name}}</a></td>
              <td><a href="<?php echo URL::to('showgroup/'.$group->id); ?>">{{$group->country}}</a></td>
              <td>{{ HTML::link_to_action('admin.groups@edit', 'Düzenle',array($group->id),array('class'=>'button small radius')) }}
                  {{ HTML::link_to_action('admin.groups@delete', 'Sil',array($group->id),array('class'=>'button alert small radius',"onclick"=>"return confirm('Silmek için onaylayın')")) }}</td>
            </tr>
		@endforeach

           </tbody>
         </table>
 
	<div class="button-bar">
	 <ul class="button-group radius">
		 {{HTML::link_to_action('admin.groups@add', 'Yeni Grup',array(),array('class'=>'button radius'))}}
     </ul>
	</div>	
</div>
@endsection

@section('footer')
@include('partials.dashfooter')
@endsection