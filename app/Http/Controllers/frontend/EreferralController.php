<?php

namespace App\Http\Controllers\frontend;

use Auth;
use Session;
use App\User;
use Validator;
use Carbon\Carbon;
use App\Referral;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EreferralController extends Controller
{
    public function show()
    {
        $referrals = Referral::orderby('created_at','desc')->paginate(5);

    	return view('frontend.ereferral.show')->with(compact('referrals'));
    }

    public function create(Request $request)
    {
        return view('frontend.ereferral.create');
    }

    public function postCreate(Request $request)
    {
        $user = Auth::user()->userid ?? '0';
        $input = $request->except('_token');

        $rules = [
            'contact_number' => 'required|digits_between:11,50',
            'email'          => 'required|email|max:100',
            'message'        => 'required'
        ];

        $messages = [
            'required' => 'This field is required.',
            'numeric'  => 'Please input numbers only.',
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        Referral::create(array(
            'referralid' => 'rf'.date('Ymdhis'),
            'userid' => $user,
            'contact_number' => $input['contact_number'],
            'email' => $input['email'],
            'message' => $input['message']
        ));

        return redirect()->back()->with('system_msg','The referral has been submitted.');
    }

}
