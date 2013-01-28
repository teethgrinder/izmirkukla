@layout('layouts.main')
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
			<td> {{$new->media}} </td>
			<td> {{$new->published_at}} </td>

            <td> {{HTML::link_to_action('admin.shows@edit', 'Düzenle',array($show->id),array('class'=>'button small radius'))}} </td>
            <td> {{HTML::link_to_action('admin.groups@delete', 'Sil',array($show->id),array('class'=>'alert small button radius'))}} </td>
		</tr>
	 
    </tbody>

 </table>

	</div>
@endsection 
