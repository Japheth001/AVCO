<?php

namespace App\Http\Controllers;

use App\Models\Fuels;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class FuelController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function AllFuel(){
        
        $fuels = Fuels::latest()->paginate(4);
        return view('admin.fuels.index', compact('fuels'));
    }

    public function FuelAdd(Request $request){
        Fuels::insert([
            'user_id' => Auth::user()->id,
            'truck_no' => $request->truck_no,
            'station' => $request->station,
            'gallons' => $request->gallons,
            'price' => $request->price,
            'date' => $request->date,
            'receipt' => $request->receipt,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->back()->with('success', 'Fuel Record Added Successfully');
    }


    public function EditFuel($id){
        $fuels=Fuels::find($id);
        return view('admin.fuels.edit', compact('fuels'));
    }

    public function UpdateFuel(Request $request, $id){
        Fuels::find($id)->update([
            'truck_no' => $request->truck_no,
            'station' => $request->station,
            'gallons' => $request->gallons,
            'price' => $request->price,
            'date' => $request->date,
            'receipt' => $request->receipt,
        ]);

        return Redirect()->route('all.fuel')->with('success', 'Fuel Record Updated Successfully');
    }

    public function DeleteFuel($id){
        Fuels::find($id)->delete();

        return Redirect()->route('all.fuel')->with ('success','Trip Record Deleted Successfully!');
    }
}
