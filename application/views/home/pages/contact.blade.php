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
             <div class="two columns push-four">
                 <div class="titlestyle">
                     <h2>Contact</h2>
                 </div>
             </div>
             </div>
         <div class="row">



             <div class="four columns">
                 <address>
                     <h2  class="makale">Address :</h2><br>
                     <p> Cumhuriyet Bulvari No: 249 / 3<br /> Park Apt
                         35220
                         Alsancak / IZMIR</p>
                     Tel : +90 232 4652255<br />
                     Fax : +90 232 4631897<br />
                     Mail : <a href="mailto:info@izmirkuklagunleri.com"> info@izmirkuklagunleri.com </a><br>

                 </address>
                 <br />

                 <iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Cumhuriyet+Bulvar%C4%B1,+249,+Izmir,+Turkey&amp;aq=0&amp;oq=Cumhuriyet+Bulvar%C4%B1+249&amp;sll=38.428674,27.13551&amp;sspn=0.028038,0.055747&amp;ie=UTF8&amp;hq=&amp;hnear=Alsancak+Mh.,+Cumhuriyet+Blv+No:249,+Konak,+Turkey&amp;t=m&amp;z=14&amp;ll=38.436586,27.141592&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Cumhuriyet+Bulvar%C4%B1,+249,+Izmir,+Turkey&amp;aq=0&amp;oq=Cumhuriyet+Bulvar%C4%B1+249&amp;sll=38.428674,27.13551&amp;sspn=0.028038,0.055747&amp;ie=UTF8&amp;hq=&amp;hnear=Alsancak+Mh.,+Cumhuriyet+Blv+No:249,+Konak,+Turkey&amp;t=m&amp;z=14&amp;ll=38.436586,27.141592" style="color:#0000FF;text-align:left">Haritayı Büyüt</a></small>

             </div>

             <div class="message">
                 <?php echo !empty($error_list) ? $error_list : ''; ?>
             </div>
             <br />

             <div class="six columns push-two">
                 <h2   class="makale">Contact Us</h2>
                  @if(Session::has('success'))
					<h6>{{ Session::get('success') }}</h6>
				  @endif
				  {{ Form::open(URL::to_action('home.pages@mail_en'), 'POST') }}
              <!--   <form id="contact-form" action="" method="post"> -->
				{{ Form::token() }}
                     <fieldset>

                         <div class="field">
                             <label for="name">Name:</label>
                             <input type="text" id="name" name="name" autofocus required="required"
                                    title="Your first and last name">
                         </div>

                         <div class="field" title="sadfsadf">
                             <label for="email">Email:</label>
                             <input type="email" id="email" name="email" required="required" title="We will respond to this address">
                         </div>

                         <div class="field">
                             <label for="phone">Phone:</label>
                             <input type="text" id="phone" name="phone" title="If you prefer a phone call">
                         </div>

                         <div class="field">
                             <label for="message">Message:</label>
                             <textarea id="message" name="message" cols="15" rows="5" required="required"
                                     ></textarea>
                         </div>

                         <div class="field submit">
                             <input type="submit" value="Submit"/>
                         </div>

                     </fieldset>


                 </form>
             </div>






         </div>
     </div>
     @endsection

@section('footer')
@include('partials.footer')
@endsection
