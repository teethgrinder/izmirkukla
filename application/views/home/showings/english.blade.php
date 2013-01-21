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

         <h3>Shows</h3>

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
                                         <h3>Program</h3>
                                     </hgroup>

                                     <ul>
                                         <?php $showings= Showing::where('date_calendar','=',$date->showdate)->order_by('performance_date', 'ASC')->get(); ?>


                                         @foreach ($showings as $showing)

                                         <li>{{ $showing->show->name }}</li>

                                         @endforeach
                                     </ul>
                                 </div>
                                 <div class="left">
                                     <a href="#" target="_blank"><img src="../js/calendar/images/temp2.jpg" width="356" height="430" alt=""/></a>
                                 </div>
                             </div>
                         </section>
                         <p class="top"><a href="#container">Back to Top</a></p>
                     </li>

                     @endforeach



                 </ul>
             </div><!--// ENDS: #DAYDETAIL -->
         </article>


     </div><!--// ENDS #CONTAINER -->



     @endsection
