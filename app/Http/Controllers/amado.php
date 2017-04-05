<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class amado extends Controller
{
    public function nickname(){
    	$nick = 'Diosta';
    	return view('Summer.slider');
    }
}
