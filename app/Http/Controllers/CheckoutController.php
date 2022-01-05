<?php

namespace App\Http\Controllers;

use App\Models\billing_details;
use App\Models\Cart;
use App\Models\City;
use App\Models\Country;
use App\Models\Coupon;
use App\Models\order_details;
use App\Models\order_summaries;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    function checkout_method(Request $request){

        if (strpos(url()->previous(),'/cartlist') or strpos(url()->previous(),'/checkout')) {
            return view('frontend.checkout',[
                'all_country_info'=>Country::where('status','active')->get(['id','name']),
            ]);
        }
        else {
            return view('errors.404'); // or use // abort(404);
        }
    }
    function checkout_form_method(Request $request){
        $request->validate([
            '*' => 'required',
            'notes'=>'nullable',
        ]);
        if (isset($request->payment)){
            $order_summary_id = order_summaries::insertGetId([
                'coupon_name' => session('coupon_name'),
                'cart_total' => session('total_cart_amount'),
                'discount_total' => session('total_discount'),
                'sub_total' => round(session('total_cart_amount') - session('total_discount')),
                'shipping' => 30,
                'grand_total' => round(session('total_cart_amount') - session('total_discount'))+30,
                'payment_option' => $request->payment,
                'user_id' => Auth()->id(),
                'created_at' => Carbon::now(),
            ]);
            billing_details::insert([
                'order_summary_id' => $order_summary_id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'country_id' => $request->country,
                'city_id' => $request->city,
                'address' => $request->address,
                'postcode' => $request->post_code,
                'notes' => $request->notes,
                'created_at' => Carbon::now(),
            ]);
            foreach (all_Carts() as $cart) {
                order_details::insert([
                    'user_id' => Auth()->id(),
                    'order_summary_id'=> $order_summary_id,
                    'vendor_id'=> $cart->vendor_id,
                    'product_id'=> $cart->product_id,
                    'amount'=> $cart->amount,
                    'created_at'=> Carbon::now(),
                ]);
                // decrement from product
                Product::find($cart->product_id)->decrement('quantity',$cart->amount);
                // delete from cartlist
                Cart::find($cart->id)->delete();
            }
            // decrement from coupon
            if (session('coupon_name')) {
                Coupon::where('name',session('coupon_name'))->decrement('limit',1);
            }
            if ($request->payment == 1) {
                return redirect('cartlist')->with('purchase_success','Product Purchased Successfully');
            } else {
                Session::put('s_order_summary_id', $order_summary_id);
                return redirect('pay');
            }
        }
        else {
            return back()->with('select_payment','Please select the payment method');
        }
    }
    function country_city_method(Request $request){
        $show_city = "<option value=''>-Select a City-</option>";
        foreach (City::where('country_id',$request->country_id)->get(['id','name']) as $city_data) {
            $show_city .= "<option value='$city_data->id'>$city_data->name</option>";
        }
       echo $show_city;
    }
}
