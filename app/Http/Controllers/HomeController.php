<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index () {
    $name = 'Kakala';
    return view('hello', compact('name'));
    }

    public function show(){
        $name = 'Duplix Laral developer';
        return view('welcome', ['name'=> $name]);
    }
}
