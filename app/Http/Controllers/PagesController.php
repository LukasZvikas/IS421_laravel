<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    static function contact()
    {
        return view('pages.contact');
    }
}



?>