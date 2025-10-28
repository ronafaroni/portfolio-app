<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home One
    public function indexOne()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.homes.indexOne', compact('bodyClass'));
    }
    // Home Two
    public function indexTwo()
    {
        $bodyClass = 'page-wrapper for-sidebar-menu';
        return view('frontend.homes.indexTwo', compact('bodyClass'));
    }

    // Home Three
    public function indexThree()
    {
        return view('frontend.homes.indexThree');
    }

}
