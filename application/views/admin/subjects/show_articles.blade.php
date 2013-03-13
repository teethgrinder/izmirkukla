@layout('layouts.dashboard')
@section('navigation')
@include('partials.dashnav')
@endsection

@section('content')
<div class="row">
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="twelve columns ">

        <h3>Kukla Grupları</h3>
        @if(Session::has('success'))
        {{ Session::get('success') }}
        @endif
        <table class="twelve">
            <thead>
            <tr>
                <th>Yazar</th>
                <th>Başlık</th>
                <th>İçerik</th>
                <th>Düzenle/Kaldır</th>

            </tr>
            </thead>

            <tbody>
            @foreach($subjects as $subject)
            <tr>

                <td>{{ $subject-> writer }}</td>
                <td>{{ $subject-> title }}</td>
                <td>{{ $subject-> content }}</td>
                <td>{{HTML::link_to_action('admin.subjects@edit','Düzenle',array($subject->slug),array('class'=>'small radius button'))}}</td>
                <td>{{HTML::link_to_action('admin.subjects@delete','Sil',array($subject->id),array('class'=>'button alert small radius',"onclick"=>"return confirm('Silmek için onaylayın')"))}}</td>

            </tr>
            @endforeach
            </tbody>
        </table>

            <div class="button-bar">
                <ul class="button-group radius">
                  <li>  {{ HTML::link_to_action('admin.subjects@add_articles', 'Yeni Konu',array($subject->slug),array('class'=>'button radius')) }}</li>
                </ul>
            </div>
    </div>
    @endsection


    @section('footer')
    @include('partials.dashfooter')
    @endsection