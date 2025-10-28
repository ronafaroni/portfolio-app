<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function errorPage()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.errorPage', compact('bodyClass'));
    }

    public function about()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.about', compact('bodyClass'));
    }

    public function blog()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.blog', compact('bodyClass'));
    }

    public function blogDetails()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.blogDetails', compact('bodyClass'));
    }

    public function contact()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.contact', compact('bodyClass'));
    }

    public function projectDetails()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.projectDetails', compact('bodyClass'));
    }

    public function projects()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.projects', compact('bodyClass'));
    }

    public function projectsMasonry()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.projectsMasonry', compact('bodyClass'));
    }

    public function services()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.services', compact('bodyClass'));
    }


}
