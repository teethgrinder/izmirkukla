
<!-- Footer -->

<footer class="row">
    <div class="nine columns push-three">
        <div class="row">
            <div class="four columns offset-by-one">
                @if (Config::get('application.language') == 'tr')
                {{ HTML::link_to_action('home.shows@index','Oyunlara Dön',array(),array('class'=>'specialbutton')) }}
                @elseif (Config::get('application.language') == 'en')
                {{ HTML::link_to_action('home.shows@index','Back to Shows',array(),array('class'=>'specialbutton')) }}
                @endif
            </div>


            <div class="six columns push-three">

                <a href="mailto:info@izmirkuklagunleri.com">{{HTML::image('laravel/img/postakutusu.png')}} </a>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="six columns">
                <p>&copy; <?php echo date("Y"); ?> Designed by Dtba Software</p>
            </div>

        </div>
    </div>
</footer>
