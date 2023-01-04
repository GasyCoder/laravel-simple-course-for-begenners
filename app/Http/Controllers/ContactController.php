<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact_us(){
    $tel = '0349345251';
    $email = 'bezara@gmail.com';
    return view('contact', compact('tel', 'email'));
    }
}
