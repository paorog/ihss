<?php

namespace App\Http\Controllers\frontend;

use Auth;
use Session;
use App\User;
use App\ProgramServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramServicesController extends Controller
{
    public function show()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing programs and services page');
        }

        $programservices = ProgramServices::paginate(10);

        return view('frontend.programs.show')->with(compact('programservices'));
    }

    public function filter($searchby, $searchkey)
    {

        $programservices = $searchby == 'null' ?
                           ProgramServices::where('center_name','like','%'.$searchkey.'%')->paginate(10)
                           :
                           ProgramServices::where($searchby,'like','%'.$searchkey.'%')->paginate(10);

        return response()->json($programservices,200);
    }

    public function showSingle()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing programs and services page');
        }

        $ps_title = 'Program Services Title Here';

        return view('frontend.programs.single')->with(compact('ps_title'));
    }

    public function create()
    {

    }

    public function postCreate(Request $request)
    {

    }

}
