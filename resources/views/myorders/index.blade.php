@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Orders </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Orders</li>
            <li class="breadcrumb-item active">View Orders</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-center">
                        <h5>All Orders</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Order Summary Id</th>
                                <th class="text-center">Grand Total</th>
                                <th class="text-center">Payment option</th>
                                <th class="text-center">Payment Status</th>
                                <th class="text-center">Product Barcode</th>
                                <th class="text-center">Action</th>
                            </tr>
                            @foreach ($myorders as $myorder)
                                <tr >
                                    <td class="text-center">{{ $loop->index+1 }}</td>
                                    <td class="text-center">{{ $myorder->id }}</td>
                                    <td class="text-center">{{ $myorder->grand_total }}</td>
                                    <td class="text-center">
                                        @if ($myorder->payment_option == 1)
                                            Cash On Delivary
                                        @else
                                            Online Payment
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($myorder->payment_status == 1)
                                            <p class="btn btn-sm btn-success">Paid</p>
                                        @else
                                            <p class="btn btn-sm btn-danger">Not Paid</p>
                                        @endif
                                    </td>
                                    <td>{!! DNS2D::getBarcodeHTML('Hello', 'QRCODE',4,4) !!}</td>
                                    <td class="text-center">
                                        <div style="display: flex; justify-content:space-around;">
                                            <a href="{{ route('order_details',Crypt::encryptString($myorder->id)) }}" style="margin: 0px 5px;" class="btn btn-sm btn-info">Details</a>
                                            <a href="{{ route('pdf_invoice') }}"  style="margin: 0px 5px;" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Invoice PDF</a>
                                            <a href="{{ route('excel_invoice') }}"  style="margin: 0px 5px;" class="btn btn-sm btn-warning"><i class="fa fa-download"></i> Invoice Excel</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
