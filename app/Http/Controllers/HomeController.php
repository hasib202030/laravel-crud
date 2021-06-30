<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// new add name 
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        
        $role=Auth::user()->role;      
        
        if ($role == '1') {
            return view('admin.dashboard');
        }else{
            return view('dashboard');
        }
    }
}
