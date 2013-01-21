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
       <td>{{ HTML::link_to_action('admin.subjects@edit','Düzenle',array($subject->id),array('class'=>'button small radius')) }}
           {{HTML::link_to_action('admin.subjects@delete','Sil',array($subject->id),array('class'=>'alert small radius button',"onclick"=>"return confirm('Silmek için onaylayın')"))}}</td>
 
    </tr>
		@endforeach
 
    </tbody>
 </table>

</div>
@endsection 
