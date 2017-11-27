<?php

namespace App\Http\Controllers\frontend;

use Auth;
use Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessionalEducationController extends Controller
{
    public function show()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing professional educations page');
        }

        return view('frontend.education.show');
    }

    public function showSingle()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing programs and services page');
        }

        $ps_title = 'Training Title';

        return view('frontend.education.single')->with(compact('ps_title'));
    }

    public function create()
    {
        
    }

    public function postCreate(Request $request)
    {
        
    }

}
