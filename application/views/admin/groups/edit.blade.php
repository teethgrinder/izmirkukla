<h1>GRUP Düzenle</h1> 

{{ Form::open('edit/'.$id, 'PUT') }}
	<input type="hidden" name="_method" value="PUT">
	<p>
		Grup Adı: {{ Form::text( 'name', CreateGroupForm::old( 'name' ) ) }}
		{{ $errors->has( 'name' ) ? $errors->first( 'name' ) : '' }}
	</p>

	<p>
		Last Name: {{ Form::text( 'last_name', CreateGroupForm::old( 'last_name' ) ) }}
		{{ $errors->has( 'last_name' ) ? $errors->first( 'last_name' ) : '' }}
	</p>

	<p>
		Ülke: {{ Form::select( 'country', CreateGroupForm::$country, CreateGroupForm::old( 'country' ) ) }}
		{{ $errors->has( 'country' ) ? $errors->first( 'country' ) : '' }}
	</p>

	{{ Form::submit( 'Submit' ) }}

{{ Form::close() }}
