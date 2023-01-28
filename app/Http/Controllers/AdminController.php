<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function LogOut(){
        Auth::logout();
        return Redirect()->route('login')->with('success', 'User logged out successfully');
    }
}
