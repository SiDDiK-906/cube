<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 'name'=> 'required | min:5 | max:10 | regex:/^[_0-9-]+(\.[A-Z]).+$/ | unique:coupons,name',
            'name'=> 'required | min:5 | max:10 | unique:coupons,name',
            'discount'=> 'required | integer | max:99 | min:1',
            'validity'=> 'required | date | after_or_equal:today',
            'limit'=> 'required | integer | min:1',
        ];
    }
    public function messages()
    {
        return [
            'validity.after_or_equal' => 'Validity of coupon must be greater than or equal todays date',
        ];
    }
}
