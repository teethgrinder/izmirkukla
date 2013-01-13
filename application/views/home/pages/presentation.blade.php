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
 
      <div id="slider">
				
		{{HTML::image('laravel/img/logo3.jpg')}}
    {{HTML::image('laravel/img/building2.jpg')}}
		{{HTML::image('laravel/img/Web2.jpg')}}
		{{HTML::image('laravel/img/web3i.jpg')}}
  
 
 
     
      </div>
      <div id="contents">
      <p>Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin. Venison tail chuck pork chop, andouille ball tip beef ribs flank boudin bacon. Salami andouille pork belly short ribs flank cow. Salami sirloin turkey kielbasa. Sausage venison pork loin leberkas chuck short loin, cow ham prosciutto pastrami jowl. Ham hock jerky tri-tip, fatback hamburger shoulder swine pancetta ground round. Tri-tip prosciutto meatball turkey, brisket spare ribs shankle chuck cow chicken ham hock boudin meatloaf jowl.</p>
 
      <p>Ground round pastrami pork loin tenderloin jerky. Jerky spare ribs biltong, ham hock ham capicola pork. Jerky turducken pork, meatloaf sausage capicola swine corned beef turkey short loin. Tongue prosciutto pork loin, ground round spare ribs venison kielbasa strip steak.</p>
 
      <p>Hamburger bresaola turkey t-bone, leberkas salami pork chop ham hock beef ribs. Rump biltong meatball venison, short ribs pork loin shank shankle corned beef beef. Cow salami jowl short loin hamburger fatback. Short ribs pork belly shoulder pastrami drumstick salami corned beef ham hock bresaola. Swine filet mignon cow sausage ball tip. Cow ribeye ground round, sausage pork loin pig beef ball tip turkey boudin.</p>
 
      <p>Prosciutto ball tip filet mignon andouille frankfurter chicken rump sausage meatball. Filet mignon meatloaf ground round andouille ham hock pork. Bresaola short loin meatball chuck hamburger pig. Turkey venison chuck, tongue fatback tail swine jerky corned beef shank kielbasa prosciutto ribeye ham tri-tip. Rump bacon pork belly meatloaf shoulder short loin meatball kielbasa pork loin tongue bresaola brisket corned beef jowl prosciutto. Beef ribs shankle short ribs pork belly corned beef fatback pork chop tongue biltong boudin strip steak sirloin meatloaf pancetta.</p>
 </div>          
    </div>
@endsection 