<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UpdateController extends Controller
{
    //
    public function update()
    {
    
    	$name = request('name');
    	$age = request('age');
    	$email= request('email');
    	$occupation = request('occupation');
    	$address = request('address');
    	$id = auth()->user()->id;

    	DB::update('update users set name=?,age=?,email=?,occupation=?,address=? where id=?',[$name,$age,$email,$occupation,$address,$id]);
    	return view('home');


    }
}
