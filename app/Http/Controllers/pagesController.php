<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;

class pagesController extends Controller
{

    public function test(){
        $name = 'Amado';
        return View('test')->with('name',$name);
    }

    public function home(){
    	$nick = 'Amado';
        return View('Summer.home')->with('nick',$nick);
    }
}
