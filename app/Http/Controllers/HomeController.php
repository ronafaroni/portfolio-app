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
        $file1 = public_path('assets/download/CV - RONA FARONI.pdf');
        $file2 = public_path('assets/download/Rona Faroni.pdf');

        $filePath = file_exists($file1) ? $file1 : (file_exists($file2) ? $file2 : null);

        if (!$filePath) {
            abort(404, 'File CV tidak ditemukan.');
        }

        $fileName = 'CV - Rona Faroni.pdf';

        return response()->download($filePath, $fileName, [
            'Content-Type' => 'application/pdf',
        ]);
    }

}
