<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pizza extends Controller
{
	// function to handle the view

    public function index(){
    	$pizza = [
	'type' =>'naija', 
'location' => 'agege', 
'price' => 5
];

    return view('mine', $pizza);
}




// function to handle a wildcard query 
    public function show($id){
    	 return view('details', ['id' => $id]);
    }
}
