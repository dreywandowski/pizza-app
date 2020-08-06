<!-- this ensures and helps us display and render consistent pages across our poject-->

@extends('layouts.layouts')


<!-- this allows us break up our views in to chunks for us to reference to in the layout file-->
	@section('content')


<center><span><p> Welcome to the Pizza Odering App!!</span><br>
<div class="sharethis-inline-share-buttons"></div>


<!-- Access the details from the model-->

<p>@foreach($pizza as $pizza) <br>

<b> Pizza name: {{ $pizza->name}} </b>... Type: <i> {{ $pizza->type }}<br></i></p></center>
@endforeach


@endsection


@section('form')
<!--  register form -->
<form action="redirect.php" enctype="multipart/form-data" method="POST" class="hidden" name="reg" id="register">
		<div>
		<h3><u> Sign Up Form</u></h3>
	</div>
	<label>Name</label><br>
		<input type="text" name="first_name" placeholder="first name" class="first_name"  required><br>
		<input type="text" name="last_name" placeholder="last name" required>
		<br>
		<br>
	<label> E-mail</label><br>
		<input type="email" name="email" placeholder="example@gmail.com" required>
		<br>
		<br>

	<label>Create a username</label><br>
		<input type="text" name="username" id="username" minlength="5" required>
		<br>
		<br>
<span id="usercheck"></span>

	
		
	<label>Create a password</label><br>
		<input class="password" id="pwd1" type="password" name="password" minlength="8" required>
		<br>
		<br>
	<label> Confirm password</label><br>
		<input type="password" id="pwd2" name="password1" minlength="8" required><br>
		<br>

	<label>Choose account type:</label><br>

	
	<input type="radio" id="teacher" name="staff_type"  value="teacher" /> Teacher
	<input type="radio" id="student" name="staff_type"  value="student"/> Student
	</div>
	<br><br>

<input type="checkbox" name="agree" required>I agree to the terms and conditions<br>
	<button id="submit" name= "all" type="submit"> Sign Up</button>

</form>


@endsection