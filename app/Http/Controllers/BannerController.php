<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    public function index()
    {
        return view('banner.index',[
            'banner_datas'=>Banner::where('status','hide')->get(),
        ]);
    }
    public function create()
    {
        return view('banner.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'discount'=> 'required',
            'title'=> 'required',
            'image'=> 'required|image',
        ]);
        $img = Image::make($request->file('image'))->resize(515,600);
        $new_image_path = 'Banner-'.Auth::id(). Str::random(5) .'.'. $request->file('image')->getClientOriginalExtension();
        $img->save(base_path('public/uploads/banner_pic/'. $new_image_path));
        Banner::insert([
            'discount'=> $request->discount,
            'title'=> $request->title,
            'image'=> $new_image_path,
            'created_at'=> Carbon::now(),
        ]);
        return back()->with([
            'image_success'=> "Banner added Successfully",
        ]);
    }
    public function show($id)
    {
        return view('banner.show',[
            'show_data'=>Banner::withTrashed()->find($id),
        ]);
    }
    public function edit($id)
    {
        return view('banner.edit',[
            'the_data'=> Banner::withTrashed()->find($id),
        ]);
    }
    public function update(Request $request, $id)
    {
        // old image unlinking
        if ($request->hasFile('cat_image')) {
            $request->validate([
                'cat_image'=> 'image',
            ]);
            unlink(base_path('public/uploads/banner_pic/'.Banner::withTrashed()->find($id)->cat_image));
            // new image uploading
            $img = Image::make($request->file('cat_image'))->resize(600,328);
            $new_image_path = $request->id.$request->cat_name . Str::random(5) .'.'. $request->file('cat_image')->getClientOriginalExtension();
            $img->save(base_path('public/uploads/banner_pic/'. $new_image_path));
            Banner::withTrashed()->find($id)->update([
                'cat_image'=> $new_image_path,
            ]);
        }
        Banner::withTrashed()->find($id)->update([
            'cat_name'=> $request->cat_name,
            'cat_status'=> $request->cat_status,
            'cat_description'=> $request->cat_description,
        ]);
        return back()->with([
            'image_success'=> "Banner Edited Successfully",
        ]);
    }
    public function destroy($id)
    {
        $smart_move = Banner::find($id);
        $smart_move->delete();
        return back();
    }
    // custom method
    public function show_hide_edit_method($id)
    {
        if (Banner::withTrashed()->find($id)->cat_status == 'show') {
            Banner::withTrashed()->find($id)->update([
                'cat_status'=> 'hide'
            ]);
        } else {
            Banner::withTrashed()->find($id)->update([
                'cat_status'=> 'show'
            ]);
        }
        return back();
    }
    // custom force delete method
    public function trash_method()
    {
        return view('banner.trash',[
            'trash_data'=> Banner::onlyTrashed()->get(),
        ]);
    }
    // custom force delete method
    public function force_delete_method($id)
    {
        $the_trash = Banner::onlyTrashed()->find($id);
        unlink(base_path('public/uploads/banner_pic/'.$the_trash->cat_image));
        $the_trash->forceDelete();
        return back();
    }
    // custom restore method
    public function restore_method($id)
    {
        $smart_move = Banner::onlyTrashed()->find($id);
        $smart_move->restore();
        return back();
    }
}
