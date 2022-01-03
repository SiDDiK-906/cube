<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function addCartFromWishlist_method($wishlist_id){
        $user_id = Auth()->id();
        $product_id = Wishlist::find($wishlist_id)->product_id;
        $vendor_id = Product::find($product_id)->user_id;
        $total_qty = Product::find($product_id)->quantity;

        if ($total_qty < 1) {
            return back()->with('no_product','This Product has stocked out');
        }
        else {
            if (Cart::where('user_id',$user_id)->where('product_id',$product_id)->exists()) {
                if ($total_qty < Cart::where('user_id',$user_id)->where('product_id',$product_id)->first()->amount + 1) {
                    return back()->with([
                        'stock_out'=> 'Already in the Cart',
                        'wishlist_id'=>$wishlist_id,
                    ]);
                }
                else {
                    Cart::where('user_id',$user_id)->where('product_id',$product_id)->increment('amount',1);
                }
            } else {
                Cart::insert([
                'user_id'=> $user_id,
                'vendor_id'=> $vendor_id,
                'product_id'=> $product_id,
                'created_at'=> Carbon::now(),
                ]);
            }
            Wishlist::find($wishlist_id)->delete();
            return back();
        }
    }
    function cartlist_method(){
        if (isset($_GET['coupon_name'])) {
            if ($_GET['coupon_name']) {
                if ( Coupon::where('name',$_GET['coupon_name'])->exists() ) {
                    if (Coupon::where('name',$_GET['coupon_name'])->first()->validity >= Carbon::now()->format('Y-m-d')) {
                        if (Coupon::where('name',$_GET['coupon_name'])->first()->limit > 0 ) {
                            $coupon_name = $_GET['coupon_name'];
                            $discount = Coupon::where('name',$_GET['coupon_name'])->first()->discount;
                        } else {
                            return redirect('cartlist')->with('limit_error','Coupon uses limit is over');
                        }
                    }
                    else {
                        return back()->with('date_error','Coupon uses date is over');
                    }
                }
                else{
                    return back()->with('match_error',"Coupon doesn't match in records");
                }
            } else {
                $coupon_name = "";
                $discount = 0;
            }
        } else {
            $coupon_name = "";
            $discount = 0;
        }

        return view('frontend.cartlist',[
            'discount' => $discount,
            'coupon_name' => $coupon_name,
        ]);
    }
    function cartlist_remove_method($cartlist_id){
        Cart::find($cartlist_id)->delete();
        return back();
    }
    function clear_cart_method($user_id){
        Cart::where('user_id',$user_id)->delete();
        return back();
    }
    function addTocart_method(Request $request, $product_id){
        $user_id = Auth()->id();
        $vendor_id = Product::find($product_id)->user_id;
        $total_qty = Product::find($product_id)->quantity;

        if ($total_qty < $request->qtybutton) {
            return back()->with('stock_out','This Product have only '.$total_qty.' items in stock');
        }
        else {
            if (Cart::where('user_id',$user_id)->where('product_id',$product_id)->exists()) {
                if ($total_qty < Cart::where('user_id',$user_id)->where('product_id',$product_id)->first()->amount + $request->qtybutton) {
                    return back()->with('stock_out','This Product is already in the cart');
                }
                else {
                    Cart::where('user_id',$user_id)->where('product_id',$product_id)->increment('amount',$request->qtybutton);
                }
            }
            else {
                Cart::insert([
                'user_id'=> $user_id,
                'vendor_id'=> $vendor_id,
                'product_id'=> $product_id,
                'amount'=> $request->qtybutton,
                'created_at'=> Carbon::now(),
                ]);
            }
            return back();
        }
    }
    function product_addCart_method($product_id){
        $user_id = Auth()->id();
        $vendor_id = Product::find($product_id)->user_id;
        $total_qty = Product::find($product_id)->quantity;

        if (Cart::where('user_id',$user_id)->where('product_id',$product_id)->exists()) {
            if ($total_qty < Cart::where('user_id',$user_id)->where('product_id',$product_id)->first()->amount + 1) {
                return back()->with([
                    'stock_out'=> 'Already in the Cart',
                    'product_id'=>$product_id,
                ]);
            }
            else {
                Cart::where('user_id',$user_id)->where('product_id',$product_id)->increment('amount',1);
            }
        } else {
            Cart::insert([
            'user_id'=> $user_id,
            'vendor_id'=> $vendor_id,
            'product_id'=> $product_id,
            'created_at'=> Carbon::now(),
            ]);
        }
        return back();
    }
    function update_cart_method(Request $request){
        foreach ($request->qtybutton as $cart_id => $amount) {
            if ( Product::find(Cart::find($cart_id)->product_id)->quantity < $amount) {
                return back()->with([
                    'stock_out'=> 'This Product have only '.Product::find(Cart::find($cart_id)->product_id)->quantity.' items in stock',
                    'cart_id'=>$cart_id,
                ]);
            } else {
                Cart::find($cart_id)->update([
                    'amount' => $amount,
                ]);
            }
        }
        return back();
    }
}
