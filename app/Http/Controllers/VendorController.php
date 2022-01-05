<?php

namespace App\Http\Controllers;

use App\Mail\VendorEmail;
use App\Models\User;
use App\Models\Vendor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class VendorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        return view('vendor.index',[
            'vendors'=> Vendor::all(),
        ]);
    }

    public function create()
    {
        return view('vendor.create');
    }

    public function store(Request $request)
    {
        $random_password = $request->email;
        $request->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'email'=> 'required| email',
            'address'=> 'required',
        ]);
        $user = User::create([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'password'=> bcrypt($random_password),
            'role'=> 3,
        ]);
        Vendor::insert([
            'user_id'=> $user->id,
            'address'=> $request->address,
            'created_at'=> Carbon::now(),
        ]);
        Mail::to($request->email)->send(new VendorEmail($random_password));
        return back()->with([
            'success'=> "Vendor Added Successfully",
        ]);
    }

    public function show(Vendor $vendor)
    {
        //
    }

    public function edit(Vendor $vendor)
    {
        //
    }

    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    public function destroy(Vendor $vendor)
    {
        //
    }
}
