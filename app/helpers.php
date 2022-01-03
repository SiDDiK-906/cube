<?php

use Illuminate\Support\Facades\Auth;

    // Wishlist
    function all_wishlist(){
        return App\Models\Wishlist::where('user_id',Auth()->id())->get();
    }
    function wishlist_exist($product_id){
        return App\Models\Wishlist::where('user_id',auth()->id())->where('product_id',$product_id);
    }
    function wishlist_id($product_id){
        return App\Models\Wishlist::where('user_id',auth()->id())->where('product_id',$product_id)->first()->id;
    }
    function count_allCart(){
        return App\Models\Cart::where('user_id',Auth()->id())->count();
    }
    function count_wishlist(){
        return App\Models\Wishlist::where('user_id',Auth()->id())->count();
    }

    // Cart
    function all_Carts(){
        return App\Models\Cart::where('user_id',Auth()->id())->get();
    }
    function all_Carts_ProductInfo($product_id){
        return App\Models\Product::find($product_id);
    }
    function remove_stockOut_product(){
        return App\Models\Product::where('user_id',Auth()->id())->get();
    }

    // Vendor
    function get_vendor_info($vendor_id){
        return App\Models\User::find($vendor_id);
    }
    // Orders count by user
    function orders_info(){
        return App\Models\order_summaries::where('user_id',Auth()->id())->get()->count();
    }
    // for review
    function howManyReview($product_id){
        return App\Models\Rating::where('product_id',$product_id)->get()->count();
    }
    function averateRating($product_id){
        // return App\Models\Rating::where('product_id',$product_id)->get();
        // we can add one signle column value
        // return App\Models\Rating::where('product_id',$product_id)->sum('rating');
        return App\Models\Rating::where('product_id',$product_id)->avg('rating') * 20;
    }
?>
