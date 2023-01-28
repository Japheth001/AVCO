<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function AllSetDash(){
        return view('admin.settings.index');
    }

    public function EditBack(){
        return view('admin.settings.index');
    }
    
}
