<?php

namespace App\Http\Controllers\frontend;

use Auth;
use Excel;
use Session;
use App\User;
use Validator;
use App\Userdetail;
use App\ProgramServices;
use App\NgoList;
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

        $programservices = ProgramServices::paginate(5);
        $ngo_list = NgoList::paginate(5);

        return view('frontend.admin.show')->with(compact('activeUsers','inactiveUsers','programservices','ngo_list'));
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

    public function postUploadNgoList(Request $request)
    {

        if ($request->hasFile('ngo_list')) {
            $path = $request->file('ngo_list')->getRealPath();
        
            $data = Excel::load($path)->get();
            
            if ($data->count() > 0) {
                foreach ($data->toArray() as $key => $row) {
                    $insert_data[] = array(
                        'agency'                  => $row['agency'] == null ? '' : $row['agency'],
                        'address'                 => $row['address'] == null ? '' : $row['address'],
                        'contact_numbers'         => $row['contact_numbers'] == null ? '' : $row['contact_numbers'],
                        'email'                   => $row['email'] == null ? '' : $row['email'],
                        'fax'                     => $row['fax'] == null ? '' : $row['fax'],
                        'contact_person'          => $row['contact_person'] == null ? '' : $row['contact_person'],
                        'contact_person_position' => $row['contact_person_position'] == null ? '' : $row['contact_person_position'],
                        'registration_number'     => $row['registration_number'] == null ? '' : $row['registration_number'],
                        'license_number'          => $row['license_number'] == null ? '' : $row['license_number'],
                        'accredited_number'       => $row['accredited_number'] == null ? '' : $row['accredited_number'],
                        'programs_and_services'   => $row['programs_and_services'] == null ? '' : $row['programs_and_services'],
                        'service_type'            => $row['service_type'] == null ? '' : $row['service_type'],
                        'clientele'               => $row['clientele'] == null ? '' : $row['clientele'],
                        'locations'               => $row['locations'] == null ? '' : $row['locations'],
                        'userid'                  => Auth::user()->userid
                    );
                    
                }

                if (!empty($insert_data)) {
                    foreach($insert_data as $data)
                    {
                        NgoList::create($data);
                    }
                    
                    return redirect()->back()->with(array('system_message' => 'Excel file for Ngo List is successfully loaded in the server', 'notification_type' => 'success'));
                }
            }
        }

        // if($request->hasFile('ngo_list'))
        // {
        //     $path = $request->file('ngo_list')->getRealPath();
        //     Excel::load($path, function($reader) {
            
        //         $reader->each(function ($sheet,$index){
        //             ProgramServices::create(array(
        //                     'agency'                  => $sheet['agency'] == null ? '' : $sheet['agency'],
        //                     'address'                 => $sheet['address'] == null ? '' : $sheet['address'],
        //                     'contact_numbers'         => $sheet['contact_numbers'] == null ? '' : $sheet['contact_numbers'],
        //                     'email'                   => $sheet['email'] == null ? '' : $sheet['email'],
        //                     'fax'                     => $sheet['fax'] == null ? '' : $sheet['fax'],
        //                     'contact_person'          => $sheet['contact_person'] == null ? '' : $sheet['contact_person'],
        //                     'contact_person_position' => $sheet['contact_person_position'] == null ? '' : $sheet['contact_person_position'],
        //                     'registration_number'     => $sheet['registration_number'] == null ? '' : $sheet['registration_number'],
        //                     'license_number'          => $sheet['license_number'] == null ? '' : $sheet['license_number'],
        //                     'accredited_number'       => $sheet['accredited_number'] == null ? '' : $sheet['accredited_number'],
        //                     'programs_and_services'   => $sheet['programs_and_services'] == null ? '' : $sheet['programs_and_services'],
        //                     'service_type'            => $sheet['service_type'] == null ? '' : $sheet['service_type'],
        //                     'clientele'               => $sheet['clientele'] == null ? '' : $sheet['clientele'],
        //                     'locations'               => $sheet['locations'] == null ? '' : $sheet['locations'],
        //                     'userid'                  => Auth::user()->userid
        //                 )
        //             );

        //         });

        //         return redirect()->back()->with(array('system_message' => 'Excel file for Ngo List is successfully loaded in the server', 'notification_type' => 'success'));
        //     });

        // }

        return redirect()->back()->with(array('system_message' => 'No excel file is loaded. Please check if you uploaded the correct file.', 'notification_type' => 'error'));
    }

    public function userApprove(Request $request)
    {
        $userid = $request->userid;
        $user = User::where('userid', $userid)->first();
        $user->payment = "RP002";
        $user->status = "UA001";
        $user->approverid = Auth::user()->userid;
        $user->update();

        return redirect()->back()->with(array('system_message' => 'User '.$user->username.' donation info is updated and is now active', 'notification_type' => 'success'));
    }

}
