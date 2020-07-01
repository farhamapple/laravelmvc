<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function index(){

    	return view('register');
    }

    public function register_post(Request $request){

    	//dd($request->all());

    	$arr_lempar = array(
    		'nama_lengkap' => $request['firstname']." ".$request['lastname'],
    	);

    	return view('welcome', $arr_lempar);
    }
}
