@layout('layouts.main')
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
				<th>Sayfa</th>
				<th>Başlık</th>
				<th>İçerik</th>
				<th>Düzenle/Kaldır</th>
			
			</tr>
		</thead>
   

    <tbody>
		@foreach($subjects as $subject)
        <?php  $page = DB::table('pages')->where('slug','=',$subject->slug)->first(); ?>
    <tr>@if($page)
        <td>{{ $page-> title }}</td>
        @endif
       <td>{{ $subject-> title }}</td>
        <td>{{ $subject-> content }}</td>
 
    </tr>
		@endforeach
 
    </tbody>
 </table>
 
	<div class="button-bar">
	 <ul class="button-group radius">
		 <!--<a class="button radius"href="<?php echo URL::to('newgroup'); ?>">Grup Ekle</a>--> 
		 {{HTML::link_to_action('admin.subjects@add', 'Yeni Konu',array(),array('class'=>'button radius'))}} 
		</ul>
	</div>	
</div>
@endsection 
