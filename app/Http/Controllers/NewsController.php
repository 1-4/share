<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\News;
use \Image;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function postList()
    {
        $toptext    = 'Post';

        $newss = News::paginate(10);

        return view('backend.postlist',compact('toptext','newss'));
    }

    public function index()
    {
        $toptext    = 'New Post';
        $title    = 'Post';

        return view('backend.news',compact('toptext'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'img_cover' => 'required|image',
            'title'     => 'required',
            'content'   => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $getimageName1 = str_replace(' ','-',$request->title).'.'.$request->img_cover->getClientOriginalExtension();

        $request->img_cover->move(public_path('news/img'), $getimageName1);      

        $this->resizeImage(730, 341, $getimageName1, public_path('news/img')); 

        News::create([
            'title'     => $request->title,
            'img_cover' => $getimageName1,
            'content'   => $request->content,
            'view'      => 0
        ]);

        return redirect()->back()->with('message', 'Success publish content');
    }

    public function edit($id)
    {
        $toptext    = 'Edit Post';
        $news = News::find($id);

        return view('backend.postedit',compact('toptext','news'));
    }

    public function update(Request $request, $id)
    {
        if(!empty($request->img_cover)){
            $validator = Validator::make($request->all(),[
                'img_cover' => 'required|image',
                'title'     => 'required',
                'content'   => 'required'
            ]);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator);
            } 
            $getimageName1 = str_replace(' ','-',$request->title).'.'.$request->img_cover->getClientOriginalExtension();

            $request->img_cover->move(public_path('news/img'), $getimageName1);      

            $this->resizeImage(730, 341, $getimageName1, public_path('news/img')); 

            News::find($id)->update([
                'title'     => $request->title,
                'img_cover' => $getimageName1,
                'content'   => $request->content
            ]);

            return redirect()->back()->with('message', 'Success update content');

        }else{
            $validator = Validator::make($request->all(),[
                'title'     => 'required',
                'content'   => 'required'
            ]);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator);
            }             

            News::find($id)->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);

            return redirect()->back()->with('message', 'Success update content');
        }
        
    }

    public function resizeImage($width, $height, $imageName, $path)
    {             

        $img = Image::make($path.'/'.$imageName);

        $img->resize($width, $height);

        $img->save($path.'/'.$imageName);
    }
}
