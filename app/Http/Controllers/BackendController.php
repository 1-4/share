<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\AboutPage;
use App\Inbox;

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


}
