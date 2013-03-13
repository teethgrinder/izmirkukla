@layout('layouts.main')

@section('content')
<!-- Top nav bar - responsive -->	
<!-- <header>
	<div class="row">
		<div class="five columns text-center">
			<a href="LOGO LINK"><img src="LOGO IMAGE" style="padding: 2px; margin-top: -18px;"/></a>
		</div>
		
		<div class="seven columns">
			<ul class="nav-bar">
				<li class="has-flyout">
					<a href="#">Categories</a>
					<a href="#" class="flyout-toggle"><span></span></a>
					<ul class="flyout">
						<li><a href="#"><font class="icon" style="font-size: 12px;">R</font>Category 01</a></li>
						<li><a href="#"><font class="icon" style="font-size: 12px;">R</font>Category 02</a></li>
					</ul>
				</li>
						<li class=""><a href="#" target="_new">Link 01</a></li>
						<li class=""><a href="#" target="_new">Link 02</a></li>
						<li class=""><a href="#" target="_new">Link 03</a></li>

					<div class="five columns" style="padding: 3px;">
						<div class="row collapse">
							<div class="eight mobile-three columns">
								<input class="searcharea" type="text" placeholder="Search the site..." style="font-size: 10px;"/>
							</div>
							
							<div class="four mobile-one columns">
								<a href="#" class="postfix button search submit2">ICON SEARCH</a>
							</div>
						</div>
					</div>
			</ul>
		</div>							
	</div>
</header>

-->



  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div class="nine columns" role="content">

      <article>
				<div class="row">   
          <div class="six columns offset-by-one">
					
        <h3>{{$subject->title}}</h3>
			</div>
			<div class="row"> 
			<div class="six columns offset-by-two">
		{{$subject->content}}
    </div>
 

    <!-- End Main Content -->
 
@endsection
