<!-- <div class="row"
		 <nav class="top-bar">
 
		 
  <!-- <nav> goes here 
<div class="three columns pull-nine">
       <a  class="toggle-topbar fixed" href="{{ URL::to('/') }}">{{HTML::image('laravel/img/2013logo7.png')}}</a> 
    </div> 
    
 
 
     <!-- <ul class="nav-bar right button-group">
        <li><a href="#">Anasayfa</a></li>
        <li><a href="#">Festival</a></li>
        <li><a href="#">Workshoplar</a></li>
        <li><a href="#">İletişim</a></li>
      </ul>
  
  </nav> -->
  <!-- End Nav
</div> -->
<!-- Basic Needs -->
<header>
<div class="row">
  <div class="twelve columns">
    <nav class="top-bar">
      <ul>
        <!-- Title Area -->
    
 
    
               <a href="{{ URL::to('/') }}">{{HTML::image('laravel/img/2013logo7.png')}}</a> 
 
      </ul>

 
        <!-- Left Nav Section -->
<!--        <ul class="left">
          <li class="divider"></li>
          <li class="has-dropdown">
            <a class="active" href="#">Item 1</a>
            <ul class="dropdown">
              <li><label>Section Name</label></li>
              <li class="has-dropdown">
                <a href="#" class="">Level 1, Has Dropdown</a>
                <ul class="dropdown">
                  <li><a href="#">Level 2</a></li>
                  <li><a href="#">Level 2</a></li>
                  <li class="has-dropdown"><a href="#">Level 2, Has Dropdown</a>
                    <ul class="dropdown">
                      <li><label>Section</label></li>
                      <li><a href="#">Level 3</a></li>
                      <li><a href="#">Level 3</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Level 3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Level 2</a></li>
                  <li><a href="#">Level 2</a></li>
                </ul>
              </li>
              <li><a href="#">Level 1</a></li>
              <li><a href="#">Level 1</a></li>
              <li class="divider"></li>
              <li><label>Section Name</label></li>
              <li><a href="#">Level 1</a></li>
              <li><a href="#">Level 1</a></li>
              <li><a href="#">Level 1</a></li>
              <li class="divider"></li>
              <li><a href="#">See all &rarr;</a></li>
            </ul>
          </li>
          <li class="divider hide-for-small"></li>
        </ul>


        <!-- Right Nav Section -->
      <!--  <div id="header">
        <p>(new class)</p>
        </div> -->
     <ul class="right">
            <li><a href="#" class="fc-webicon facebook small">Like us on Facebook</a></li>
            <li><a href="#" class="fc-webicon twitter small">Like us on Twitter</a></li>
            <li><a href="#" class="fc-webicon mail small">Mail us</a></li>
         @if (Config::get('application.language') == 'tr')
            <li><a href="/en" class="small" >{{HTML::image('laravel/img/english.png')}}</a></li>
         @elseif (Config::get('application.language') == 'en')
            <li><a href="/" class="small" >{{HTML::image('laravel/img/turkey.png')}}</a></li>
         @endif
          <!--   <li class="has-dropdown">
           <li> <a href="#">Program</a>
      <ul class="dropdown">
              <li><label>Section Name</label></li>
              <li><a href="#" class="">Level 1</a></li>
              <li><a href="#">Dropdown Option</a></li>
              <li><a href="#">Dropdown Option</a></li>
              <li class="divider"></li>
              <li><label>Section Name</label></li>
              <li><a href="#">Dropdown Option</a></li>
              <li><a href="#">Dropdown Option</a></li>
              <li><a href="#">Dropdown Option</a></li>
              <li class="divider"></li>
              <li><a href="#">See all &rarr;</a></li>
            </ul>-->
          <!-- </li>-->
        </ul>
 
    </nav>
  </div>
</div>
</header>
