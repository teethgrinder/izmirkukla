@layout('layouts.main')

@section('navigation')
@include('partials.navigation')
@endsection

@section('sidebar')
@include('partials.sidebar')
@endsection

@section('content')

 <div class="row">
     <!-- Main Content Section -->
     <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
     <div class="nine columns push-three">

         <div class="row">
             <hr />


             <div class="two columns offset-by-four">
                 <div class="titlestyle">
                     <h2>Supporters</h2>
                 </div>
             </div>
             <div class="row">
				 <div class="ten columns offset-by-one">
				{{ HTML::image('laravel/img/sponsorlarweb.jpg') }}
				</div>
             </div>
         </div>
     </div>
@endsection

@section('footer')
@include('partials.footer')
@endsection


