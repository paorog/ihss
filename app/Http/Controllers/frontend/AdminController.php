<?php

namespace App\Http\Controllers\frontend;

use Auth;
use Excel;
use Session;
use App\User;
use Validator;
use App\Userdetail;
use App\ProgramServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function show()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing my account page');
        }

        $activeUsers = User::where('status','UA001')->get();
        $inactiveUsers = User::where('status','UA002')->get();
        $programservices = ProgramServices::paginate(10);

        return view('frontend.admin.show')->with(compact('activeUsers','inactiveUsers','programservices'));
    }

    public function postUploadProgramServices(Request $request)
    {

        if($request->hasFile('programservices'))
        {
            $path = $request->file('programservices')->getRealPath();
            Excel::load($path, function($reader) {

                $reader->each(function ($sheet,$index){
                    ProgramServices::create(array(
                            'field_office'   => $sheet['field_office'] == null ? '' : $sheet['field_office'],
                            'center_name'    => $sheet['center_name'] == null ? '' : $sheet['center_name'],
                            'center_adrs'    => $sheet['center_adrs'] == null ? '' : $sheet['center_adrs'],
                            'contact_number' => $sheet['contact_number'] == null ? '' : $sheet['contact_number'],
                            'center_head'    => $sheet['center_head'] == null ? '' : $sheet['center_head'],
                            'accredited'     => $sheet['accredited'] == null ? '' : $sheet['accredited'],
                            'userid'         => Auth::user()->userid
                        )
                    );

                });

                return redirect()->back()->with(array('system_message' => 'Excel file for Programs & Services is successfully loaded in the server', 'notification_type' => 'success'));
            });

        }

        return redirect()->back()->with(array('system_message' => 'No excel file is loaded. Please check if you uploaded the correct file.', 'notification_type' => 'error'));
    }

}
