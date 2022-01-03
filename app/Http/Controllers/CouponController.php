<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\CouponValidation;

class CouponController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('coupon.create');
    }

    public function store(CouponValidation $request)
    {
        Coupon::insert($request->except('_token')+['created_at'=> Carbon::now()]);
        return back();
    }

    public function show(Coupon $coupon)
    {
        //
    }

    public function edit(Coupon $coupon)
    {
        //
    }

    public function update(Request $request, Coupon $coupon)
    {
        //
    }

    public function destroy(Coupon $coupon)
    {
        //
    }
}
