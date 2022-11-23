<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
return view('admin.index');
    }

    public function dashboard2(){
        return view('dashboard2');
    }
}
