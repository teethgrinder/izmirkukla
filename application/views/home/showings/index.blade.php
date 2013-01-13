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
		
		<h3>Oyunlar</h3>

	  <nav role="navigation">
        <div id="calendar">	
       
			
			 
			 
			
            <ul class="component-calendar">
				@foreach($showingdates as $date)
                <li class="active color1">
                    <a href="#day<?php echo $date->schedule_date ;?>">
                        <span class="day"><strong><?php echo $date->schedule_date ;?></strong><span>&nbsp;</span></span>
                        <span class="content">
                            <small><?php echo $date->schedule_date ;?></small>
                            <img src="js/calendar/images/yeni.jpg" width="126" height="91" alt=""/>
                            <strong>Day <?php echo $date->schedule_date ;?></strong>
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
                                    <h2>December 1st</h2>
                                    <h3>Feature Title</h3>
                                </hgroup>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, libero at lacinia ornare, tellus tellus fermentum est, ac iaculis libero leo eget diam.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, libero at lacinia ornare, tellus tellus fermentum est, ac iaculis libero leo eget diam.</p>
                            </div>
                            <div class="left">
                                <a href="#" target="_blank"><img src="js/calendar/images/temp2.jpg" width="356" height="430" alt=""/></a>
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

