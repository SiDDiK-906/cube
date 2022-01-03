<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Product_thumbnail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index()
    {
    //    return Product::find(Auth::id());
        return view('product.index',[
            'products'=>Product::where('user_id',Auth::id())->get(),
        ]);
    }

    public function create()
    {

        return view('product.create',[
            'category_data'=> Category::where('cat_status','show')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            '*'=>'required'
        ]);
        $img = Image::make($request->file('image'))->resize(270,310);
        $new_image_path = $request->name . Str::random(5).$request->category_id.'.'. $request->file('image')->getClientOriginalExtension();
        $img->save(base_path('public/uploads/product_pic/'. $new_image_path));
        $slug = Str::slug($request->name).'-'.Str::random(5).Auth::id();
        $product_id = Product::insertGetId([
            'user_id'=>Auth::id(),
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'slug'=>$slug,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'description'=>$request->description,
            'L_description'=>$request->L_description,
            'code'=>$request->code,
            'image'=>$new_image_path,
            'created_at'=>Carbon::now(),
        ]);
        foreach ($request->file('product_thumbnails') as $product_thumbnail) {
            $thumb = Image::make($product_thumbnail)->resize(800,800);
            $new_thumb_path = $product_id.'-'.'product_thumbnail' . Str::random(5).'.'. $product_thumbnail->getClientOriginalExtension();
            $thumb->save(base_path('public/uploads/product_thumbnail_pic/'. $new_thumb_path));
            Product_thumbnail::insert([
                'product_id'=>$product_id,
                'product_thumbnails'=>$new_thumb_path,
                'created_at'=>Carbon::now(),
            ]);
        }
        return back()->with([
            'success'=> "Product Added Successfully",
        ]);
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy($id)
    {

        // foreach ($thumb as $thumbnails) {
        //     unlink(base_path('public/uploads/product_thumbnail_pic/'.Product_thumbnail::where('product_id',$thumbnails)->product_thumbnails));
        //     Product_thumbnail::where('product_id',$thumbnails)->delete();
        // }
        // return back();
    }
}
