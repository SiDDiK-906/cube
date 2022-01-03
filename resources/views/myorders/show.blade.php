@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">orders </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">orders</li>
            <li class="breadcrumb-item active">View orders</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Order Summary of <b>{{ $order_summary->relationTobilling_details->name }}</b></div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Cart Total</td>
                            <td>{{ $order_summary->cart_total }}</td>
                        </tr>
                        <tr>
                            <td>Discount Total ({{ ($order_summary->coupon_name) ? $order_summary->coupon_name : 'N/A' }})</td>
                            <td>{{ $order_summary->discount_total }}</td>
                        </tr>
                        <tr>
                            <td>Shipping Total</td>
                            <td>{{ $order_summary->shipping }}</td>
                        </tr>
                        <tr>
                            <td>Grand Total</td>
                            <td>{{ $order_summary->grand_total }}</td>
                        </tr>
                        <tr>
                            <td>Payment Option</td>
                            <td>
                                @if ($order_summary->payment_option == 1)
                                    Cash On Delivary
                                @else
                                    Online Payment
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Payment Status</td>
                            <td>
                                @if ($order_summary->payment_status == 1)
                                    <p class="btn btn-sm btn-success">Paid</p>
                                @else
                                    <p class="btn btn-sm btn-danger">Not Paid</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Delivary Status</td>
                            <td>
                                @if ($order_summary->delivary_status == 1)
                                    <p class="btn btn-sm btn-info">Delivered</p>
                                @else
                                    <p class="btn btn-sm btn-danger">Not Delivered</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Order Created</td>
                            <td>{{ $order_summary->created_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card mt-4" >
                <div class="card-header bg-success">Order Details</b></div>
            </div>
            @foreach ($order_details as $order_detail)
                <div class="card" >
                    <div class="card-body pb-0">
                        <table class="table table-bordered">
                            <tr>
                                <td><b>Product No.</b></td>
                                <td><b>#{{ $loop->index+1 }}</b></td>
                            </tr>
                            <tr>
                                <td>Vendor Name</td>
                                <td>{{ $order_detail->relationToUser->name }}</td>
                            </tr>
                            <tr>
                                <td>Vendor Phone Number</td>
                                <td>Call to:<span><a href="callto:{{ $order_detail->relationToUser->phone }}">{{ $order_detail->relationToUser->phone }}</a></span></td>
                            </tr>
                            <tr>
                                <td>Product Name</td>
                                <td>{{ $order_detail->relationToProduct->name }}</td>
                            </tr>
                            <tr>
                                <td>Total Ordered</td>
                                <td>{{ $order_detail->amount }}</td>
                            </tr>
                            <tr>
                                <td>Product Image</td>
                                <td>
                                    <img width="150px" src="{{ asset('uploads/product_pic').'/'.$order_detail->relationToProduct->image }}" alt="not found">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card mb-5">
                    <div class="card-header bg-info text-center"><b>Your Review of this Product</b></div>
                    <div class="card-body">
                        <form action="{{ route('rating',$order_detail->id) }}" method="POST">
                            @csrf
                            <div class="message">
                                <textarea name="review" class="form-control mb-3" placeholder="Messages..."></textarea>
                            </div>
                            <div class="rate">
                                <input type="radio" id="star5_{{ $order_detail->id }}" name="rate" value="5" />
                                <label for="star5_{{ $order_detail->id }}" title="text">5 stars</label>
                                <input type="radio" id="star4_{{ $order_detail->id }}" name="rate" value="4" />
                                <label for="star4_{{ $order_detail->id }}" title="text">4 stars</label>
                                <input type="radio" id="star3_{{ $order_detail->id }}" name="rate" value="3" />
                                <label for="star3_{{ $order_detail->id }}" title="text">3 stars</label>
                                <input type="radio" id="star2_{{ $order_detail->id }}" name="rate" value="2" />
                                <label for="star2_{{ $order_detail->id }}" title="text">2 stars</label>
                                <input type="radio" id="star1_{{ $order_detail->id }}" name="rate" value="1" />
                                <label for="star1_{{ $order_detail->id }}" title="text">1 star</label>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary mt-1">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@section('footer_scripts')
<script>
    $('input:radio').change(
    function(){
        var userRating = this.value;
        console.log(userRating)
    });
</script>
@endsection
