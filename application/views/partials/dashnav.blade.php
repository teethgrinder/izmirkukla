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

          <!--Oyunlar-->
            <li class="divider hide-for-small"></li>
            <!-- Salonlar -->
            <li class="divider"></li>
            <li class="has-dropdown">
                {{ HTML::link_to_action('admin.shows@index','Gösteriler',array(),array('class'=>'active')) }}
                <ul class="dropdown">
                    <li><label>Türkçe</label></li>
                    <li>{{HTML::link_to_action('admin.shows@add', 'Oyun Ekle',array('oyun'),array())}}</li>
                </ul>
                </li>

            <li class="divider hide-for-small"></li>
           <li class="divider"></li>
            <ul class="dropdown">
            <li class="has-dropdown">
                {{ HTML::link_to_action('admin.others@index','Seminerler',array(),array('class'=>'active')) }}
                <ul class="dropdown">
                    <li><label>Düzenlemeler</label></li>
                    <li class="has-dropdown">
                        <a href="#" class="">Türkçe</a>
                        <ul class="dropdown">

                    <li>{{HTML::link_to_action('admin.others@add_exhibition', 'Sergi Ekle',array(),array())}}</li>
                    <li>{{HTML::link_to_action('admin.others@add_conference', 'Konferans Ekle',array(),array())}}</li>
                    <li>{{HTML::link_to_action('admin.others@add_workshop', 'Workshop Ekle',array(),array())}}</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li><label>Edits</label></li>
            <li class="has-dropdown">
                <a href="#" class="">English</a>
                <ul class="dropdown">




                    <li>{{HTML::link_to_action('admin.others@add_exhibition_en', 'Add Exhibition',array(),array())}}</li>
                    <li>{{HTML::link_to_action('admin.others@add_conference_en', 'Add Conference',array(),array())}}</li>
                    <li>{{HTML::link_to_action('admin.others@add_workshop_en', 'Add Workshop',array(),array())}}</li>
                    </ul>
            </li>
            </ul>
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
            <li>{{ HTML::link_to_action('admin.showings@index', 'Program') }}</li>

          </li>
          <li class="divider hide-for-small"></li>
          <!-- end of program -->
          <!-- Makaleler -->
           <li class="divider"></li>


            <li class="has-dropdown">  {{ HTML::link_to_action('admin.subjects@index','Makaleler',array(),array('class'=>'active')) }}
                <ul class="dropdown">
                    <li><label>Düzenlemeler</label></li>
                    <li class="has-dropdown">
                        <a href="#" class="">Türkçe</a>
                        <ul class="dropdown">

                        <li>{{ HTML::link_to_action('admin.subjects@show', 'Sunuş', array('$slug'=>'sunum')) }}</li>
                        <li>{{ HTML::link_to_action('admin.subjects@show', 'Manifesto', array('$slug'=>'manifesto')) }}</li>
                        <li>{{ HTML::link_to_action('admin.subjects@show', 'Makaleler', array('$slug'=>'makaleler')) }}</li>
                        <li>{{ HTML::link_to_action('admin.subjects@show', 'Ekip', array('$slug'=>'ekip')) }}</li>
                        <li>{{ HTML::link_to_action('admin.subjects@show', 'Basında', array('$slug'=>'basın')) }}</li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li><label>Edits</label></li>
                    <li class="has-dropdown">
                        <a href="#" class="">English</a>
                        <ul class="dropdown">


                        <li>{{ HTML::link_to_action('admin.subjects@show', 'Presentation', array('$slug'=>'presentation')) }}</li>

                        <li>{{ HTML::link_to_action('admin.subjects@show', 'Manifest', array('$slug'=>'manifest')) }}</li>

                        <li>{{ HTML::link_to_action('admin.subjects@show', 'Articles', array('$slug'=>'articles')) }}</li>

                        <li>{{ HTML::link_to_action('admin.subjects@show', 'Crew', array('$slug'=>'crew')) }}</li>

                        <li>{{ HTML::link_to_action('admin.subjects@show', 'Press', array('$slug'=>'press')) }}</li>
                    </ul>
                </li>
                    </ul>
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
