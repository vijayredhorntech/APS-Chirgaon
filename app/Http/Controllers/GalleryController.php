<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function gallery ()
    {
        return view('gallery');
    }
}
