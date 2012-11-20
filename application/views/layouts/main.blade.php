<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width">
	
		
		
	{{Asset::container('bootstrapper')->styles();}}
	{{Asset::container('bootstrapper')->scripts();}}

		{{ HTML::style('laravel/css/style1.css') }}


</head>
<body>
 

	
<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?php echo URL::to('/'); ?>" name="top">PUPPETSIDE</a>
 
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
					<li><a href="<?php echo URL::to('/'); ?>"><i class="icon-home icon-white"></i> Home</a></li>
					<li class="divider-vertical"></li>
					<li ><a href="<?php echo URL::to('video'); ?>"><i class="icon-file icon-white"></i> video</a></li>
					<li class="divider-vertical"></li>
					<li><a href="<?php echo URL::to('gallery'); ?>"><i class="icon-file icon-white"></i> Gallery</a></li>
					<li class="divider-vertical"></li>
				
				<!--	<li><a href="<?php echo URL::to('comments'); ?>"><i class="icon-user icon-white "></i> {{Lang::line('audiostuff.comment')->get()}}</a></li>
					<li class="divider-vertical"></li>-->
					<li><a href="<?php echo URL::to('contact'); ?>"><i class="icon-envelope icon-white"></i> {{Lang::line('audiostuff.contact')->get()}}</a></li>
					<li class="divider-vertical"></li>
		 
					<li><ul class="nav nav-tabs">
  <li class="dropdown">
    <a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#">
       settings
        <b class="caret"></b>
      </a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo URL::to('upload'); ?>"><i class="icon-envelope icon-pencil"></i> {{Lang::line('audiostuff.all')->get()}}</a></li>
			
			
				<li><a href="<?php echo URL::to('logout'); ?>"><i class="icon-envelope icon-road"></i> {{Lang::line('audiostuff.logout')->get()}}</a></li>			 
			</ul>
  </li>
</ul></li>
				</ul>	
				
 
			 <form class="navbar-form form-search pull-right" method="POST" action="http://bootsnipp.com/search" accept-charset="UTF-8">
          <div class="input-append">
            <input type="text" name="q" class="span2 search-query" placeholder="Search">
            <button type="submit" class="btn">Search</button>
          </div>
        </form> 
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container-fluid -->
	</div>
	<!--/.navbar-inner -->
</div>
<!--/.navbar -->
</div>
	<div class="container">
	<div class="wrapper">
 

 
 @yield('content')
 
	
	</div>
</div>
 
</body>
</html>
