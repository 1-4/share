<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\AboutPage;
use App\Inbox;
use App\Gallery;
use App\Staff;
use \Image;


class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function about()
    {        
        $toptext    = 'About page';

        $title      = AboutPage::first()->title;
        $content    = AboutPage::first()->content;        

        return view('backend.pages.about',compact('toptext','title','content'));
    }

    public function aboutStore(Request $request)
    {
        $toptext    = 'About page';

        //dd($request->all());

        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'content' => 'required'
        ]);
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        if(is_null(AboutPage::first()->title)){
            AboutPage::create($request->all());
        }else{
            AboutPage::first()->update($request->all());
        }
        

        return redirect()->back();        
    }    

    public function gallery()
    {
        $toptext = "Gallery";

        $gallerys = Gallery::orderBy('created_at', 'desc')->paginate(10);

        return view('backend.pages.gallery', compact('toptext','gallerys'));
    }

    public function galleryStore(Request $request)
    {
       $validator = Validator::make($request->all(),[
            'new_img' => 'required|image',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $getimageName1 = str_replace(' ','-',$request->title).str_replace([' ',':'],['',''],\Carbon\Carbon::now()).'.'.$request->new_img->getClientOriginalExtension();

        $request->new_img->move(public_path('img/gallery'), $getimageName1);      

        $this->resizeImage(640, 800, $getimageName1, public_path('img/gallery')); 

        Gallery::create(['image' => $getimageName1]);

        return redirect()->back()->with('message', 'Success upload new image.');
    }

    public function galleryDestroy($id)
    {
        Gallery::find($id)->delete();

        return redirect()->back()->with('message','Delete Image Success');
    }

    public function inbox()
    {
        $toptext    = 'Inbox';
        $inboxs     = Inbox::orderBy('created_at','desc')->paginate(10);

        return view('backend.inbox',compact('toptext','inboxs'));
    }

    public function readInbox($id)
    {
        $inbox      = Inbox::find($id);
        $inbox->update(['read' => 1]);
        return view('backend.inboxdetail', compact('inbox'));
    }

    public function destroy($id)
    {
        $inbox      = Inbox::find($id);

        $inbox->delete();

        return redirect()->back();
    }

    public function inboxDeleteAll()
    {
        Inbox::truncate();        

        return redirect()->back();
    }

    public function staff()
    {
        $toptext    = 'Staff';
        $staffs     = Staff::paginate(10);

        return view('backend.pages.staff',compact('toptext','staffs'));
    }

    public function staffStore(Request $request)
    {
       $validator = Validator::make($request->all(),[
            'staff_img' => 'required|image',
            'position' => 'required',
            'full_name' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $getimageName1 = str_replace(' ','-',$request->title).str_replace([' ',':'],['',''],\Carbon\Carbon::now()).'.'.$request->staff_img->getClientOriginalExtension();

        $request->staff_img->move(public_path('img/staff'), $getimageName1);      

        $this->resizeImage(640, 800, $getimageName1, public_path('img/staff')); 

        Staff::create(['img_staff' => $getimageName1, 'position' => $request->position, 'full_name' => $request->full_name]);

        return redirect()->back()->with('message', 'Success upload new image.');
    }

    public function staffDestroy($id)
    {        
        $staffs     = Staff::find($id)->delete();

        return redirect()->back()->with('message', 'Success delete staf data.');
    }

    public function resizeImage($width, $height, $imageName, $path)
    {
        // $getimageName = $imageName;        

        $img = Image::make($path.'/'.$imageName);

        $img->resize($width, $height);

        $img->save($path.'/'.$imageName);
    }


}
