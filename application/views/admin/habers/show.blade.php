@layout('layouts.dashboard')
@section('navigation')
	@include('partials.dashnav')
@endsection
 
@section('content')
 <div class="row">    

   
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="ten columns push-one">
			
<h3>Haber Bilgileri</small></h3>
 	<table class="twelve">
  <thead>
    <tr>
      <th>Medya</th>
      <th>Tarih</th>
    </tr>
  </thead>
 
     <tbody>
 
   
		<tr>
			<td> {{$haber->media}} </td>
			<td> {{$haber->published_at}} </td>

            <td> {{HTML::link_to_action('admin.habers@edit', 'Düzenle',array($haber->id),array('class'=>'button small radius'))}} </td>
            <td> {{HTML::link_to_action('admin.habers@delete', 'Sil',array($haber->id),array('class'=>'alert small button radius'))}} </td>
		</tr>
	 
    </tbody>

         <thead>
         <tr>
             <th>Haberin Fotoğrafları</th>

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
             <td>{{HTML::link_to_action('admin.habers@deleteshowimage','Kaldır',array($image->id),array('class'=>'alert button small',"onlick"=>"return confirm('Silmek için Onaylayın')"))}}</td>
         </tr>
         @endforeach
         </tbody>
 </table>

	</div>
@endsection
@section('footer')
@include('partials.dashfooter')
@endsection