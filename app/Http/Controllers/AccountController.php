<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $toptext    = 'Account Setting';        

        return view('backend.account',compact('toptext'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'email' => 'required|email'
        ]);    
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        if($request->password != ""){
            User::find(Auth::user()->id)->update(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password'  => bcrypt($request->password)
                ]
            );
        }else{
            User::find(Auth::user()->id)->update(
                [
                    'name' => $request->name,
                    'email' => $request->email
                ]
            );
        }
        

        return redirect()->back()->with('message', 'Update success');
    }
}
