<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
// use Image;
use Intervention\Image\Facades\Image;
class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /*  Display a listing of the resource. */
    public function index()
    {
        return view('category.view',[
            'view_cats'=>Category::all(),
        ]);
    }

    /* Show the form for creating a new resource. */
    public function create()
    {
        return view('category.add');
    }

    /* Store a newly created resource in storage. */
    public function store(Request $request)
    {
        $request->validate([
            'cat_name'=> 'required',
            'cat_description'=> 'required',
            'cat_image'=> 'required|image',
        ]);
        $img = Image::make($request->file('cat_image'))->resize(600,328);
        $new_image_path = Auth::id().Auth::user()->name . Str::random(5) .'.'. $request->file('cat_image')->getClientOriginalExtension();
        $img->save(base_path('public/uploads/category_pic/'. $new_image_path));
        Category::insert([
            'cat_name'=> $request->cat_name,
            'cat_description'=> $request->cat_description,
            'cat_image'=> $new_image_path,
            'created_at'=> Carbon::now(),
        ]);
        return back()->with([
            'image_success'=> "Succeed",
        ]);
    }

    /* Display the specified resource. */
    public function show($id)
    {
        return view('category.show',[
            'show_data'=>Category::withTrashed()->find($id),
        ]);
    }

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        return view('category.edit',[
            'the_data'=> Category::withTrashed()->find($id),
        ]);
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, $id)
    {
        // old image unlinking
        if ($request->hasFile('cat_image')) {
            $request->validate([
                'cat_image'=> 'image',
            ]);
            unlink(base_path('public/uploads/category_pic/'.Category::withTrashed()->find($id)->cat_image));
            // new image uploading
            $img = Image::make($request->file('cat_image'))->resize(600,328);
            $new_image_path = $request->id.$request->cat_name . Str::random(5) .'.'. $request->file('cat_image')->getClientOriginalExtension();
            $img->save(base_path('public/uploads/category_pic/'. $new_image_path));
            Category::withTrashed()->find($id)->update([
                'cat_image'=> $new_image_path,
            ]);
        }
        Category::withTrashed()->find($id)->update([
            'cat_name'=> $request->cat_name,
            'cat_status'=> $request->cat_status,
            'cat_description'=> $request->cat_description,
        ]);
        return back()->with([
            'image_success'=> "Category Edited Successfully",
        ]);
    }

    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        $smart_move = Category::find($id);
        $smart_move->delete();
        return back();
    }
    // custom method
    public function show_hide_edit_method($id)
    {
        if (Category::withTrashed()->find($id)->cat_status == 'show') {
            Category::withTrashed()->find($id)->update([
                'cat_status'=> 'hide'
            ]);
        } else {
            Category::withTrashed()->find($id)->update([
                'cat_status'=> 'show'
            ]);
        }
        return back();
    }
    // custom force delete method
    public function trash_method()
    {
        return view('category.trash',[
            'trash_data'=> Category::onlyTrashed()->get(),
        ]);
    }
    // custom force delete method
    public function force_delete_method($id)
    {
        $the_trash = Category::onlyTrashed()->find($id);
        unlink(base_path('public/uploads/category_pic/'.$the_trash->cat_image));
        $the_trash->forceDelete();
        return back();
    }
    // custom restore method
    public function restore_method($id)
    {
        $smart_move = Category::onlyTrashed()->find($id);
        $smart_move->restore();
        return back();
    }
}
