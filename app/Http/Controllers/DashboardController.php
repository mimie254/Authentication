<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard(){

        dd(Auth::user()->name);
        if (Auth::user()->is_admin==0){
            return view('admin.index');
        }
        else { return view('dashboard2');
        }

    }

    public function dashboard2(){
        return view('dashboard2');    }
}
