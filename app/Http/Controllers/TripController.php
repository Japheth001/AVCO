<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

?>
<script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">
<?php

class TripController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function AllTrip()
    {
        $trips = Trip::latest()->paginate(4);
        return view('admin.trip.indexes', compact('trips'));
    }

    public function TripAdd(Request $request)
    {
        Trip::insert([
            'user_id' => Auth::user()->id,
            'trailer' => $request->trailer,
            'route' => $request->route,
            'depart_date' => $request->depart_date,
            'return_date' => $request->return_date,
            'origin' => $request->origin,
            'destination' => $request->destination,
            'distance' => $request->distance,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('all.trip')->with('success', 'Trip Record Successfully Added');
    }

    public function EditTrip($id){
        $trips=Trip::find($id);
        return view('admin.trip.edit', compact('trips'));
    }

    public function UpdateTrip(Request $request, $id){
        $update = Trip::find($id)->update([
            'trailer' => $request->trailer,
            'route' => $request->route,
            'depart_date' => $request->depart_date,
            'return_date' => $request->return_date,
            'origin' => $request->origin,
            'destination' => $request->destination,
            'distance' => $request->distance,
        ]);

        return Redirect()->route('all.trip')->with ('success','TripSheet Updated Successfully!');
    }

    public function DeleteTrip($id){
        $delete=Trip::find($id)->delete();

        return Redirect()->route('all.trip')->with ('success','Trip Record Deleted Successfully!');
    }
    
}
