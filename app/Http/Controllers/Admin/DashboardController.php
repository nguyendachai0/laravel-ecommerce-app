<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function index()
    {
        if (!Auth::check() || Auth::user()->role_as == '1') {


            return redirect('/login');
        }
        return view('admin.dashboard');
    }
}
