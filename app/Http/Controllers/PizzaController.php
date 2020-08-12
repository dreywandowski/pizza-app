<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;   // this allows us to factor in our Pizza model to allow us query the db 

class PizzaController extends Controller
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

    return view('pizzas.index', [
    	'pizza' =>$pizza, 
    ]);
}




// function to handle a wildcard query 
    public function show($id){
        $pizza = Pizza::find($id);

    	 return view('pizzas.show', [
            'pizza' =>$pizza,
        ]);
        }
    


    // function to create a resource
    public function create(){
        return view('pizzas.create');
    }
}
