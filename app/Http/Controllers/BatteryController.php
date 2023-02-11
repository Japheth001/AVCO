<?php

namespace App\Http\Controllers;

use App\Models\Battery;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

?>
<script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">
<?php


class BatteryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddBattery()
    {

        // $expenses = Maintenance::latest()->paginate(4);
        // return view('admin.expenses.index', compact('expenses'));

        $batteries = Battery::latest()->paginate(4);
        // return view('admin.expenses.index',compact('expenses'));
        return view('admin.battery.edit', compact('batteries'));

    }
    public function NewBattery()
    {

        $batteries = Battery::all();
        // return view('admin.battery.add', compact('batteries'));
        return view('admin.battery.add3', compact('batteries'));

    }

    public function AddsBattery(Request $request)
    {

        Battery::insert([
            'truck_id' => $request->truck_id,
            'avco' => $request->avco,
            'serial_no' => $request->serial_no,
            'make' => $request->make,
            'size' => $request->size,

            'status' => $request->status,
            'supplier' => $request->supplier,
            'date_purchased' => $request->date_purchased,
            'price' => $request->price,
            'date_install' => $request->date_install,

            'verified_date' => $request->verified_date,
            'movement' => $request->movement,
            'comments' => $request->comments,
            

            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('all.battery')->with('success', 'Record Added Successfully');
    }
    
    public function AllBattery(){
        $batteries = Battery::latest()->paginate(4);
        return view('admin.battery.index', compact('batteries'));
    }
    public function GetNewBattery($id){
        $batteries = Battery::find($id);
        return view('admin.battery.edit', compact('batteries'));
    }
    public function UpdateBattery(Request $request, $id){
        $update = Battery::find($id)->update([
            'truck_id' => $request->truck_id,
            'avco' => $request->avco,
            'serial_no' => $request->serial_no,
            'make'=>$request->make,
            'size'=>$request->size,
            'status'=>$request->status,
            'supplier'=>$request->supplier,
            'date_purchased'=>$request->date_purchased,
            'price'=>$request->price,
            'date_install'=>$request->date_install,
            'verified_date'=>$request->verified_date,
            'movement'=>$request->movement,
            'comments'=>$request->comments,
        ]);

        return Redirect()->route('all.battery')->with ('update','Record Updated Successfully!');
    }

    public function DeleteBattery($id)
    {
        Battery::find($id)->delete();
        return Redirect()->route('all.battery')->with('delete', 'Record Deleted Successfully');
    }

}
