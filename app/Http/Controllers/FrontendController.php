<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutPage;
use App\SiteConfig;
use App\News;

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

    public function news()
    {        
        $site_config = SiteConfig::first();

        $newss = News::orderBy('created_at', 'desc')->paginate(10);

        $new_post = News::orderBy('created_at', 'desc')->limit(5)->get();

        return view('frontend.news',compact('site_config','newss','new_post'));
    }

    public function newsDetail($id)
    {        
        $site_config = SiteConfig::first();

        $news = News::find($id);

        $new_post = News::orderBy('created_at', 'desc')->limit(5)->get();

        News::find($id)->update(['view' => $news->view + 1]);

        return view('frontend.newsdetail',compact('site_config','news','new_post'));
    }
}
