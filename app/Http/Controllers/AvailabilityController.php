<?php

namespace App\Http\Controllers;

use App\Models\Availability;

use Carbon\Carbon;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    public function AllAvailability(){

        $availabilities=Availability::latest()->paginate(4);
        return view('admin.available.index', compact('availabilities'));
    }

    public function NewAvailability()
    {
        $availabilities = Availability::all();
        return view('admin.available.addnew');

    }

    public function AddAvailability(Request $request){
      

        Availability::insert([
           
            'monfri' => $request->monfri,
            'saturday' => $request->saturday,
            'sunday' => $request->sunday,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('all.available')->with('success', 'Record Added Successfully');
    }


    public function EditAvailability($id)
    {

        $availabilities = Availability::find($id);
        return view('admin.available.edit', compact('availabilities'));
    }

    public function UpdateAvailability(Request $request, $id)
    {
        
        Availability::find($id)->update([
            
            'monfri' => $request->monfri,
            'saturday' => $request->saturday,
            'sunday' => $request->sunday,
        
        ]);

        return Redirect()->route('all.available')->with('update', 'Record Updated Successfully!');
    }

    public function DeleteAvailability($id)
    {
        Availability::find($id)->delete();
        return Redirect()->route('all.available')->with('delete', 'Record Deleted Successfully');
    }

}
