<h2>Review</h2>

<p>
	First Name: {{ CreateGroupForm::get( 'first_name', 'none entered' ) }}
</p>

<p>
	Last Name: {{ CreateGroupForm::get( 'last_name', 'none entered' ) }}
</p>

<p>
	Status: {{ CreateGroupForm::has( 'status' ) ? CreateGroupForm::$status[CreateGroupForm::get( 'status' )] : 'none selected' }}
</p>


{{ HTML::link_to_route( 'form_examples', 'Make Changes', array( 'simple_example' ) ) }} {{ HTML::link_to_route( 'form_examples', 'Return to Examples Page', array( 'index' ) ) }}
