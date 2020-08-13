<!-- this ensures and helps us display and render consistent pages across our poject-->

@extends('layouts.layouts')


<!-- this allows us break up our views in to chunks for us to reference to in the layout file-->
	@section('content')


<center><span><p> Welcome to the Pizza Ordering App!!</span><br>

	<p> Here you can get access to our world-class pizza ordering 
	service</p>

<!-- we can access the session variable this way--><br> <p> {{session('msg')}}</p><br>


	<a href="/pizzas/all"> View all available pizzas</a> |  
	<a href="/pizzas/create"> Make your own order</a>



@endsection

