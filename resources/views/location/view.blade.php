@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Location</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Location</li>
            <li class="breadcrumb-item active">View Location</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-success text-center">
                        <h5>All Active Location</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">
                                    Select All <input type="checkbox" id="active" />
                                </th>
                                <th>#</th>
                                <th>Location Name</th>
                                <th>Status</th>
                            </tr>
                            <form action="{{ route('active_location') }}" method="POST">
                                @csrf
                                @foreach ($active_view_countries as $all_view_country)
                                    <tr >
                                        <td>
                                            <input type="checkbox" name="active[]" class="form-control" value="{{ $all_view_country->id }}">
                                        </td>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $all_view_country->name }}</td>
                                        <td>{{ $all_view_country->status }}</td>
                                    </tr>
                                @endforeach
                                    <td class="text-center">
                                        <button type="submit" class="btn btn-info">Deactive</button>
                                    </td>
                            </form>
                        </table>
                    </div>
                </div>
        </div>
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-warning text-center">
                        <h5>All Deactive Location</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">
                                    Select All <input type="checkbox" id="deactive" />
                                </th>
                                <th>#</th>
                                <th>Location Name</th>
                                <th>Status</th>
                            </tr>
                            <form action="{{ route('deactive_location') }}" method="POST">
                                @csrf
                                @foreach ($deactive_view_countries as $all_view_country)
                                    <tr >
                                        <td>
                                            <input type="checkbox" name="deactive[]" class="form-control" value="{{ $all_view_country->id }}">
                                        </td>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $all_view_country->name }}</td>
                                        <td>{{ $all_view_country->status }}</td>
                                    </tr>
                                @endforeach
                                    <td class="text-center">
                                        <button type="submit" class="btn btn-info">Active</button>
                                    </td>
                            </form>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
@section('check_box')
<script src="{{ asset('dashboard') }}/assets/js/jquery-1.12.4.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/jquery.selectallcheckbox.js"></script>
<script>
    function onChange( checkboxes, checkedState ) {}
    $( document ).ready( function() {
       $( "#active" ).selectAllCheckbox( {
          checkboxesName   : "active[]",
          onChangeCallback : onChange,
          useIndeterminate : false
       } );
    } );
    $( document ).ready( function() {
       $( "#deactive" ).selectAllCheckbox( {
          checkboxesName   : "deactive[]",
          onChangeCallback : onChange,
          useIndeterminate : false
       } );
    } );
</script>
@endsection
