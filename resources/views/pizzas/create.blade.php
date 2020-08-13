@extends('layouts.layouts')


	@section('content')

<div>
	<p> Create new pizza</p>

	<form action="/pizzas/create" method="POST">
		@csrf <!-- this prevents laravel from stopping-->

		<label for="name"> Your name</label>
		<input type="text" name="fname" id="fname"><br>

			<label for="name"> Pizza name</label>
		<input type="text" name="name" id="name"><br>

     <label for="name"> Pizza type</label>
		<input type="text" name="type" id="type"><br><br>

		<input type="submit" value="Make your order!" name="create" >
	</form>
</div>



@endsection