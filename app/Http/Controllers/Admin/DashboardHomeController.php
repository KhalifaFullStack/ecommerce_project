<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; //we add this because the controller file is out of the auth -- so it extends the 'controller type to this file'
use Illuminate\Http\Request; // built-in to use $request from the front 

class DashboardHomeController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.home');
    }
}
