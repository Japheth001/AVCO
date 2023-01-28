<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class VehicleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //
    
    public function AllVehicles(){
        $vehicles = Vehicle::latest()->paginate(3);
        return view('admin.vehicle.index', compact('vehicles'));
        
    }

    public function VehicleAdd(Request $request){
        //Perform Validations
        $validated = $request->validate([
            'vehicle_type' => 'required|max:255',
            'number_plate' => 'required|unique:vehicles|max:255',
            'number_desc' => 'required|max:255',
            'assigned_driver' => 'required|max:255',
            
            //'vehicle_docs' => 'required|mimes:pdf,xlx,csv|max:2048',
            
            
        ],
        [
            'vehicle_type.required' => 'Please Input Vehicle Type',
            
        ]);

        // $fileTemp=$request->file('vehicle_docs');
        
        //     $fileExtension = $fileTemp->getClientOriginalExtension();
        //     $fileName = Str::random(4). '.'. $fileExtension;
        //     $path = $fileTemp->storeAs(
        //         'public/documents', $fileName
        //     );
        

        // $vehicle_docs = $request->file('brand_image');
        // $name_gen = hexdec(uniqid());
        // $image_ext = strtolower($vehicle_docs->getClientOriginalExtension());
        // $image_name = $name_gen . '.' . $image_ext;
        // $up_location = 'public/documents/';
        // $last_img = $up_location . $image_name;
        // $vehicle_docs->move($up_location, $image_name);
        
            Vehicle::insert([

        'vehicle_type' => $request -> vehicle_type,
        'number_plate' => $request -> number_plate,
        'number_desc' =>  $request -> number_desc,
        'assigned_driver' => $request -> assigned_driver,
        'vehicle_docs' => $request -> vehicle_docs,

        //'user_id' => Auth::user() -> id,
        'created_at' =>Carbon::now()
      ]);
      
      return Redirect() ->back() ->with ('success','Vehicle Registered Successfully!');
    }

    public function EditVehicle($id){
        $vehicles = Vehicle::find($id);
        return view('admin.vehicle.edit', compact('vehicles'));
    }

    public function UpdateVehicle(Request $request, $id){
        $update = Vehicle::find($id)->update([
            'vehicle_type' => $request -> vehicle_type,
            'number_plate' => $request -> number_plate,
            'number_desc' =>  $request -> number_desc,
            'assigned_driver' => $request -> assigned_driver,
            'vehicle_docs' => $request -> vehicle_docs,
            //'user_id' =>Auth::user()->id
        ]);

        return Redirect()->route('all.vehicles')->with ('success','Vehicle Updated Successfully!');
    }

    public function DeleteVehicle($id){
        $delete=Vehicle::find($id)->delete();
        return Redirect()->route('all.vehicles')->with('success','Vehicle Name Deleted Successfully');
    }

}
