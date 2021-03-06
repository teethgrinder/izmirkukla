@layout('layouts.dashboard')
@section('navigation')
	@include('partials.dashnav')
@endsection
 
@section('content')
<div class="row">    
<!-- Main Content Section -->
<!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
	<div class="twelve columns ">
		
		<h3>Dökümanlar</h3>
        @if(Session::has('success'))
        {{ Session::get('success') }}
        @endif
	    <table class="twelve">
            <thead>
                <tr>
                    <th>Başlık</th>
                    <th>İçerik</th>
                    <th>Düzenle/Kaldır</th>

                </tr>
            </thead>
   
            <tbody>
		 
                <tr>

                    <td>{{ $subject-> title }}</td>
                    <td>{{ $subject-> content }}</td>
                    <td>{{HTML::link_to_action('admin.subjects@edit','Düzenle',array($subject->slug),array('class'=>'small radius button'))}}</td>

                 </tr>
		 
            </tbody>
         </table>
    @if ($slug=
	<!--    <div class="button-bar">
	        <ul class="button-group radius">
		      <li>  {{ HTML::link_to_action('admin.subjects@add', 'Yeni Konu',array('$slug'=>'makaleler'),array('class'=>'button radius')) }}</li>
		    </ul>
	    </div>-->
</div>
@endsection


@section('footer')
@include('partials.dashfooter')
@endsection