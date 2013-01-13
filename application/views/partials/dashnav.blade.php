  <div class="row"
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
<div class="row">
  <div class="twelve columns">
    <nav class="top-bar">
      <ul>
        <!-- Title Area -->
        <li class="name">
          <h1>
            {{ HTML::link_to_action('admin.dashboard@index','Yönetim Paneli') }}
          </h1>
        </li>
        <li class="toggle-topbar"><a href="#"></a></li>
      </ul>

      <section>
        <!-- Left Nav Section -->
        <ul class="left">
          <li class="divider"></li>
          <li>
              {{ HTML::link_to_action('admin.groups@index','Gruplar',array(),array('class'=>'active')) }}
         <!-- <li class="has-dropdown">
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
            </ul>-->
          </li>
          <li class="divider hide-for-small"></li>
          <!--Oyunlar-->
           <li class="divider"></li>
          <li>
              {{ HTML::link_to_action('admin.shows@index','Oyunlar') }}
          </li>
          <li class="divider hide-for-small"></li>
          <!-- Salonlar -->
           <li class="divider"></li>
            <li>
                {{ HTML::link_to_action('admin.theaters@index','Salonlar') }}
            </li>
          <li class="divider hide-for-small"></li>
          <!-- end of salon -->
             <!-- Programlar -->
           <li class="divider"></li>
          <li class="has-dropdown">
            <a class="active" href="/programs">Program</a>

          </li>
          <li class="divider hide-for-small"></li>
          <!-- end of program -->
          <!-- Makaleler -->
           <li class="divider"></li>
          <li class="has-dropdown">
            <a class="active" href="#">Makaleler</a>
 
          </li>
          <li class="divider hide-for-small"></li>
        </ul>

        <!-- Right Nav Section -->
        <ul class="right">
          
          
         <li>{{HTML::link_to_action('home.pages@homepage','Sayfaya Dön',array(),array('class'=>'button'))}}</li>
        </ul>
      </section>
    </nav>
  </div>
</div>
