<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inbox;
use Validator;

class InboxController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'subject'   => 'required',
            'email'     => 'required|email',
            'name'      => 'required',
            'message'   => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        Inbox::create($request->all());

        return redirect()->back()->with('message', 'Success send message.');
    }

}
