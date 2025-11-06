<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home One
    public function index()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.homes.index', compact('bodyClass'));
    }

    public function download()
    {
        $filePath = public_path('assets/download/Rona Faroni.pdf');
        $fileName = 'Rona Faroni - Curriculum Vitae.pdf';

        return response()->download($filePath, $fileName);
    }

}
