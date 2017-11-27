<?php

namespace App\Http\Controllers\forum;

use Auth;
use Session;
use App\User;
use Validator;
use App\Userdetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing forums page');
        }

        return view('forum.index');
    }

    public function single()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing forums page');
        }

        return view('forum.single');
    }

}
