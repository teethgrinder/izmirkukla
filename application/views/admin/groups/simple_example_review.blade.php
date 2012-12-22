<h2>Review</h2>

<p>
	First Name: {{ CreateGroupForm::get( 'name', 'none entered' ) }}
</p>

<p>
	Status: {{ CreateGroupForm::has( 'country' ) ? CreateGroupForm::$country[CreateGroupForm::get( 'country' )] : 'none selected' }}
</p>


{{ HTML::link_to_action( 'admin.groups@edit', 'Make Changes', array($id ) ) }} 
{{ HTML::link_to_action( 'admin.groups@add', 'Return to Examples Page') }}
