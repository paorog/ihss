<?php

namespace App\Http\Controllers\frontend;

use Auth;
use Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaperThesisController extends Controller
{
    public function show()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing programs and services page');
        }

        return view('frontend.papers.show');
    }

    public function showSingle()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing programs and services page');
        }

        $ps_title = 'Program Services Title Here';

        return view('frontend.papers.single')->with(compact('ps_title'));
    }

    public function create()
    {
        
    }

    public function postCreate(Request $request)
    {
        
    }

}
