
<!-- Footer -->

<footer class="row">
    <div class="nine columns push-three">
        <div class="row">
            <div class="six columns push-nine">
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
@foreach($others as $other)
<div id="{{ $other->id }}" class="reveal-modal [expand, xlarge, large, medium, small]">
    <h4>{{ $other->name_english}}</h4>
    <p>{{ $other->information_english }}</p>
    <p>Venue: {{ $other->place }} </p>
    <p>Date: {{ $other-> date }} </p>
    <a class="close-reveal-modal">&#215;</a>
</div>
@endforeach