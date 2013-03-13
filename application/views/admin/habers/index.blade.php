@layout('layouts.dashboard')
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
                 <th>Basım Tarihi</th>
             </tr>
             </thead>

             <tbody>

             @foreach($habers as $haber)
             <tr>
                 <td>{{HTML::link_to_action('admin.habers@show',$haber->media,array($haber->id)) }} </td>
                 <td>{{HTML::link_to_action('admin.habers@show',$haber->published_at,array($haber->id)) }} </td>


                 <td>{{HTML::link_to_action('admin.habers@edit', 'Düzenle',array($haber->id),array('class' => 'button small radius')) }}
                     {{HTML::link_to_action('admin.habers@delete','Sil',array($haber->id),array('class'=>'alert small radius button',"onclick"=>"return confirm('Silmek için onaylayın')"))}}
                 </td>
             </tr>
             @endforeach
             </tbody>
         </table>

         <div class="button-bar">
             <ul class="button-group radius">
                 {{HTML::link_to_action('admin.habers@add', 'Yeni Haber',array(),array('class'=>'button radius'))}}
             </ul>
         </div>
     </div>
 @endsection
 @section('footer')
 @include('partials.dashfooter')
 @endsection