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

         <br />

         <div class="titlestyle">
             <h2>contact</h2>
         </div>
         <div id="contents">
             <address>
                 Written by <a href="mailto:webmaster@example.com">Jon Doe</a>.<br>
                 Visit us at:<br>
                 Example.com<br>
                 Box 564, Disneyland<br>
                 USA
             </address>

         </div>
     </div>
     @endsection