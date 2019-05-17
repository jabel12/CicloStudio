<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCS extends Controller
{
    public function index(){
    	return view('web.index');
    }

    public function createReg($city = null){
    	if(!$city){
    		$cities = Ciudad::Where('')
    	}
        return view('auth.register',['ciudad'=>$ciudad]);
    }

}
