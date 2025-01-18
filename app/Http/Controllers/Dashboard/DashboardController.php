<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->role == "admin"){
            return view("pages.admin.dashboard.index");
        }
        if(Auth::user()->role == "approver"){
            return view("pages.approver.dashboard.index");
        }
        if(Auth::user()->role == "driver"){
            return view("pages.driver.dashboard.index");
        }
    }
}
