<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }
}//<link href="{{ URL::asset('adminpanel/css/material-dashboard.css') }}" rel="stylesheet" />
