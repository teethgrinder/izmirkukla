@layout('layouts.main')
@section('navigation')
	@include('partials.navigation')
@endsection
@section('sidebar')
  @include('partials.sidebar2')
@endsection
@section('content')
 <div class="row">    

     
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="nine columns push-three">

          <h3>Login  </h3>
         </div>
			<div class="row"> 
			<div class="nine columns push-three">
         {{ Form::open(action('home.users@login'),'POST') }}
        <!-- check for login errors flash var -->
        {{Form::token()}}
        @if (Session::has('login_errors'))
            {{ Alert::error("Username or password incorrect.") }}
        @endif
        <!-- username field -->
        <p>{{ Form::label('username', 'Username') }}</p>
        <p>{{ Form::text('username',null,array('placeholder'=>'Username')) }}</p>
        <!-- password field -->
        <p>{{ Form::label('password', 'Password') }}</p>
        <p>{{ Form::password('password',array('placeholder'=>'Password')) }}</p>
        <!-- submit button -->
        <p>{{ Form::submit('Login', array('class' => 'button radius')) }}</p>
    {{ Form::close() }}
      
    </article>
    </div> <!-- /container -->
     
  
@endsection
