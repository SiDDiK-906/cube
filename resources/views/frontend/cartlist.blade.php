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
                        <li class="breadcrumb-item active">CartList</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- Cart Area Start -->
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            @if (session('purchase_success'))
                <div class="alert alert-success text-center">
                    <h5>{{ session('purchase_success') }}</h5>
                </div>
            @endif
            <h3 class="cart-page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Unit Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total_cart_amount = 0;
                                        $remove_stockOut_product = 0;
                                    @endphp
                                <form action="{{ route('update_cart') }}" method="POST">
                                    @csrf
                                    @forelse (all_Carts() as $all_cart)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="{{ route('single_product',all_Carts_ProductInfo($all_cart->product_id)->slug) }}"><img class="img-responsive ml-15px"
                                                        src="{{ asset('uploads/product_pic') }}/{{ $all_cart->relationToProduct->image }}" alt="" /></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="{{ route('single_product',all_Carts_ProductInfo($all_cart->product_id)->slug) }}">{{ $all_cart->relationToProduct->name }}</a>
                                                <br>
                                                Vendor:{{ get_vendor_info($all_cart->vendor_id)->name }}
                                            </td>
                                            <td class="product-price-cart">
                                                <span class="amount">${{ $all_cart->relationToProduct->price }}</span>
                                                <br>
                                                <span>Available Stock: <b style="font-size: 20px; color: #ee3231;">{{ $all_cart->relationToProduct->quantity }}</b></span>
                                                @php
                                                    if ($all_cart->relationToProduct->quantity < 1) {
                                                        $remove_stockOut_product += 1;
                                                    }
                                                @endphp
                                            </td>
                                            @if ($all_cart->relationToProduct->quantity < 1)
                                                <td colspan="50" style="position: relative">
                                                    <div class="alert alert-danger text-center" style="width: 100%; margin-bottom:0px !important">
                                                        This Product has stocked out
                                                    </div>
                                                    <div style="position: absolute; top:4%; right:2%">
                                                        <a href="{{ route('cartlist_remove',$all_cart->id) }}"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            @else
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton[{{ $all_cart->id }}]" value="{{ $all_cart->amount }}" />
                                                    </div>
                                                    @if (session('cart_id') == $all_cart->id)
                                                        @if (session('stock_out'))
                                                            <div class="alert alert-danger">
                                                                {{ session('stock_out') }}
                                                            </div>
                                                        @endif
                                                    @endif
                                                </td>
                                                <td class="product-subtotal">
                                                    ${{ $all_cart->amount * $all_cart->relationToProduct->price }}
                                                    @php
                                                        // += manei aager value er sathe current value add kora
                                                        $total_cart_amount += $all_cart->amount * $all_cart->relationToProduct->price;
                                                    @endphp
                                                </td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ route('cartlist_remove',$all_cart->id) }}"><i class="fa fa-times"></i></a>
                                                </td>
                                            @endif
                                        </tr>
                                    @empty
                                        No Product in the Cart List!
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="{{ route('front_page') }}">Continue Shopping</a>
                                    </div>
                                    <div class="cart-clear">
                                        <button type="submit">Update Shopping Cart</button>
                                    </form>
                                        <a href="{{ route('clear_cart',Auth()->id()) }}">Clear Shopping Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-lm-30px">
                            <div class="cart-tax">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                </div>
                                <div class="tax-wrapper">
                                    <p>Enter your destination to get a shipping estimate.</p>
                                    <div class="tax-select-wrapper">
                                        <div class="tax-select">
                                            <label>
                                                * Country
                                            </label>
                                            <select class="email s-email s-wid">
                                                <option>Bangladesh</option>
                                                <option>Albania</option>
                                                <option>Åland Islands</option>
                                                <option>Afghanistan</option>
                                                <option>Belgium</option>
                                            </select>
                                        </div>
                                        <div class="tax-select">
                                            <label>
                                                * Region / State
                                            </label>
                                            <select class="email s-email s-wid">
                                                <option>Bangladesh</option>
                                                <option>Albania</option>
                                                <option>Åland Islands</option>
                                                <option>Afghanistan</option>
                                                <option>Belgium</option>
                                            </select>
                                        </div>
                                        <div class="tax-select mb-25px">
                                            <label>
                                                * Zip/Postal Code
                                            </label>
                                            <input type="text" />
                                        </div>
                                        <button class="cart-btn-2" type="submit">Get A Quote</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-lm-30px">
                            <div class="discount-code-wrapper">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                </div>
                                <div class="discount-code">
                                    <p>Enter your coupon code if you have one.</p>
                                    <form>
                                        <input type="text" name="coupon_name" value="{{ $coupon_name ? $coupon_name : '' }}" />
                                        @if (session('limit_error'))
                                            <div class="alert alert-danger" style="width: 100%">
                                                {{ session('limit_error') }}
                                            </div>
                                        @endif
                                        @if (session('date_error'))
                                            <div class="alert alert-danger" style="width: 100%">
                                                {{ session('date_error') }}
                                            </div>
                                        @endif
                                        @if (session('match_error'))
                                            <div class="alert alert-danger" style="width: 100%">
                                                {{ session('match_error') }}
                                            </div>
                                        @endif
                                        <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mt-md-30px">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>
                                @php
                                if ($coupon_name) {
                                    Session::put('coupon_name',$coupon_name);
                                } else {
                                    Session::put('coupon_name','');
                                }
                                    Session::put('total_cart_amount',$total_cart_amount);
                                    Session::put('total_discount',($total_cart_amount*$discount)/100);
                                @endphp
                                <h5>Total Cart Amount<span>${{ $total_cart_amount }}</span></h5>
                                <h5>Total Discount ({{ $coupon_name ? $coupon_name : 'N\A' }}) <span>${{ ($total_cart_amount*$discount)/100 }}</span></h5>
                                <h5>Sub Total <small>(Approx.)</small><span id="sub_total">{{ round($total_cart_amount - ($total_cart_amount*$discount)/100) }}</span><span>$</span></h5>
                                <div class="total-shipping">
                                    <h5>Total shipping</h5>
                                    <ul>
                                        <li><input id="shipping_btn1" type="radio" name="shipping"/> Standard <span class="shipping_btn_value1">20.00</span><span>$</span></li>
                                        <li><input id="shipping_btn2" type="radio" name="shipping"/> Express <span class="shipping_btn_value2">30.00</span><span>$</span></li>
                                        <li><input id="shipping_btn3" type="radio" name="shipping"/> Free <span class="shipping_btn_value3">0.00</span><span>$</span></li>
                                    </ul>
                                </div>
                                <h4 class="grand-totall-title">Grand Total <span id="grand_total">{{ round($total_cart_amount - ($total_cart_amount*$discount)/100) }}</span><span>$</span></h4>
                                @if ($remove_stockOut_product > 0)
                                    <div class="alert alert-danger text-center" style="width: 100%">
                                        Please Remove Stock Out Product to proceed!
                                    </div>
                                    <a style="cursor: pointer; color:whitesmoke">Proceed to Checkout</a>
                                @else
                                    @if (all_Carts()->count() < 1)
                                        <a style="cursor: pointer; color:whitesmoke">No Product to Checkout</a>
                                    @else
                                        <a href="{{ route('checkout') }}" id="checkout_button" class="d-none">Proceed to Checkout</a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->
@endsection
@section('plus_minus_button')
<script>
    let button = document.getElementById('theButton')
        button.addEventListener('click', function() {
        steponup()
        })
    function steponup() {
        let input = document.getElementById('theNumber')
        let val = document.getElementById('incrementer').value

        if (val) {
            input.stepUp(val)
        } else {
            input.stepUp()
        }
        }
</script>
@endsection
@section('shipping_button')
{{-- @php
    Session::put('total_shipping',0);
@endphp --}}
<script>
    $('#shipping_btn1').click(function(){
        $('#checkout_button').removeClass('d-none');
        $('#grand_total').html(parseInt($('#sub_total').html())+parseInt($('.shipping_btn_value1').html()));
    })
    $('#shipping_btn2').click(function(){
        $('#checkout_button').removeClass('d-none');
        $('#grand_total').html(parseInt($('#sub_total').html())+parseInt($('.shipping_btn_value2').html()));
    })
    $('#shipping_btn3').click(function(){
        $('#checkout_button').removeClass('d-none');
        $('#grand_total').html(parseInt($('#sub_total').html())+parseInt($('.shipping_btn_value3').html()));
    })

</script>
@endsection
