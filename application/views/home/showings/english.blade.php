@layout('layouts.main')

@section('navigation')
@include('partials.navigation')
@endsection

@section('sidebar')
@include('partials.sidebar')
@endsection

@section('content')
<div class="row" xmlns="http://www.w3.org/1999/html">
     <div class="nine columns push-three">

             <hr />
         <div class="ten columns">
              <a href='<?php echo URL::to('../Program.php');?>' class="buy">{{HTML::image('laravel/img/buyenglish.png')}}</a>
         </div>
         <div class="two columns">
             <div class="titlestyle">
                 <h2>Program</h2>
             </div>
         </div>
         <nav role="navigation">
             <div id="calendar">

                 <ul class="component-calendar">


                     <li class="active color1">
                         <a href="#day07">
                             <span class="day"><strong>07</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>7 March</small>
                            <img src="../laravel/img/programs/7mart.jpg" width="126" height="91" alt=""/>
                            <strong>Day 1</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color2">
                         <a href="#day08">
                             <span class="day"><strong>08</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>8 March</small>
                            <img src="../laravel/img/programs/8mart.jpg" width="126" height="91" alt=""/>
                            <strong>Day 2</strong>
                        </span>
                         </a>
                     </li>

                     <li class="color3">
                         <a href="#day09">
                             <span class="day"><strong>09</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>10 March</small>
                            <img src="../laravel/img/programs/9mart.jpg" width="126" height="91" alt=""/>
                            <strong>Day 3</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color4">
                         <a href="#day10">
                             <span class="day"><strong>10</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>11March</small>
                            <img src="../laravel/img/programs/10mart.jpg" width="126" height="91" alt=""/>
                            <strong>Day 4</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color1">
                         <a href="#day11">
                             <span class="day"><strong>11</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>11 March</small>
                            <img src="../laravel/img/programs/11mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 5</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color2">
                         <a href="#day12">
                             <span class="day"><strong>12</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>12 March</small>
                            <img src="../laravel/img/programs/12mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 6</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color3">
                         <a href="#day13">
                             <span class="day"><strong>13</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>13 March</small>
                            <img src="../laravel/img/programs/13mart.jpg" width="126" height="91" alt=""/>
                            <strong>Day 7</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color4">
                         <a href="#day14">
                             <span class="day"><strong>14</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>14 March</small>
                            <img src="../laravel/img/programs/14mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 8</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color1">
                         <a href="#day15">
                             <span class="day"><strong>15</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>15 March</small>
                            <img src="../laravel/img/programs/15mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 9</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color2">
                         <a href="#day16">
                             <span class="day"><strong>16</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>16 March</small>
                            <img src="../laravel/img/programs/16mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 10</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color3">
                         <a href="#day17">
                             <span class="day"><strong>17</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>17 March</small>
                            <img src="../laravel/img/programs/17mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 11</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color4">
                         <a href="#day18">
                             <span class="day"><strong>18</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>18 March</small>
                            <img src="../laravel/img/programs/18mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 12</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color1">
                         <a href="#day19">
                             <span class="day"><strong>19</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>19 March</small>
                            <img src="../laravel/img/programs/19mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 13</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color2">
                         <a href="#day20">
                             <span class="day"><strong>20</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>20 March</small>
                            <img src="../laravel/img/programs/20mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 14</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color3">
                         <a href="#day21">
                             <span class="day"><strong>21</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>21 March</small>
                            <img src="../laravel/img/programs/21mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 15</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color4">
                         <a href="#day22">
                             <span class="day"><strong>22</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>22 March</small>
                            <img src="../laravel/img/programs/22mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 16</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color1">
                         <a href="#day23">
                             <span class="day"><strong>23</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>23 March</small>
                            <img src="../laravel/img/programs/23mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 17</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color2">
                         <a href="#day24">
                             <span class="day"><strong>24</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>24 March</small>
                            <img src="../laravel/img/programs/24mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 18</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color3">
                         <a href="#day27">
                             <span class="day"><strong>27</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>27 March</small>
                            <img src="../laravel/img/programs/27mart.jpg"   width="126" height="91" alt=""/>
                            <strong>Day 19</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color4">
                         <a href="#day28">
                             <span class="day"><strong>28</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>28 March</small>
                            <img src="../laravel/img/programs/27mart.jpg" width="126" height="91" alt=""/>
                            <strong>Day 20</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color1">
                         <a href="#day29">
                             <span class="day"><strong>29</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>29 March</small>
                            <img src="../laravel/img/programs/29mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 21</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color2">
                         <a href="#day30">
                             <span class="day"><strong>30</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>30 March</small>
                            <img src="../laravel/img/programs/29mart.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 22</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color3">
                         <a href="#day31">
                             <span class="day"><strong>31</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>31 March</small>
                            <img src="../laravel/img/programs/31mart1nisan.jpg"  width="126" height="91" alt=""/>
                            <strong>Day 23</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color4">
                         <a href="#day01">
                             <span class="day"><strong>01</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>1 April</small>
                            <img src="../laravel/img/programs/31mart1nisan.jpg" width="126" height="91" alt=""/>
                            <strong>Day 24</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color1">
                         <a href="#day02">
                             <span class="day"><strong>02</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>2 April</small>
                            <img src="../laravel/img/programs/23nisan.jpg" width="126" height="91" alt=""/>
                            <strong>Day 25</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color2">
                         <a href="#day03">
                             <span class="day"><strong>03</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>3 April</small>
                            <img src="../laravel/img/programs/23nisan.jpg" width="126" height="91" alt=""/>
                            <strong>Day 24</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color3">
                         <a href="#day05">
                             <span class="day"><strong>05</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>5 April</small>
                            <img src="../laravel/img/programs/56nisan.jpg" width="126" height="91" alt=""/>
                            <strong>Day 25</strong>
                        </span>
                         </a>
                     </li>

                     <li class="active color4">
                         <a href="#day06">
                             <span class="day"><strong>06</strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small>6 April</small>
                            <img src="../laravel/img/programs/56nisan.jpg" width="126" height="91" alt=""/>
                            <strong>Day 26</strong>
                        </span>
                         </a>
                     </li>



                 </ul>
             </div><!--// ENDS: #CALENDAR -->
         </nav>

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
                                         <h6>Daily Program</h6>
                                     </hgroup>


                                    <?php $showings= Showing::where('date_calendar','=',$date->show_date)->order_by('performance_date', 'ASC')->get(); ?>

                                     <ul  class="programit">
                                         @foreach ($showings as $showing)
                                         <li><div class="program-it">
                                            <h4>{{HTML::link_to_action('home.shows@show',$showing->show->name_english,array($showing->show->slug)) }}</h4>
                                             <h4 class="group_name"> {{$showing->show->group->name}}<br />( {{$showing->show->group->country}} )</h4>


                                              <p class="theater-name"> {{$showing->theater->name}}
                                                 <br />
                                               {{ $showing->show_time }}  </span><br />
                                                {{ $showing->price }}
                                             <br />
                                             @if($showing->price === "15.-TL")
                                             <a href='<?php echo URL::to('../Program.php');?>?id={{ $showing->id }};' class="buy">{{HTML::image('laravel/img/biletenglish.png')}}</a>
                                             @endif
                                             </p>
                                         </div>
                                         </li>
                                         @endforeach
                                     </ul>



                                 </div>
                                 <div class="left">
                                      <img src="../js/calendar/images/temp2.jpg" width="156" height="430" alt=""/>
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

@section('footer')
@include('partials.footer')
@endsection
