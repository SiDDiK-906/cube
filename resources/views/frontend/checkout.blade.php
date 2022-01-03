@extends('layouts.app_frontend')
@section('content')
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Shop</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>

        <!-- breadcrumb-area end -->


        <!-- checkout area start -->
        <div class="checkout-area pt-100px pb-100px">
            <div class="container">
                <form action="{{ route('checkout_form') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="billing-info-wrap">
                                <h3>Billing Details</h3>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <ul>
                                                <li>
                                                    <span>{{ $error }}</span>
                                                </li>
                                            </ul>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>Name</label>
                                            <input name="name" type="text" value="{{ Auth()->user()->name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>Email Address</label>
                                            <input name="email" type="text"  value="{{ Auth()->user()->email }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-select mb-4">
                                            <label>Country</label>
                                            <select name="country" id="country_dropdown">
                                                <option value="">Select a Country</option>
                                                @foreach ($all_country_info as $all_country)
                                                    <option value="{{ $all_country->id }}">{{ $all_country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-select mb-4">
                                            <label>City</label>
                                            <select name="city" id="city_dropdown" disabled>
                                                <option value="">-Please Select a Country first-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-4">
                                            <label>Address</label>
                                            <input name="address" class="billing-address" placeholder="House number and street name" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>Phone</label>
                                            <input type="text" name="phone" class="@error('phone') border_error @enderror">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>Postcode / ZIP</label>
                                            <input type="text" name="post_code">
                                        </div>
                                    </div>
                                </div>

                                <div class="additional-info-wrap">
                                    <h4>Additional information</h4>
                                    <div class="additional-info">
                                        <label>Order notes</label>
                                        <textarea placeholder="Notes about your order, e.g. special notes for delivery. "
                                            name="notes"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                            <div class="your-order-area">
                                <h3>Your order</h3>
                                <div class="your-order-wrap gray-bg-4">
                                    <div class="your-order-product-info">
                                        <div class="your-order-top">
                                            <ul>
                                                <li>Product</li>
                                                <li>Total</li>
                                            </ul>
                                        </div>
                                        <div class="your-order-middle">
                                            <ul>
                                                @foreach (all_Carts() as $all_cart)
                                                    <li>
                                                        <span class="order-middle-left">{{ $all_cart->relationToProduct->name }} X {{ $all_cart->amount }}</span>
                                                        <span class="order-price">${{ $all_cart->relationToProduct->price*$all_cart->amount }} </span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="your-order-bottom">
                                            <ul>
                                                <li class="your-order-shipping">Total Cart Amount</li>
                                                <li><span>$</span><span>{{ $total_cart_amount = Session::get('total_cart_amount') }}</span></li>
                                            </ul>
                                            <ul>
                                                <li class="your-order-shipping">Total Discount ({{ Session::get('coupon_name') }})</li>
                                                <li><span>$</span><span>{{ $total_discount = Session::get('total_discount') }}</span></li>
                                            </ul>
                                            <ul>
                                                <li class="your-order-shipping">Sub Total (Approx.)</li>
                                                <li><span>$</span><span>{{ $sub_total = round($total_cart_amount - $total_discount) }}</span></li>
                                            </ul>
                                            <ul>
                                                <li class="your-order-shipping">Shipping</li>
                                                <li><span>$</span><span>{{ $total_shipping = Session::get('total_shipping') }}</span></li>
                                            </ul>
                                        </div>
                                        <div class="your-order-total">
                                            <ul>
                                                <li class="order-total">Grand Total</li>
                                                <li>$ <span>{{ $sub_total + $total_shipping }}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <label><b>Select Payment Method</b></label>
                                    <div>
                                        @if (session('select_payment'))
                                            <div class="alert alert-danger">
                                                {{ session('select_payment') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <input type="radio" name="payment" value="1" style="cursor:pointer; height: 15px; width:15px"> Cash On Delivary
                                        <input type="radio" name="payment" value="2" style="cursor:pointer; height: 15px; width:15px"> Online Payment
                                    </div>
                                </div>
                                <div class="Place-order mt-25">
                                    <input type="submit" value="Place Order" class="btn btn-danger btn-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- checkout area end -->
@endsection
@section('country_section')
    <script>
        $(document).ready(function() {
            $('#country_dropdown').select2();
            $('#city_dropdown').select2();

            $('#country_dropdown').change(function(){
                $('#city_dropdown').attr('disabled',false);
                var country_id = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:'POST',
                    url:'checkout/country/city/link',
                    data:{country_id:country_id},
                    success:function(data){
                        $('#city_dropdown').html(data);
                    }
                });
            });
        });
    </script>
@endsection
