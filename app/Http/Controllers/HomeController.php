<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('welcome')
        ->with('name','Dany')
        ->with('occupation','Astronout');
    }
}
