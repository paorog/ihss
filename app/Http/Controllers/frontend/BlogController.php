<?php

namespace App\Http\Controllers\frontend;

use Auth;
use Session;
use App\User;
use App\Blog;
use App\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function show()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing blogs page');
        }

        $blogs = Blog::where('delete_flag',0)->orderby('created_at','desc')->paginate(6);


        return view('frontend.blogs.show')->with(compact('blogs'));
    }

    public function showSingle($blogid)
    {
        $blogpage = Blog::where('blogid',$blogid)->first();
        $latestblogs = Blog::where('delete_flag',0)->orderby('created_at','desc')->limit(5)->get();
        $topblogs = Blog::where('delete_flag',0)->orderby('views','desc')->limit(5)->get();

        return view('frontend.blogs.single')->with(compact('blogpage','latestblogs','topblogs'));
    }

    public function create()
    {
        if(!Auth::user())
        {
            return redirect()->route('user.login')->with('system_msg','Please login first before viewing blogs page');
        }

        $categories = BlogCategory::all();

        return view('frontend.blogs.create')->with(compact('categories'));
    }

    public function postCreate(Request $request)
    {
        $user = Auth::user();
        $input = $request->except('_token');

        $banner = $input['blogBanner'];
        $bannerfile = $banner->getClientOriginalName();
        $bannerfname = uniqid() . md5($bannerfile . str_random(6)) . '.' . $banner->getClientOriginalExtension();
        $banner->move(storage_path() . DIRECTORY_SEPARATOR . 'blogbanners', $bannerfname);

        $thumb = $input['blogThumbnail'];
        $thumbfile = $thumb->getClientOriginalName();
        $thumbfname = uniqid() . md5($thumbfile . str_random(6)) . '.' . $thumb->getClientOriginalExtension();
        $thumb->move(storage_path() . DIRECTORY_SEPARATOR . 'blogbanners', $thumbfname);

        Blog::create(array(
            'blogid' => 'BP'.date('ymdhis'),
            'categoryid' => $input['blogCategory'],
            'userid' => $user->userid,
            'thumbfile' => $thumbfile,
            'thumbfname' => $thumbfname,
            'bannerfile' => $bannerfile,
            'bannerfname' => $bannerfname,
            'title' => $input['blogTitle'],
            'content' => $input['blogContent'],
            'views' => 0,
            'privacy' => $input['blogPrivacy'],
        ));

        return redirect()->back()->with('system_msg','The blog has been posted.');
    }

}
