
<!-- Basic Needs -->
<header>
<div class="row">
  <div class="twelve columns">
    <nav class="top-bar">
      <ul>
        <!-- Title Area -->


          @if (Config::get('application.language') == 'tr')
        <li><a href="/tr/anasayfa"  >{{HTML::image('laravel/img/logoson.png')}}</a> </li>
          @elseif (Config::get('application.language') == 'en')
        <li> <a href="/en/homepage" >{{HTML::image('laravel/img/logoson.png')}}</a> </li>
          @endif
      </ul>


 
    </nav>
      <ul class="icons">
          @if (Config::get('application.language') == 'tr')
          <li class="flag"><a href="/en/homepage" >{{HTML::image('laravel/img/english.png')}}</a></li>
          @elseif (Config::get('application.language') == 'en')
          <li class="flag"><a href="/tr/anasayfa"  >{{HTML::image('laravel/img/turkey.png')}}</a></li>
          @endif
          <li><a href="https://twitter.com/izmirpuppetdays" class="fc-webicon twitter medium">Like us on Twitter</a></li>
          <li><a href="https://www.facebook.com/groups/izmirinternationalpuppetdays/" class="fc-webicon facebook medium">Like us on Facebook</a></li>



      </ul>
  </div>
</div>
</header>
