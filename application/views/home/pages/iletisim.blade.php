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

         <br />


             <h2>İletişim</h2>

             <div class="message">
                 <?php echo !empty($error_list) ? $error_list : ''; ?>
             </div>
             <div class="four columns">
             <form id="contact-form" action="" method="post">

                 <fieldset>

                     <div class="field">
                         <label for="name">Name</label>
                         <input type="text" id="name" name="name" autofocus required="required"
                                title="Your first and last name">
                     </div>

                     <div class="field" title="sadfsadf">
                         <label for="email">Email</label>
                         <input type="email" id="email" name="email" required="required" title="We will respond to this address">
                     </div>

                     <div class="field">
                         <label for="phone">Phone</label>
                         <input type="text" id="phone" name="phone" title="If you prefer a phone call">
                     </div>

                     <div class="field">
                         <label for="message">Message</label>
                         <textarea id="message" name="message" cols="15" rows="5" required="required"
                                 ></textarea>
                     </div>

                     <div class="field submit">
                         <input type="submit" value="Submit"/>
                     </div>

                 </fieldset>

         </div>
             </form>
             <div class="two columns">
            <br /><br />
                 <iframe width="200" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=izmir+alsancak+cumhuriyet+bulvar%C4%B1+kukla&amp;aq=&amp;sll=38.437052,27.136059&amp;sspn=0.05291,0.111494&amp;ie=UTF8&amp;hq=alsancak+cumhuriyet+bulvar%C4%B1+kukla&amp;hnear=Izmir,+Turkey&amp;ll=38.437642,27.142007&amp;spn=0.052909,0.111494&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=2932712734944624230&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=izmir+alsancak+cumhuriyet+bulvar%C4%B1+kukla&amp;aq=&amp;sll=38.437052,27.136059&amp;sspn=0.05291,0.111494&amp;ie=UTF8&amp;hq=alsancak+cumhuriyet+bulvar%C4%B1+kukla&amp;hnear=Izmir,+Turkey&amp;ll=38.437642,27.142007&amp;spn=0.052909,0.111494&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=2932712734944624230" style="color:#0000FF;text-align:left">View Larger Map</a></small>

             </div>


     </div>
     @endsection