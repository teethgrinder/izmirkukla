@layout('layouts.default')
@section('content')
		<div id="content">
			<!-- NIVO SLIDER -->
						<div class="hr"></div>
						<h3>Haber</h3>
						<div class="hr"></div>
<div class="post">
<h1 style="color:red"> {{ HTML::link('view/'.$post->id, $post->title) }} </h1>
<p>{{ $post->body }}</p>
			@if ( !Auth::guest() )
              	{{ Form::open('post/'.$post->id, 'DELETE')}}
	       {{ Form::submit('Sil') }}
	    		{{ Form::close() }}
	    		 {{ Form::open('post/'.$post->id, 'GET')}}
                {{ Form::submit('Düzenle') }}
                {{ Form::close() }}
    		@endif
<p>{{ HTML::link('haberler', '&larr; Tümü.') }}</p>
</div>
</div>
@endsection