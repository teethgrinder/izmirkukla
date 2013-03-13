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

        <hr />
        <div class="row">
            <div class="two columns push-four ">
                <div class="titlestyle">
                    <h2>Makaleler</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="seven columns push-one">


          <table id="Makaleler"  class="formatHTML5" >
              <thead>
              <tr>
                  <th>Yazan</th>
                  <th>Konu</th>


              </tr>
              </thead>

              <tbody>
              @foreach($subjects as $subject)
              <tr>

                  <td>{{ HTML::link_to_action('home.subjects@show', $subject-> writer,array($subject->id)) }}</td>
                  <td>{{ HTML::link_to_action('home.subjects@show', $subject-> title,array($subject->id)) }}</td>

              </tr>
              @endforeach
              </tbody>
          </table>
            </div>


        </div>
    </div>
@endsection

@section('footer')
@include('partials.footer')
@endsection