<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteConfig;
use \Image;

class SiteConfigController extends Controller
{
    public function index()
    {
        $toptext    = 'Site Config';

        return view('backend.siteconfig',compact('toptext'));
    }

    public function store(Request $request)
    {
        

        $getimageName = 'logo.'.$request->logo->getClientOriginalExtension();

        $request->logo->move(public_path('img'), $getimageName);

        // $img = Image::make('images/'.$getimageName);

        // $img->resize(320, 240);

        // $img->save('images/'.$getimageName);

        // $logo = 'logo1.'.$request->logo->getClientOriginalExtension();

        $this->resizeImage(155, 40, $getimageName, public_path('img'));

        return redirect()->back();
    }

    public function resizeImage($width, $height, $imageName, $path)
    {
        // $getimageName = $imageName;        

        $img = Image::make($path.'/'.$imageName);

        $img->resize($width, $height);

        $img->save($path.'/'.$imageName);
    }
}
