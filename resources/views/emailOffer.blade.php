@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Profile </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Email_Offer</li>
        </ol>
    </div>
@endsection
@section('check_box')
<script src="{{ asset('dashboard') }}/assets/js/jquery-1.12.4.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/jquery.selectallcheckbox.js"></script>
<script>
    function onChange( checkboxes, checkedState ) {}
    $( document ).ready( function() {
       $( "#selectAll" ).selectAllCheckbox( {
          checkboxesName   : "check[]",
          onChangeCallback : onChange,
          useIndeterminate : false
       } );
    } );
</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (Auth::user()->role != 1)
                <div class="card">
                    <div class="card-header bg-info text-center">
                        <h5>All Users</h5>
                    </div>
                    @if (session('select_one'))
                        <div class="alert alert-danger mt-2" style="width: 100%">
                            <b>{{ session('select_one') }}</b>
                        </div>
                    @endif
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">
                                    Select All <input type="checkbox" id="selectAll" />
                                </th>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            <form action="{{ route('check_box') }}" method="POST">
                                @csrf

                                @foreach ($email_offers as $email_offer)
                                    <tr >
                                        <td>
                                            <input type="checkbox" name="check[]" class="form-control" value="{{ $email_offer->id }}">
                                        </td>
                                        <td>{{ $loop->index +1 }}</td>
                                        <td>{{ $email_offer->name }}</td>
                                        <td>{{ $email_offer->email }}</td>
                                        <td>
                                            <a href="{{ route('send_email_offer',$email_offer->id) }}" class="btn btn-sm btn-success">Send</a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td class="text-center">
                                        <button type="submit" class="btn btn-info">Send</button>
                                    </td>
                                </tr>

                            </form>
                        </table>
                    </div>
                </div>
            @else
                <div class="alert alert-danger text-center">
                    <h5 class="text-danger">You are not allowed to view this page</h5>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
