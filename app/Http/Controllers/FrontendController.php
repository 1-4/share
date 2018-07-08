<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function about()
    {
        $toptext = 'About';
        $breadcrumb = 'About';
        return view('frontend.about',compact('toptext','breadcrumb'));
    }

    public function contact()
    {
        $toptext = 'Contact Us';
        $breadcrumb = 'Contact';
        return view('frontend.contact',compact('toptext','breadcrumb'));
    }

    public function services()
    {
        $toptext = 'Services';
        $breadcrumb = 'Services';
        return view('frontend.services',compact('toptext','breadcrumb'));
    }

    public function gallery()
    {
        $toptext = 'Gallery';
        $breadcrumb = 'Gallery';
        return view('frontend.gallery',compact('toptext','breadcrumb'));
    }
}
