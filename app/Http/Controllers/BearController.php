<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bear; 

class BearController extends Controller
{
    public function index() {
	    $bears = Bear::orderBy('weight','DESC')->paginate(5);
	    return view('bear.index', compact('bears'));
	}


    public function add() {
    	$bear = new Bear;
		$bear->name = Request::get('name');
		$bear->weight = Request::get('weight');
	    $bear->save();	 		
		return Redirect::to('index');
    }

    public function delete($id) {
    	$bear = Bear::find($id);  
	    $bear->delete();
	    return Redirect::to('index');   
    }

 
}
