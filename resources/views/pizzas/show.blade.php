@extends('layouts.layouts')


	

Here is the Pizza you ordered: 
<div>
	Name: {{$pizza->name}}<br><br>
	Type: {{$pizza->type}}<br><br>
	ID: {{$pizza->id}}
</div>


<p><a href="/pizzas"> Back to the list of all pizzas</a></p>