<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    function dashboard_method(){
        return view('dashboard',[
            'total_user'=> User::count(),
            'total_admin'=> user::where('role',2)->count(),
            'total_customer'=> user::where('role',1)->count(),
        ]);
    }
}
