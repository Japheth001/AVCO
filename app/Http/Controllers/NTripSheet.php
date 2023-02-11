<?php

namespace App\Http\Controllers;

use App\Models\NTrip;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

?>
<script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">
<?php


class NTripSheet extends Controller
{
    public function AllTripSheet()
    {
        $trips = NTrip::all();
        // return view('admin.tripsheet.add2', compact('trips'));
        return view('admin.tripsheet.add', compact('trips'));
    }

    public function ViewTrips()
    {
        $trips = NTrip::latest()->paginate(4);
        return view('admin.tripsheet.index', compact('trips'));
    }

    public function AddTrip(Request $request)
    {
        NTrip::insert([
            'user_id' => Auth::user()->id,

            'no' => $request->no,
            'kmsbf' => $request->kmsbf,
            'startdate' => $request->startdate,
            'enddate' => $request->enddate,
            'tripdays' => $request->tripdays,
            'truckno' => $request->truckno,
            'trailerno' => $request->trailerno,
            'driver' => $request->driver,
            'turnboy' => $request->turnboy,

            'gofrom' => $request->gofrom,
            'goto' => $request->goto,
            'gocargodet' => $request->gocargodet,
            'goamt' => $request->goamt,
            'goinvoice' => $request->goinvoice,
            'gopaydet' => $request->gopaydet,
            'goreceipt' => $request->goreceipt,

            'returnfrom' => $request->returnfrom,
            'returnto' => $request->returnto,
            'cargodet' => $request->cargodet,
            'amt' => $request->amt,
            'invo' => $request->invo,
            'paymentdet' => $request->paymentdet,
            'receiptno' => $request->receiptno,

            'returnfrom2' => $request->returnfrom2,
            'returnto2' => $request->returnto2,
            'cargodet2' => $request->cargodet2,
            'amt2' => $request->amt2,
            'invo2' => $request->invo2,
            'paymentdet2' => $request->paymentdet2,
            'receiptno2' => $request->receiptno2,

            'fuelallocfrom' => $request->fuelallocfrom,
            'fuelallocto' => $request->fuelallocto,
            'fuelallockms' => $request->fuelallockms,
            'fuelallocratio' => $request->fuelallocratio,
            'fuelalloclitres' => $request->fuelalloclitres,

            'fuelsupdate' => $request->fuelsupdate,
            'fuelsupstation' => $request->fuelsupstation,
            'fuelsuplitres' => $request->fuelsuplitres,
            'fuelsupauthority' => $request->fuelsupauthority,
            'fuelsupbalance' => $request->fuelsupbalance,

            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('view.tripsheets')->with('success', 'Trip Record Successfully Added');
    }

    public function GetTrip($id){

        $trips = NTrip::find($id);
         return view('admin.tripsheet.edit', compact('trips'));
    }

    public function UpdateTrip(Request $request,$id){
        
        $trips=NTrip::find($id)->update([
            'no' => $request->no,
            'kmsbf' => $request->kmsbf,
            'startdate' => $request->startdate,
            'enddate' => $request->enddate,
            'tripdays' => $request->tripdays,
            'truckno' => $request->truckno,
            'trailerno' => $request->trailerno,
            'driver' => $request->driver,
            'turnboy' => $request->turnboy,

            'gofrom' => $request->gofrom,
            'goto' => $request->goto,
            'gocargodet' => $request->gocargodet,
            'goamt' => $request->goamt,
            'goinvoice' => $request->goinvoice,
            'gopaydet' => $request->gopaydet,
            'goreceipt' => $request->goreceipt,

            'returnfrom' => $request->returnfrom,
            'returnto' => $request->returnto,
            'cargodet' => $request->cargodet,
            'amt' => $request->amt,
            'invo' => $request->invo,
            'paymentdet' => $request->paymentdet,
            'receiptno' => $request->receiptno,

            'returnfrom2' => $request->returnfrom2,
            'returnto2' => $request->returnto2,
            'cargodet2' => $request->cargodet2,
            'amt2' => $request->amt2,
            'invo2' => $request->invo2,
            'paymentdet2' => $request->paymentdet2,
            'receiptno2' => $request->receiptno2,

            'fuelallocfrom' => $request->fuelallocfrom,
            'fuelallocto' => $request->fuelallocto,
            'fuelallockms' => $request->fuelallockms,
            'fuelallocratio' => $request->fuelallocratio,
            'fuelalloclitres' => $request->fuelalloclitres,

            'fuelsupdate' => $request->fuelsupdate,
            'fuelsupstation' => $request->fuelsupstation,
            'fuelsuplitres' => $request->fuelsuplitres,
            'fuelsupauthority' => $request->fuelsupauthority,
            'fuelsupbalance' => $request->fuelsupbalance,
        ]);

        return Redirect() ->route('view.tripsheets') ->with ('update','Record Updated Successfully!');
    }


    public function DeleteTrip($id)
    
    {
   
        NTrip::find($id)->delete();
        return redirect()->back()->with('delete', 'Deleted!');
    }

}
