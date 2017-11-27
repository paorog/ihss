<?php

namespace App\Http\Controllers\cms;

use Auth;
use Excel;
use Session;
use App\User;
use Validator;
use App\Userdetail;
use App\ProgramServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function show()
    {
        if(!Auth::user() && Auth::user()->access_type != 'SU001')
        {
            return redirect()->route('user.login')->with('system_msg','Only the web administration has access in this module.');
        }

        $activeUsers = User::where('status','UA001')->get();


        $inactiveUsers = User::where('status','UA002')->get();
        $programservices = ProgramServices::paginate(10);

        return view('cms.setting')->with(compact('activeUsers','inactiveUsers','programservices'));
    }

}
