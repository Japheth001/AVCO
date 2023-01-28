<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegController extends Controller
{
    //
    public function AllReg(){
        $registers = Register::latest()->paginate(4);
        return view('admin.employees.register',compact('registers'));
    }

    public function RegisterAdd(Request $request){
        Register::insert([
            'name' => $request->name
        ]);

        return Redirect()->back()->with('success', ' Record Added Successfully');
    }

    public function Register(Request $request, $id){
        Register::find($id)->update([
            
            'name' => $request->name,
        
        ]);

        return Redirect()->route('all.reg')->with('success', ' Record Updated Successfully');
    }


    public function UpdateReg(Request $request){
        Register::insert([
            'name' => $request->name
        ]);

        return Redirect()->back()->with('success', ' Record Added Successfully');
    }
 
}
