<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;   // this allows us to factor in our Pizza model to allow us query the db 

class PizzaController extends Controller
{

	// function to handle the view
  public function index(){

// retrive the home page
    return view('pizzas.index');
}



    public function all(){

// retrive all the records in the db
$pizza = Pizza::all();

    return view('pizzas.all', [
    	'pizza' =>$pizza, 
    ]);
}


    // function to create a resource
    public function create(){ 

        return view('pizzas.create');
    }



     // function to store a resource
    public function store(){

        // create a new instance of the Pizza model

        $pizza = new Pizza();

// this allows for grabbing the post values and setting to the model

        $pizza->name = request('fname');
        $pizza->type = request('name');
        $pizza->type = request('type');
        $pizza->price = request('price');
        $pizza->extras = request('extras');


// save the data
        $pizza->save();

// we can use the "with" keyword as a means of storing session variables, which we can access wherever we want. It takes two parameter, the variable, and the message
        
        return redirect('/pizzas')->with('msg', 'Thanks for your order');
    }


// function to handle a wildcard query 
    public function show($id){
        $pizza = Pizza::findorFail($id);

    	 return view('pizzas.show', [
            'pizza' =>$pizza,
        ]);
        }
 
 // function to delete   

public function destroy($id){
    $pizza = Pizza::findorFail($id);
    $pizza->delete();

    return redirect('/pizzas')->with('msg', 'Pizza deleted successfully');
}


}
