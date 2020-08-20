@extends('layouts.layouts')


	

Here is the Pizza you ordered: 
<div>
	Name: {{$pizza->name}}<br><br>
	Type: {{$pizza->type}}<br><br>
	Price: {{$pizza->price}}<br><br>
	<!-- we MUST loop tru the array of data previously cast to array in the Pizza model-->
	
	Extras: <ul>
		@foreach($pizza->extras as $extra)
		<li> {{ $extra }} </li>
		@endforeach<br><br>
	
</div>


<p><a href="/pizzas"> Back to the home page</a></p>