@extends('layouts.layouts')

<p> Here is the list of all available pizzas:</p>



<p>@foreach($pizza as $pizza) <br>

<b><u>Name: </u></b>{{ $pizza->name}} <br>
<b><u>Type:</u></b> {{ $pizza->type }} <br>
<b><u> </u></b> Price:</u> {{ $pizza->price }} <br>
<b><u> Extras:</b></u><ul>
		@foreach($pizza->extras as $extra)
		<li> {{ $extra }} </li></ul>
		@endforeach <br></i></p>

<!-- to delete -->
		<form action="/pizzas/{{ $pizza->id }}" method="POST">
			@csrf
			@method('DELETE')
<button> Delete Order</button>
		</form>
@endforeach