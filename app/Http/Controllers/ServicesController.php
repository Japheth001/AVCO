<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function AllService(){

        $services=Services::latest()->paginate(4);
        return view('admin.services.index', compact('services'));
    }

    public function NewService()
    {
        $services = Services::all();
        return view('admin.services.addnew');

    }

    public function AddService(Request $request){
      

        Services::insert([
           
            'title' => $request->title,
            'details' => $request->details,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('all.service')->with('success', 'Service Added Successfully');
    }


    public function EditService($id)
    {

        $services = Services::find($id);
        return view('admin.services.edit', compact('services'));
    }

    public function UpdateService(Request $request, $id)
    {
        
        Services::find($id)->update([
            
            'title' => $request->title,
            'details' => $request->details,
        
        ]);

        return Redirect()->route('all.service')->with('update', 'Service Updated Successfully!');
    }

    public function DeleteService($id)
    {
        Services::find($id)->delete();
        return Redirect()->route('all.service')->with('delete', 'Service Deleted Successfully');
    }

}
