<?php

namespace App\Http\Controllers\frontend;

use Auth;
use Session;
use App\User;
use App\NgoList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NgoListController extends Controller
{
    public function list()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing programs and services page');
        }

        $ngolist = NgoList::paginate(5);

        return view('frontend.ngolist.list')->with(compact('ngolist'));
    }

    public function filter($searchby, $searchkey)
    {
        $search = strtoupper($searchkey);

        $ngolist = $searchby == 'null' ?
                           NgoList::whereRaw("UPPER(agency) like '%$search%'")->paginate(10)
                           :
                           NgoList::whereRaw("UPPER($searchby) like '%$search%'")->paginate(10);

        return response()->json($ngolist,200);
    }

    public function show($ngo_id)
    {
        $ngodata = NgoList::find($ngo_id);
        $ps_title = $ngodata->agency;

        return view('frontend.ngolist.show')->with(compact('ngodata', 'ps_title'));
    }
}
