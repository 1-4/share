<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteConfig;
use \Image;

class SiteConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $toptext    = 'Site Config';

        $site_config = SiteConfig::first();

        return view('backend.siteconfig',compact('toptext','site_config'));
    }

    public function res()
    {
        $this->resizeImage(640, 800, 'g6.jpg', public_path('img/gallery'));
        // $this->resizeImage(640, 800, 'g2.jpg', public_path('img/gallery'));
        // $this->resizeImage(640, 800, 'g3.jpg', public_path('img/gallery'));
        // $this->resizeImage(640, 800, 'g4.jpg', public_path('img/gallery'));
        // $this->resizeImage(640, 800, 'g5.jpg', public_path('img/gallery'));
    }

    public function store(Request $request)
    {
        
        /* General */
        if(!empty($request->logo)){
        
            // $getimageName = 'logo.'.$request->logo->getClientOriginalExtension();
            $getimageName1 = 'logo.png';

            $request->logo->move(public_path('img'), $getimageName1);        

            $this->resizeImage(155, 40, $getimageName1, public_path('img'));        

        }

        if(!empty($request->top_img_banner)){
                    
            $getimageName2 = 'banner-bg.jpg';

            $request->top_img_banner->move(public_path('img'), $getimageName2);        

            $this->resizeImage(1920, 840, $getimageName2, public_path('img'));        

        }

        if(!empty($request->top_text_banner)){
            SiteConfig::first()->update(['top_text_banner' => $request->top_text_banner]);
        }

        if(!empty($request->top_detail_text_banner)){
            SiteConfig::first()->update(['top_detail_text_banner' => $request->top_detail_text_banner]);
        }

        /* General information */
        if(!empty($request->email)){
            SiteConfig::first()->update(['email' => $request->email]);
        }

        if(!empty($request->phone_number)){
            SiteConfig::first()->update(['phone_number' => $request->phone_number]);
        }

        if(!empty($request->address)){
            SiteConfig::first()->update(['address' => $request->address]);
        }

        /* Social media */
        if(!empty($request->facebook)){
            SiteConfig::first()->update(['facebook' => $request->facebook]);
        }

        if(!empty($request->instagram)){
            SiteConfig::first()->update(['instagram' => $request->instagram]);
        }

        if(!empty($request->twitter)){
            SiteConfig::first()->update(['twitter' => $request->twitter]);
        }



        return redirect()->back()->with('message', 'Has been save.');
    }

    public function resizeImage($width, $height, $imageName, $path)
    {
        // $getimageName = $imageName;        

        $img = Image::make($path.'/'.$imageName);

        $img->resize($width, $height);

        $img->save($path.'/'.$imageName);
    }
}
