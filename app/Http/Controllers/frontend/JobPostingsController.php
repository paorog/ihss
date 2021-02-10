<?php

namespace App\Http\Controllers\frontend;

use Auth;
use Session;
use App\User;
use Validator;
use Carbon\Carbon;
use App\Jobposting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobPostingsController extends Controller
{
    public function show()
    {
    	if(!Auth::user())
    	{
    		return redirect()->route('user.login')->with('system_msg','Please login first before viewing job postings');
    	}

        $jobposts = Jobposting::orderby('created_at','desc')->paginate(5);

    	return view('frontend.jobpostings.show')->with(compact('jobposts'));
    }

    public function showSingle($postid)
    {
        $post = Jobposting::where('postid',$postid)->first();
        $currentDate = new Carbon();
        $postDate = $post->created_at;
        $diff = $currentDate->diffForHumans($postDate);
        return view('frontend.jobpostings.single')->with(compact('post','diff'));
    }

    public function create()
    {
    	return view('frontend.jobpostings.create');
    }

    public function postCreate(Request $request)
    {
        $user = Auth::user();
        $input = $request->except('_token');

        $rules = [
            'jobtitle' => 'required|max:50',
            'compname' => 'required|max:50',
            'compadrs' => 'required|max:200',
            'logofile' => 'required|mimes:jpeg,bmp,png',
            'jobdesc'  => 'required',
        ];

        $messages = [
            'required' => 'This field is required.',
            'alphanum' => 'Please input letters and numbers only.',
            'max'      => 'Input must be no more than :max characters',
            'mimes'    => 'Company Logo must be jpeg,bmp,png file only',
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $file = $input['logofile'];
        $origfname = $file->getClientOriginalName();
        $fname = uniqid() . md5($origfname . str_random(6)) . '.' . $file->getClientOriginalExtension();
        $file->move(storage_path() . DIRECTORY_SEPARATOR . 'jobpostings', $fname);

        Jobposting::create(array(
            'postid' => date('Ymdhis'),
            'userid' => $user->userid,
            'jobtitle' => $input['jobtitle'],
            'compname' => $input['compname'],
            'compadrs' => $input['compadrs'],
            'logofile' => $fname,
            'logofilename' => $origfname,
            'jobdesc' => $input['jobdesc']
        ));

        return redirect()->back()->with('system_msg','The job has been posted.');
    }

    public function edit($jobid)
    {
        $jobpost = Jobposting::where('postid',$jobid)->first();
        return view('frontend.jobpostings.edit')->with(compact('jobpost'));
    }

    public function postEdit(Request $request)
    {
        $user = Auth::user();
        $input = $request->except('_token');
        $logofile = false;

        $rules = [
            'jobtitle' => 'required|max:50',
            'compname' => 'required|max:50',
            'compadrs' => 'required|max:200',
            'logofile' => 'mimes:jpeg,bmp,png',
            'jobdesc'  => 'required',
        ];

        $messages = [
            'required' => 'This field is required.',
            'max'      => 'Input must be no more than :max characters',
            'mimes'    => 'Company Logo must be jpeg,bmp,png file only',
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        if(isset($input['logofile']))
        {
            $file = $input['logofile'];
            $origfname = $file->getClientOriginalName();
            $fname = uniqid() . md5($origfname . str_random(6)) . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path() . DIRECTORY_SEPARATOR . 'jobpostings', $fname);
            $logofile = true;
        }

        $jobpost = Jobposting::where('postid',$input['postid'])->first();

        if(Auth::user()->userid != $jobpost->userid)
        {
            return redirect()->back()->with('system_message','You do not have right access to update this job post');
        }

        $jobpost->jobtitle = $input['jobtitle'];
        $jobpost->compname = $input['compname'];
        $jobpost->compadrs = $input['compadrs'];
        $jobpost->jobdesc = $input['jobdesc'];

        if($logofile == true)
        {
            $jobpost->logofilename = $origfname;
            $jobpost->logofile = $fname;
        }

        $jobpost->save();
        return redirect()->back()->with('system_message','Job is now updated.');

    }

}
