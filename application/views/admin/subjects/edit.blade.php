@layout('layouts.dashboard')
@section('navigation')
@include('partials.dashnav')
@endsection
@section('content')
 <div class="row">



     <!-- Main Content Section -->
     <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
     <div class="eight columns push-two">


         <h3>{{$subject->title}} Bilgilerini Düzenle</h3>
         {{ Form::open(URL::to_action('admin.subjects@edit',array($subject->id)), 'PUT') }}

         <input type="hidden" name="_method" value="PUT">
         {{Form::token()}}
         <p>
             Başlık: {{ Form::text( 'title', (Input::old('title') ?  Input::old('title') : $subject->title)) }}
             {{ $errors->has( 'title' ) ? $errors->first( 'title' ) : '' }}
         </p>


         <p>
             İçerik: {{ Form::textarea( 'content', (Input::old('content') ?  Input::old('content') : $subject->content)) }}
             {{ $errors->has( 'content' ) ? $errors->first( 'content' ) : '' }}
         </p>
         {{ Form::submit( 'Değiştir' ,array('class'=>'button radius') ) }}

         {{ Form::close() }}

     </div>
     @endsection

@section('footer')
@include('partials.dashfooter')
@endsection