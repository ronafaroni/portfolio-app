<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home One
    public function indexOne()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.homes.index', compact('bodyClass'));
    }

}
