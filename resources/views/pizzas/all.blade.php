@extends('layouts.layouts')

<p> Here is the list of all available pizzas:</p>



<p>@foreach($pizza as $pizza) <br>

<b> Pizza name: {{ $pizza->name}} </b>... Type: <i> {{ $pizza->type }}<br></i></p></center>
@endforeach