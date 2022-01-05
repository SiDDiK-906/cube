<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
// use Auth;
use Illuminate\Support\Facades\Hash;
// use Hash;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    function profile_method(){
        return view('profile');
    }
    function change_name_method (Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        User::find(Auth::id())->update([
            'name'=>$request->name,
        ]);
        return back()->with('success','Name changed successfully');
    }
    function change_password_method (Request $request){
            $request->validate([
                'old_password'=>'required',
            ]);
        // Hash::check(normal_password,hashed_password);
        if (Hash::check($request->old_password, Auth::user()->password)) {
            $request->validate([
                'password'=>'required | min:8',
                'confirm_password'=>'required',
            ]);
            if ($request->password == $request->confirm_password){
                User::find(Auth::id())->update([
                    'password' => bcrypt($request->password),
                ]);
                return back()->with('change_success',"Password Changed Successfully");
            }
            else {
                return back()->with('pass_match',"New password & Confirm Password doesn't matched");
            }
        }
        else {
            // return back()->withErrors("Old password doesn't matched");
            return back()->with('old_pass',"Old password doesn't matched");
        }

    }
    function change_profile_pic_method(Request $request){
        $request->validate([
            'profile_photo'=>'required|image|file|max:1024',
        ]);
        if (Auth::user()->profile_photo != 'default.jpg') {
            unlink(base_path('public/uploads/profile_pic/'.Auth::user()->profile_photo));
        }
        $img = Image::make($request->file('profile_photo'))->resize(200,200);
        $new_image_path = Auth::user()->name . Auth::id() .'.'. $request->file('profile_photo')->getClientOriginalExtension();
        // $new_image_path = Str::random(5).time().Auth::user()->name . Auth::id() .'.'. $request->file('profile_photo')->getClientOriginalExtension();
        $img->save(base_path('public/uploads/profile_pic/'. $new_image_path));
        User::find(Auth::id())->update([
            'profile_photo'=> $new_image_path,
        ]);
        return back()->with([
            'photo_success'=> "Photo Changed Successfully",
            // 'p_success'=>"Photo Successfully",
        ]);
    }
}
