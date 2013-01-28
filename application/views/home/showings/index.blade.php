@layout('layouts.main')

@section('navigation')
@include('partials.navigation')
@endsection

@section('sidebar')
@include('partials.sidebar')
@endsection

@section('content')
<div class="row" xmlns="http://www.w3.org/1999/html">



     <!-- Main Content Section -->
     <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
     <div class="nine columns push-three">

             <hr />
         <div class="ten columns">
             <a href="#" class="buy">{{HTML::image('laravel/img/bilet1.png')}}</a>
         </div>
         <div class="two columns">
             <div class="titlestyle">
                 <h2>Program</h2>
             </div>
         </div>



         <nav role="navigation">
             <div id="calendar">





                 <ul class="component-calendar">
                     @foreach($showingdates as $date)

                     <li class="active color1">
                         <a href="#day<?php echo $date->schedule_date ;?>">
                             <span class="day"><strong><?php echo $date->schedule_date;?></strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small><?php $day=$date->show_date;echo $date->get_language($day) ;?></small>
                            <img src="../js/calendar/images/yeni.jpg" width="126" height="91" alt=""/>

                        </span>
                         </a>
                     </li>
                     @endforeach




                 </ul>
             </div><!--// ENDS: #CALENDAR -->

         </nav>
       

         <article role="main">
             <div id="daydetail">
                 <ul id="daydetail-list">
                     @foreach($showingdates as $date)
                     <li>
                         <section>
                             <h1>Day 1</h1>
                             <div id="day<?php echo $date->schedule_date ;?>" class="daydetail-content">
                                 <div class="right">
                                     <hgroup>
                                         <h2><?php $day=$date->show_date;  echo $date->get_language($day) ;?></h2>
                                         <h6>Günlük Program</h6>
                                     </hgroup>


                                    <?php $showings= Showing::where('date_calendar','=',$date->show_date)->order_by('performance_date', 'ASC')->get(); ?>

                                     <ul  class="programit">
                                         @foreach ($showings as $showing)
                                         <li><div class="program-it">
                                            <h5>{{HTML::link_to_action('home.shows@show',$showing->show->name,array($showing->show->slug)) }}</h5>
                                             <p><h4>{{$showing->show->group->country}}</h4>
                                             <h4> {{$showing->show->group->name}}</h4>
                                              <span class="theater-name"> {{$showing->theater->name}}
                                                 <br />
                                               {{ $showing->show_time }}  </span>
                                             <a href="#" class="buy">{{HTML::image('laravel/img/bilet2.png')}}</a>
                                             </p>








                                         </div>
                                         </li>
                                         @endforeach
                                     </ul>



                                 </div>
                                 <div class="left">
                                      <img src="../js/calendar/images/temp2.jpg" width="356" height="430" alt=""/>
                                 </div>
                             </div>
                         </section>
                         <p class="top"><a href="#container">Back to Top</a></p>
                     </li>



                     @endforeach



                 </ul>
             </div><!--// ENDS: #DAYDETAIL -->

         </article>


             </div>

     <!--// ENDS #CONTAINER -->



     @endsection

