<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutPage;
use App\SiteConfig;

class FrontendController extends Controller
{
    public function index()
    {
        $site_config = SiteConfig::first();

        return view('welcome', compact('site_config'));
    }

    public function about()
    {
        $toptext    = 'About';
        $breadcrumb = 'About';
        $title      = AboutPage::first()->title;
        $content    = AboutPage::first()->content;
        $site_config = SiteConfig::first();

        return view('frontend.about',compact('toptext','breadcrumb','content','title','site_config'));
    }

    public function contact()
    {
        $toptext = 'Contact Us';
        $breadcrumb = 'Contact';
        $site_config = SiteConfig::first();

        return view('frontend.contact',compact('toptext','breadcrumb','site_config'));
    }

    public function services()
    {
        $toptext = 'Services';
        $breadcrumb = 'Services';
        $site_config = SiteConfig::first();

        return view('frontend.services',compact('toptext','breadcrumb','site_config'));
    }

    public function gallery()
    {
        $toptext = 'Gallery';
        $breadcrumb = 'Gallery';
        $site_config = SiteConfig::first();

        return view('frontend.gallery',compact('toptext','breadcrumb','site_config'));
    }
}
