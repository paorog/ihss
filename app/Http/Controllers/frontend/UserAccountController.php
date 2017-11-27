<?php

namespace App\Http\Controllers\frontend;

use Auth;
use Session;
use App\User;
use Validator;
use App\Userdetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAccountController extends Controller
{
    public function show()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing my account page');
        }

        $currentUser = Auth::user();

        $userinfo = Userdetail::where('userid',$currentUser->userid)->first();

        if(!empty($userinfo->organization))
        {
            $org_name = explode('|', $userinfo->organization);
            $org_adrs = explode('|', $userinfo->organization_adrs);

            foreach($org_name as $key => $org)
            {
                if($org == '')
                {
                  continue;
                }

                foreach($org_adrs as $k => $adrs)
                {
                    if($key != $k)
                    {
                        continue;
                    }
                    $organization[] = array('name' => $org, 'adrs' => $adrs);
                }
            }
        }

        $webstring = $this->randomString(5);

        return view('frontend.myaccount.show')->with(compact('userinfo','webstring','organization'));
    }

    public function edit()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing my account page');
        }

        $currentUser = Auth::user();

        $userinfo = Userdetail::where('userid',$currentUser->userid)->first();

        if(!empty($userinfo->organization))
        {
            $org_name = explode('|', $userinfo->organization);
            $org_adrs = explode('|', $userinfo->organization_adrs);

            foreach($org_name as $key => $org)
            {
                if($org == '')
                {
                  continue;
                }

                foreach($org_adrs as $k => $adrs)
                {
                    if($key != $k)
                    {
                        continue;
                    }
                    $organization[] = array('name' => $org, 'adrs' => $adrs);
                }
            }
        }

        $webstring = $this->randomString(5);

        return view('frontend.myaccount.edit')->with(compact('userinfo','webstring','organization','accountPercentage'));
    }

    public function updateAboutMe(Request $request)
    {
        $currentUser = Auth::user();
        $input = $request->except('_token');
        $userinfo = Userdetail::where('userid',$currentUser->userid)->first();

        $rules = [
            'firstname'     => 'max:50',
            'middlename'    => 'max:50',
            'lastname'      => 'max:50',
            'profile_photo' => 'mimes:jpeg,bmp,png',
            'cover_photo'   => 'mimes:jpeg,bmp,png',
            'gender'        => 'required',
            'address'       => 'max:200',
            'mobile_number' => 'regex:/(09)[0-9]{9}/',
        ];

        $messages = [
            'numeric'  => 'The field must be numebers only',
            'mimes'    => 'The field must be jpeg,bmp,png file only',
            'regex'    => 'The field must be a valid mobile number'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        if(empty($userinfo->profile_photo_file) && isset($input['profile_photo']) )
        {
            $photo = $input['profile_photo'];
            $photo_file = $photo->getClientOriginalName();
            $photo_fname = uniqid() . md5($photo_file . str_random(6)) . '.' . $photo->getClientOriginalExtension();
            $photo->move(storage_path() . DIRECTORY_SEPARATOR . 'profile_photos', $photo_fname);
        }

        if(empty($userinfo->cover_photo_file) && isset($input['cover_photo']) )
        {
            $cover = $input['cover_photo'];
            $cover_file = $cover->getClientOriginalName();
            $cover_fname = uniqid() . md5($cover_file . str_random(6)) . '.' . $cover->getClientOriginalExtension();
            $cover->move(storage_path() . DIRECTORY_SEPARATOR . 'cover_photos', $cover_fname);
        }

        $userinfo = Userdetail::where('userid',$currentUser->userid)->first();
        $userinfo->firstname = $input['firstname'];
        $userinfo->middlename = $input['middlename'];
        $userinfo->lastname = $input['lastname'];
        $userinfo->address = $input['address'];
        $userinfo->birthday = $input['birthday'];
        $userinfo->gender = $input['gender'];
        $userinfo->mobile_number = $input['mobile_number'];
        $userinfo->about_me = $input['about_me'];
        $userinfo->updated_at = date('Y-m-d H:i:s');

        if(empty($userinfo->profile_photo_file) && isset($input['profile_photo']) )
        {
            $userinfo->profile_photo_file = $photo_file;
            $userinfo->profile_photo_fname = $photo_fname;
        }

        if(empty($userinfo->cover_photo_file) && isset($input['cover_photo']) )
        {
            $userinfo->cover_photo_file = $cover_file;
            $userinfo->cover_photo_fname = $cover_fname;
        }

        $userinfo->save();

        return redirect()->route('user.myaccount.show');
    }

    public function updateWorkDetails(Request $request)
    {
        $currentUser = Auth::user();
        $input = $request->except('_token');

        $rules = [
            'company'          => 'max:50',
            'position'         => 'max:50',
            'company-address'  => 'max:200'
        ];

        $messages = [
            'max'  => 'The field should be no more than :max characters'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $userinfo = Userdetail::where('userid',$currentUser->userid)->first();
        $userinfo->company = $input['company'];
        $userinfo->occupation = $input['position'];
        $userinfo->company_adrs = $input['company-address'];
        $userinfo->save();

        return redirect()->route('user.myaccount.show');
    }

    public function updateCollegeDetails(Request $request)
    {

        $currentUser = Auth::user();
        $input = $request->except('_token');

        $rules = [
            'college-university' => 'max:50',
            'course'             => 'max:50',
            'col-yr-gr'          => 'digits:4|integer|min:1900|max:'.date('Y'),
            'college-address'    => 'max:200'
        ];

        $messages = [
            'max'     => 'The field must be no more than :max',
            'digits'  => 'The field must be 4 digits only',
            'integer' => 'The field must be integer only',
            'min'     => 'The field must be greater than 1900'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $userinfo = Userdetail::where('userid',$currentUser->userid)->first();
        $userinfo->college_name = $input['college-university'];
        $userinfo->college_course = $input['course'];
        $userinfo->college_yr_grad = $input['col-yr-gr'];
        $userinfo->college_adrs = $input['college-address'];
        $userinfo->save();

        return redirect()->route('user.myaccount.show');
    }

    public function updateSchoolDetails(Request $request)
    {

        $currentUser = Auth::user();
        $input = $request->except('_token');

        $rules = [
            'highschool'     => 'max:50',
            'schl-yr-gr'     => 'digits:4|integer|min:1900|max:'.date('Y'),
            'school-address' => 'max:200'
        ];

        $messages = [
            'max'     => 'The field must be no more than :max characters',
            'digits'  => 'The field must be 4 digits only',
            'integer' => 'The field must be integer only',
            'min'     => 'The field must be greater than 1900'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $currentUser = Auth::user();
        $input = $request->except('_token');

        $userinfo = Userdetail::where('userid',$currentUser->userid)->first();
        $userinfo->school_name = $input['highschool'];
        $userinfo->school_yr_grad = $input['schl-yr-gr'];
        $userinfo->school_adrs = $input['school-address'];
        $userinfo->save();

        return redirect()->route('user.myaccount.show');
    }

    public function updateOrganization(Request $request)
    {

        $currentUser = Auth::user();
        $input = $request->except('_token');

        $rules = [
            'org'      => 'required',
            'org-adrs' => 'required'
        ];

        $messages = [
            'required' => 'The field is required'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $currentUser = Auth::user();
        $input = $request->except('_token');

        $userinfo = Userdetail::where('userid',$currentUser->userid)->first();

        $org = explode('|',$userinfo->organization);
        $org_adrs = explode('|',$userinfo->organization_adrs);

        array_push($org,$input['org']);
        array_push($org_adrs,$input['org-adrs']);

        $org = implode('|',$org);
        $org_adrs = implode('|',$org_adrs);

        $userinfo->organization = $org;
        $userinfo->organization_adrs = $org_adrs;
        $userinfo->save();

        return redirect()->route('user.myaccount.show');
    }

    public function removeProfilePhoto()
    {
        $currentUser = Auth::user();
        $userinfo = Userdetail::where('userid',$currentUser->userid)->first();
        $userinfo->profile_photo_file = "";
        $userinfo->profile_photo_fname= "";
        $userinfo->save();

        return redirect()->back();
    }

    public function removeCoverPhoto()
    {
        $currentUser = Auth::user();
        $userinfo = Userdetail::where('userid',$currentUser->userid)->first();
        $userinfo->cover_photo_file = "";
        $userinfo->cover_photo_fname= "";
        $userinfo->save();

        return redirect()->back();
    }

    public function removeOrganization($key)
    {
        $currentUser = Auth::user();
        $userinfo = Userdetail::where('userid',$currentUser->userid)->first();

        $userinfo = Userdetail::where('userid',$currentUser->userid)->first();

        $org = explode('|',$userinfo->organization);
        $org_adrs = explode('|',$userinfo->organization_adrs);

        unset($org[$key]);
        unset($org_adrs[$key]);

        $org = implode('|',$org);
        $org_adrs = implode('|',$org_adrs);

        $userinfo->organization = $org;
        $userinfo->organization_adrs = $org_adrs;
        $userinfo->save();

        return redirect()->back();
    }

    function randomString($length = 5) {
		$str = "";
		$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		return $str;
	}
}
