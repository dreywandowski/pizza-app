<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;   // this allows us to factor in our Pizza model to allow us query the db 

class Pizzas extends Controller
{
	// function to handle the view

    public function index(){
    	/**$pizza = [
	'type' =>'naija', 
'location' => 'agege', 
'price' => 5
];**/

// retrive all the records in the db
$pizza = Pizza::all();

    return view('mine', [
    	'pizza' =>$pizza, 
    ]);
}




// function to handle a wildcard query 
    public function show($id){
    	 return view('details', ['id' => $id]);
    }
}
