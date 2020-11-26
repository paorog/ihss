<?php

namespace App\Http\Controllers\frontend;

use Hash;
use Auth;
use Session;
use Validator;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserLoginController extends Controller
{
    public function show()
    {
        return view('frontend.login.show');
    }

    public function postLogin(Request $request)
    {
      	$input = $request->all();
      	$login = $request->login;
		$login_val = empty(strpos($request->login,'@')) ? 'username' : 'email';
		$password = $request->password;
		$user = $login_val == 'email' ? User::whereNull('deleted_at')->where('email',$login)->first() : User::whereNull('deleted_at')->where('username',$login)->first();
		
		if (empty($user))
			return redirect()->back()
						->withInput()
						->with([
							'alert'   => 'error',
							'message' => 'Username or email does not exist',
							'button'  => 'OK',
							'confirm' => 'true'
						]);
						
		$rules = [
			'login'    => 'required|min:5|max:50|exists:users,'.$login_val,
			'password' => 'required|alpha_dash|min:5|max:20'
		];

        $messages = [
            'required'  => 'This field is required.',
            'alpha_num' => 'Please input letters and numbers only.',
            'max'       => 'Input must be no more than :max characters',
            'exists'     => 'Username or email does not exist'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                        ->with(array(
                            'system_message' => 'Errors found! Please double check it before proceeding',
                            'notification_type' => 'warn'))
                        ->withErrors($validator)
                        ->withInput();
        }

		$credentials = array(
			'username' => $input['login'],
			'password' => $input['password'],
		);

		$user = User::where('username',$login)->orWhere('email',$login)->first();

		if($user->status == 'UA001')
		{
			
			if(Hash::check($password,$user->password))
			{
				if (Auth::attempt(['email' => $login, 'password' => $password]) || Auth::attempt(['username' => $login, 'password' => $password])){
					$user->login_status = 'LS001';
					$user->invalid_login = 0;
					$user->locked_date = NULL;
					$user->save();

					return redirect()->intended(route('home'))->with(array('system_message' => 'login successful', 'notification_type' => 'success'));
				}else {
					return redirect()->back()->with(array('system_message' => 'login unsuccessful', 'notification_type' => 'error'));
				}
			}
			else
			{
				if($user->invalid_login >= 5)
				{
						$user->login_status = 'LS002';
						$user->locked_date = date('Y-m-d H:i:s');
						$user->save();
						$loginMsg = 'Your account is locked due to multiple invalid logins';
						return redirect()->back()->with(array('system_message' => $loginMsg, 'notification_type' => 'warn'));
				}

				$user->invalid_login = $user->invalid_login+1;
				$user->save();
				$invalidLogins = $user->invalid_login;
				$loginMsg = $this->loginAttempts($invalidLogins);
				return redirect()->back()->with(array('system_message' => $loginMsg, 'notification_type' => 'warn'));
			}
		}
		else
		{
			if($user->payment == 'RP001')
			{
				
			}
			$loginMsg = $user->payment == 'RP001'
						?
						'Your account is not yet active. Please update your payment by clicking '
						:
						'It seems that your account is not yet activated. Please check your email for confirmation.'
						;
			$userStatus = $user->payment == 'RP001' ? 1 : 0;

			return redirect()->back()->with(['login_msg' => $loginMsg, 'user_status' => $userStatus, 'userid' => $user->userid ]);
		}
    }

    public function loginAttempts($invalidLogins)
    {
    	$loginMsg = 'Password is incorrect. You have '.$invalidLogins.' invalid login';
    	return $loginMsg;
    }

    public function postLogout()
    {
    	Auth::logout();
        Session::flush();
        return redirect('/user/login')->with('login_msg','You have logged out.');
    }
}
