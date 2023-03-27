<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{

    function index ()
    {
       return view('index');
    }
    function about ()
    {
       return view('about');
    }
    function academic ()
    {
       return view('academic');
    }
    function gallery ()
    {
       return view('gallery');
    }
    function contact ()
    {
       return view('contact');
    }
}
