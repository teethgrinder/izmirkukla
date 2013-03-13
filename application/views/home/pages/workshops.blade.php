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

        <hr />
        <div class="row">
            <div class="two columns push-four ">
                <div class="titlestyle">
                    <h2>Workshops</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns">

                <ul class="postit">

                    @foreach($others as $other)
                    <li>
                        <div class="post-it">

                            <h6>{{ HTML::link_to_action('home.others@show',$other->name_english,array($other->id),array('data-reveal-id'=>$other->id)) }}</h6>
                            <br />
                            <!--  <p>{{ HTML::link_to_action('home.others@show',Str::words(strip_tags($other->information),10),array($other->id),array('data-reveal-id'=>$other->id)) }}</p>-->
                            <adress>
                                <br />
                                <p>Venue : {{ HTML::link_to_action('home.others@show',$other->place,array($other->id),array('data-reveal-id'=>$other->id)) }}</p>
                                <br />
                                <p>Date: {{ HTML::link_to_action('home.others@show',$other->date,array($other->id),array('data-reveal-id'=>$other->id)) }}</p>
                            </adress>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>
    @endsection

    @section('footer')
    @include('partials.showfooter')
    @endsection
