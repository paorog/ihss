<?php

namespace App\Http\Controllers\frontend;

use App\User;
use App\Userdetail;
use App\UserPayment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class RegistrationController extends Controller
{
    public function show()
    {
    	return view('frontend.registration.show');
    }

    public function postRegister(Request $request)
    {
    	//dd(sprintf('%03d', 1));
    	$input = $request->except('_token');
    	//dd($input);
    	$rules = array(
    		'email' => 'required|email|unique:users',
    		'username' => 'required|min:5|max:15|alphadash|unique:users',
    		'password' => 'required|min:5|max:15|alphadash',
    		'retypepass' => 'required|same:password',
    		'terms' => 'numeric|min:1',
		);

    	$messages = [
		    'same' => 'Password does not match the confirm password',
		    'required' => ':Attribute is required'
		];

		$validator = Validator::make($input, $rules, $messages);

		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator)->withInput();
		}

        $payment = $input['payment'] == null ? 'RP001' : 'RP002';

        $padded = date('Ym');
        $recentUser = User::where('userid','like','%'.$padded.'%')->orderby('created_at','desc')->first();
        $recentUserID = $recentUser == null ? 1 : (int)substr($recentUser->userid,6) + 1;
        $userid = $padded.sprintf('%03d',$recentUserID);

		User::create(array(
			'userid' => $userid,
			'accesstype' => 'SU004',
			'username' => $input['username'],
			'email' => $input['email'],
			'password' => bcrypt($input['password']),
			'password_history' => '',
			'invalid_login' => 0,
			'login_status' => 'LS001',
			'payment' => $payment,
			'status' => 'UA002',
			'approverid' => ''
		));

		Userdetail::create(array(
			'userid' => $userid,
		));

		if ($request->hasFile('payment')) 
		{
            $photo = $request->payment;
            $photo_file = $photo->getClientOriginalName();
            $photo_fname = uniqid() . md5($photo_file . str_random(6)) . '.' . $photo->getClientOriginalExtension();
			$photo->move(storage_path() . DIRECTORY_SEPARATOR . 'user_payments', $photo_fname);
			
			UserPayment::create(array(
				'userid'		   => $userid,
				'payment_original' => $photo_file,
				'payment_fname'    => $photo_fname
			));
		}

		$regmsg = $input['payment'] == null
				?
		'Registration successfully, Please follow-up your payment to activate your account. Thank you!'
		:
		'Registration successfully, An administrator will approve your registration in less than 5 minutes. Thank you!'
		;

		return redirect()->back()->with('registration_msg',$regmsg);

    }

    public function showRegistrationUpdate($userid)
    {
    	$user = User::where('userid',$userid)->first();
    	return view('frontend.registration.update')->with(compact('user'));
	}
	
	public function registrationUpdate(Request $request)
	{
		if ($request->hasFile('payment')) 
		{
            $photo = $request->payment;
            $photo_file = $photo->getClientOriginalName();
            $photo_fname = uniqid() . md5($photo_file . str_random(6)) . '.' . $photo->getClientOriginalExtension();
			$photo->move(storage_path() . DIRECTORY_SEPARATOR . 'user_payments', $photo_fname);
			
			UserPayment::create(array(
				'userid'		   => $request->userid,
				'payment_original' => $photo_file,
				'payment_fname'    => $photo_fname
			));
			
            $updatemsg = 'user donation information is updated, please wait for an administrator to validate.';
        
            return redirect()->back()->with('registration_msg', $updatemsg);
		}
		
		return redirect()->back()->with('registration_msg', 'failed to update user');
	}
}
