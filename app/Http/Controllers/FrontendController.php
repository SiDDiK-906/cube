<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function front_page_method(){
        if (Category::where('cat_status','show')->count() == 0) {
            return view('frontend.index',[
                'categories'=> Category::latest()->limit(3)->get(),
                'all_product_data'=> Product::all(),
                'banner_datas'=>Banner::where('status','hide')->get(),
            ]);
        } else {
            return view('frontend.index',[
                'categories'=> Category::where('cat_status','show')->get(),
                'all_product_data'=> Product::all(),
                'banner_datas'=>Banner::where('status','hide')->get(),
            ]);
        }
    }
    public function single_product_method($slug){
        $cat_id = Product::where('slug',$slug)->firstOrfail()->category_id;
        $product_id = Product::where('slug',$slug)->first()->id;
        $user_id = Auth()->id();
        $wishlist_status = Wishlist::where('user_id',$user_id)->where('product_id',$product_id)->exists();
        if ($wishlist_status) {
            $wishlist_id= Wishlist::where('user_id',$user_id)->where('product_id',$product_id)->first()->id;
        } else {
            $wishlist_id= "";
        }

        return view('frontend.single_product',[
            'single_products'=> Product::where('slug',$slug)->firstOrfail(),
            'related_products'=> Product::where('slug','!=',$slug)->where('category_id',$cat_id)->get(),
            'wishlist_status'=> $wishlist_status,
            'wishlist_id'=> $wishlist_id,
            'rating_infos'=> Rating::where('product_id',$product_id)->get(),
        ]);
    }
    public function category_detail_method($cat_id){
        return view('frontend.category_detail',[
            'count_all_product' => Product::count(),
            'all_category_data' => Product::where('category_id',$cat_id)->get(),
            'category_name' => Category::find($cat_id)->cat_name,
        ]);
    }
}
