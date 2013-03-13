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
                 <th>Adı</th>
                 <th>İngilizce Adı</th>
                 <th>Anlatan</th>
                <!-- <th>Hakkında</th>
                 <th>İngilizce</th>-->
                 <th>Yer</th>
                 <th>Tarih</th>
                 <th>Düzenle/Sil</th>
             </tr>
             </thead>

             <tbody>

             @foreach($others as $other)
             <tr>
                 <td>{{ $other->name }}</td>
                 <td>{{ $other->name_english }}</td>
                 <td>{{ $other->actor }}</td>
                <!-- <td>{{ $other->information }}</td>
                 <td>{{ $other->information_english }}</td>-->
                 <td>{{ $other->place }}</td>
                 <td>{{ $other->date }}</td>


                 <td>{{HTML::link_to_action('admin.others@edit', 'Düzenle',array($other->id),array('class' => 'button small radius')) }}
                     {{HTML::link_to_action('admin.others@delete','Sil',array($other->id),array('class'=>'alert small radius button',"onclick"=>"return confirm('Silmek için onaylayın')"))}}
                 </td>
             </tr>
             @endforeach
             </tbody>
         </table>


 @endsection

 @section('footer')
 @include('partials.dashfooter')
 @endsection
