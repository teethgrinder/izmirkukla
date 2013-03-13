@layout('layouts.dashboard')
@section('navigation')
@include('partials.dashnav')
@endsection
@section('content')
 <div class="row">



     <!-- Main Content Section -->
     <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
     <div class="eight columns push-two">


         <h3>  Bilgilerini Düzenle</h3>
         {{ Form::open(URL::to_action('admin.others@edit',array($other->id)), 'PUT') }}

         <input type="hidden" name="_method" value="PUT">
         {{Form::token()}}
    
         <p>
             Başlık: {{ Form::text( 'name', (Input::old('name') ?  Input::old('name') : $other->name)) }}
             {{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
         </p>
         
         <p>
             Başlık: {{ Form::text( 'name_english', (Input::old('name_english') ?  Input::old('name_english') : $other->name_english)) }}
             {{ $errors->has( 'name_english' ) ? $errors->first( 'name_english' ) : '' }}
         </p>
         
         <p>
             Sunan: {{ Form::text( 'actor', (Input::old('actor') ?  Input::old('actor') : $other->actor)) }}
             {{ $errors->has( 'actor' ) ? $errors->first( 'actor' ) : '' }}
         </p>
         
         <p>
             Mekan: {{ Form::text( 'place', (Input::old('place') ?  Input::old('place') : $other->place)) }}
             {{ $errors->has( 'place' ) ? $errors->first( 'place' ) : '' }}
         </p>
        
        <p>
             Zaman: {{ Form::text( 'date', (Input::old('date') ?  Input::old('date') : $other->date)) }}
             {{ $errors->has( 'date' ) ? $errors->first( 'date' ) : '' }}
         </p>


         <p>
             İçerik: {{ Form::textarea( 'information', (Input::old('information') ?  Input::old('information') : $other->information)) }}
             {{ $errors->has( 'information' ) ? $errors->first( 'information' ) : '' }}
         </p>
        
         
        


         <p>
             İçerik: {{ Form::textarea( 'information_english', (Input::old('information_english') ?  Input::old('information_english') : $other->information_english)) }}
             {{ $errors->has( 'information_english' ) ? $errors->first( 'information_english' ) : '' }}
         </p>
      
         {{ Form::submit( 'Değiştir' ,array('class'=>'button radius') ) }}

         {{ Form::close() }}

     </div>
@endsection

@section('footer')
@include('partials.dashfooter')
@endsection
