<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about()
    {

    }

    public function contact()
    {
        return view('front.main.contact');
    }
}
