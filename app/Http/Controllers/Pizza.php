<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pizza extends Controller
{
    public function index(){
    	$pizza = [
	'type' =>'naija', 
'location' => 'agege', 
'price' => 5
];

    return view('mine', $pizza);
}


    public function show($id){
    	 return view('details', ['id' => $id]);
    }
}
