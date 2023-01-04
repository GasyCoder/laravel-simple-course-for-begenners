<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public  function about_us(){
    $text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, impedit? Nam voluptatum quas harum odit nesciunt mollitia deleniti repellendus nihil fuga. Alias doloribus deleniti porro praesentium labore provident. Unde, sapiente';
    return view('about', compact('text'));
    }
}
